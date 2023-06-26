<?php

namespace App\Services\MondiaPay;

use App\Repository\Interfaces\MondiaPayLeadInterface;
use App\Repository\Interfaces\MondiaPayNotificationInterface;
use Exception;
use App\Repository\Eloquent\SubscriberRepository;
use Carbon\Carbon;
use App\Models\MondiaPay\MondiaPayStatistic;
use Illuminate\Support\Facades\DB;
use App\Traits\GeneralTrait;
use App\Services\SubscriberService;

class NotificationService
{
    use GeneralTrait;

    public function __construct(
        protected MondiaPayLeadInterface $mondiaPay,
        protected MondiaPayNotificationInterface $mondiaNotification,
        protected SubscriberRepository $subscriber,
        protected SubscriberService $subscriberService,
    ) {
        $this->mondiaPay = $mondiaPay;
        $this->mondiaNotification = $mondiaNotification;
        $this->subscriberService = $subscriberService;
    }

    public function noticiationCreate(object $payLoad)
    {
        try {
            $startDate = $payLoad->filled('startDate') ?
            Carbon::parse($payLoad->get('startDate'))->toDateTimeString() : '';
            $endDate = $payLoad->filled('endDate') ?
            Carbon::parse($payLoad->get('endDate'))->toDateTimeString() : '';
            $eventDateTime = $payLoad->filled('eventDateTime') ?
            Carbon::parse($payLoad->get('eventDateTime'))->toDateTimeString() : '';

            $mondiaLead = $this->mondiaPay->getLead($payLoad);

            if (!$mondiaLead) {
                return false;
            }

            $subscriberId = $mondiaLead->subscriber_id ?? null;

            $mpNotification = $this->mondiaNotification->create([
            'uuid' => $payLoad->uuid,
            'purchase_token' => $payLoad->purchaseToken,
            'subscription_id' => $payLoad->subscriptionId,
            'subscription_type_id' => $payLoad->subscriptionTypeId,
            'event' => $payLoad->event,
            'reason' => $payLoad->reason,
            'status' => $payLoad->status,
            'sub_status' => $payLoad->subStatus,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'price_amount' => $payLoad->price['amount'] ?? '',
            'price_currency' => $payLoad->price['currency'] ?? '',
            'trial_end_date' => $payLoad->trialEndDate,
            'tagged_for_cancellation' => $payLoad->taggedForCancellation,
            'event_date_time' => $eventDateTime,
            'event_uuid' => $payLoad->eventUUID,
            'full_response' => $payLoad->all(),
            ]);

            $chargedAmount = $mpNotification->price_amount ?? null;

            $subscriptions = $mondiaLead->lead->subscriptions ?? null;

         # New subscription
            if ('CREATE' === $payLoad->event) {
                $subscriberCreate = $this->subscriberService->createSubscriber($mondiaLead->lead);
                $subscriberId = ($subscriberCreate != false) ? $subscriberCreate->ID : null;
                if ('CREATE_ACTIVE' === $payLoad->reason) {
                    if (isset($mpNotification->service->operator_id) && $mpNotification->service->operator_id == 86) {
                        $chargedAmount = $mpNotification->service->end_user_tarrif;
                    }
                }
            }


            if ('ACTIVATE' === $payLoad->event) {
                $this->subscriber->update(['ID' =>  $subscriberId], ['SubsLock' => false]);
            }

            if ('DEACTIVATE' === $payLoad->event) {
                $this->subscriber->update(['ID' =>  $subscriberId], ['SubsLock' => true]);
            }

        # Cancel subscription
            if ('CANCEL' === $payLoad->event) {
                if (null !== $subscriptions) {
                    foreach ($mondiaLead->lead->subscriptions as $sub) {
                        $this->subscriberService->deleteSubscription($sub);
                    }
                }
            }

            if (!empty($subscriberId)) {
                $mondiaLead->subscriber_id = $subscriberId;
                $mondiaLead->lead_status = ($mondiaLead->lead_status == 0) ? 1 : $mondiaLead->lead_status;
                $mondiaLead->save();

                $mpNotification->lead_id = $mondiaLead->lead_id;
                $mpNotification->subscriber_id = $mondiaLead->subscriber_id;
                $mpNotification->save();
            }


            if ($chargedAmount > 0 && ($mpNotification && $mpNotification->service)) {
                $date = date('Y-m-d H:i:s');
                $subscriber = $this->subscriber->findById($subscriberId);
                $successBilling = $subscriber ?? $subscriber->SuccessBilling + 1 ;
                $this->subscriber->update(
                    ['ID' =>  $subscriberId],
                    ['LastSuccBill' => $date, 'SuccessBilling' => $successBilling]
                );
                $startDate =  date("Y-m-d", strtotime($subscriber->Subdate));

                if (empty($subscriber->SuccessBilling)) {
                    $this->subscriber->update(['ID' =>  $subscriberId], ['FirstBilling' => $date]);
                } else {
                    $subscriber["type"] = 'delivered';
                    $this->addToStats($subscriber);
                    if ($startDate == date('Y-m-d')) {
                        $subscriber["type"] = 'instantBilling';
                        $this->addToStats($subscriber);
                    }
                }
                $eut = $mpNotification->service->end_user_tarrif ?? 0.00;

                $operatorId = $mpNotification->service->operator_id ?? 0;
                $countryId = $mpNotification->service->country_id ?? 0;
                $subscirptionTypeId = $mpNotification->subscription_type_id ?? 0;
                $serviceName = $mpNotification->service->service_name ?? '';
                $date = Carbon::now()->toDateString();

                $fullBillingUser = 0;
                $fullBillingAmount = 0.00;
                $partialBillingUsers = 0;
                $partialBillingAmount = 0.00;

                if ($chargedAmount == $eut) {
                    $fullBillingUser = 1;
                    $fullBillingAmount = round($chargedAmount, 2);
                } else {
                    $partialBillingUsers = 1;
                    $partialBillingAmount = round($chargedAmount, 2);
                }

                $totalUsers = 1;
                $totalAmount = round($chargedAmount, 2);
                $earning = round($chargedAmount * $mpNotification->service->revenue_percent, 2);

                MondiaPayStatistic::updateOrCreate([
                'operator_id' => $operatorId,
                'country_id' => $countryId,
                'subscription_type_id' => $subscirptionTypeId,
                'date' => $date,
                ], [
                'operator_id' => $operatorId,
                'country_id' => $countryId,
                'subscription_type_id' => $subscirptionTypeId,
                'service_name' => $serviceName,
                'date' => $date,
                'full_billing_users' => DB::raw('full_billing_users + ' . $fullBillingUser),
                'full_billing_amount' => DB::raw('full_billing_amount + ' . $fullBillingAmount),
                'partial_billing_users' => DB::raw('partial_billing_users + ' . $partialBillingUsers),
                'partial_billing_amount' => DB::raw('partial_billing_amount + ' . $partialBillingAmount),
                'total_users' => DB::raw('total_users + ' . $totalUsers),
                'total_amount' => DB::raw('total_amount + ' . $totalAmount),
                'earning' => DB::raw('earning + ' . $earning),
                ]);

                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
