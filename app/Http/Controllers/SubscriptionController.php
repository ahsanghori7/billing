<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepositoryInterface;
use App\Services\LeadService;
use App\Http\Requests\UnsubscribeRequest;
use App\Http\Requests\LeadGenerationRequest;
use App\Http\Requests\PinRequest;
use App\Services\LookupService;
use App\Factory\IntegrationFactory;
use App\Services\SubscriberService;
use App\Enums\SuccessCodesEnum;
use App\Services\ProcessSubscriberService;
use App\Enums\ErrorCodesEnum;
use App\Repository\Interfaces\SubscriberInterface;
use App\Repository\Interfaces\MondiaPayLeadInterface;

class SubscriptionController extends Controller
{
    public function __construct(
        protected LeadService $leadService,
        protected LookupService $lookupService,
        protected SubscriberService $subscriber,
        protected SubscriberInterface $subscriberRepo
    ) {
        $this->leadService = $leadService;
        $this->lookupService = $lookupService;
        $this->subscriber = $subscriber;
        $this->subscriberRepo = $subscriberRepo;
    }

    public function generateLead(LeadGenerationRequest $request)
    {
        try {
            if ($request->service) {
                $response = $this->lookupService->getSubService($request);
                $request->request->set("subservice_id", $response->original['body']['id']);
            }

            $leadResponse = $this->leadService->leadGeneration($request);
            if (!in_array($leadResponse, ErrorCodesEnum::names())) {
                $integration = $this->leadService->getIntegration($leadResponse->ID);
                $integrationClass = IntegrationFactory::getintegration((object) $integration);
                return $integrationClass::sendOtp($leadResponse);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => ErrorCodesEnum::message($leadResponse),
                    'errorCode' => $leadResponse
                    ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function confirmPin(PinRequest $pinRequest)
    {
        $integration = $this->leadService->getIntegration($pinRequest->lead_id);
        $integrationClass = IntegrationFactory::getintegration((object) $integration);
        $verify = $integrationClass::verifyOtp($integration);
        if ($verify['code'] || env('BYPASS_OTP') == true) {
            $integration->landing_id = $pinRequest->landing_id;
            $subscribe = $this->subscriber->createSubscriber($integration);
            if ($subscribe != false) {
                $integrationClass::updateMondiaPay($subscribe);
                return response()->json([
                'status' => true,
                'message' => SuccessCodesEnum::message('S01'),
                'successCode' => 'S01'
                ]);
            } else {
                return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message('E03'),
                'errorCode' => 'E03'
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message('E04'),
                'errorCode' => 'E04'
                ]);
        }
    }

    public function unsubscribe(UnsubscribeRequest $unsubscribeRequest)
    {
        $subscriber = $this->subscriberRepo->findOne(['id' => $unsubscribeRequest->subscriber_id]);
        if ($subscriber == null) {
            return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message('E08'),
                'errorCode' => 'E08'
                ]);
        }
        $res = $this->subscriber->deleteSubscription($subscriber);
        if (!in_array($res, ErrorCodesEnum::names())) {
            return response()->json([
                'status' => true,
                'message' => ErrorCodesEnum::message('S02'),
                'errorCode' => 'S02'
                ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => ErrorCodesEnum::message($res),
                'errorCode' => $res
                ]);
        }
    }
}
