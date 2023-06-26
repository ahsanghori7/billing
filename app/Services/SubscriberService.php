<?php

namespace App\Services;

use App\Repository\Interfaces\SubscriberInterface;
use App\Repository\Interfaces\LeadInterface;
use Illuminate\Support\Facades\DB;
use App\Repository\Interfaces\SubServiceInterface;
use App\Repository\Interfaces\LandingInterface;
use App\Traits\GeneralTrait;
use App\Repository\Interfaces\MessagesTemplateInterface;
use App\Jobs\CallBack;
use App\Jobs\SendSms;
use App\Services\LeadService;
use App\Factory\IntegrationFactory;

class SubscriberService
{
    use GeneralTrait;

    public function __construct(
        protected SubscriberInterface $subscriber,
        protected LeadInterface $lead,
        protected SubServiceInterface $subService,
        protected LandingInterface $landing,
        protected MessagesTemplateInterface $messages,
        protected LeadService $leadService,
    ) {
        $this->subscriber = $subscriber;
    }

    public function createSubscriber(object $request)
    {
            $tryResponce =  DB::transaction(function () use ($request) {
                try {
                    unset(
                        $request->unsubDate,
                        $request->unsubCode,
                        $request->unsubComment,
                        $request->Subdate,
                        $request->locked,
                        $request->click_id
                    );

                    $this->lead->update(['id' => $request->id], ['status' => 1]);
                    $subService = $this->subService->findOne(['id' => $request->subservice_id]);
                    $request = $request->toArray();
                    $request["Leads_ID"] = $request['ID'];
                    if ($subService && $subService->InstantContent) {
                        $request["Used"] = 1;
                    }
                    $subscriber = $this->subscriber->updateOrCreate($request);
                    if ($subscriber) {
                        $subscriber->lead_id = $request["Leads_ID"];
                        return $subscriber;
                    }
                } catch (\Throwable $th) {
                    throw $th;
                } finally {
                    $this->landing->increaseCounter((object) $request);
                }
            });
            return is_null($tryResponce) ? false : $tryResponce;
    }

    public function deleteSubscription(object $subscriber)
    {
        try {
            $date = date("Y-m-d");
            if (substr($subscriber->Subdate, 0, 10) == substr($date, 0, 10)) {
                $subscriber->type = 'newUnSub';
            } else {
                $subscriber->type = 'unSub';
            }
            $this->addToStats($subscriber);

            $integration = $this->leadService->getIntegration($subscriber->Leads_ID);
            $integrationClass = IntegrationFactory::getintegration((object) $integration);
            $integrationClass::removeSubscription();

            if ($subscriber->sendexit) {
                $subscriber->type = 'GoodBye';
                $subscriber->free = true;
                $subscriber->priority = 'high';
                SendSms::dispatch($subscriber);
            }
            $subscriber->action = 'unsub';
            CallBack::dispatch($subscriber);
            $this->lead->update([
                "status" => 0,
                "Cseq" => $subscriber->Cseq,
                "deliveryState" => $subscriber->deliveryState,
                "NextContent" => $subscriber->NextContent,
                "SuccessBilling" => $subscriber->SuccessBilling,
                "BillAttempts" => $subscriber->BillAttempts,
                "LastSuccBill" => $subscriber->LastSuccBill,
                "FirstBilling" => $subscriber->FirstBilling,
                "LastDelivery" => $subscriber->LastDelivery,
                "NextRetry" => $subscriber->NextRetry,
                "unsubDate" => date("Y-m-d H:i:s"),
                "unsubComment" => 'normal',
                'IsFree' => 0,
                'FreeCounter' => 0,
                'CountSent' => 0
            ], [$subscriber->Leads_ID]);
            $this->subscriber->deleteById($subscriber->ID);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
