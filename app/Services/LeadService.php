<?php

namespace App\Services;

use App\Repository\Interfaces\LeadInterface;
use App\Repository\Interfaces\SubServiceInterface;
use Exception;
use Json;
use App\Repository\Eloquent\SubscriberRepository;
use App\Models\Leads;

class LeadService
{
    public function __construct(
        protected LeadInterface $Lead,
        protected SubServiceInterface $SubService,
        protected SubscriberRepository $Subscriber
    ) {
        $this->SubService = $SubService;
        $this->Lead = $Lead;
        $this->Subscriber = $Subscriber;
    }

    public function leadGeneration($request)
    {
        $timeFirst  = strtotime(date('Y-m-d H:i:s'));
        $lead = $this->Lead->findOne(['msisdn' => $request->msisdn,'subservice_id' => $request->subservice_id]);
        if ($lead) {
            $CheckSubscriber = $this->Subscriber->findOne(['leads_id' => $lead->ID]);
            if ($CheckSubscriber) {
                if (!is_null($CheckSubscriber->SubsLock)) {
                    $errorCode = 'E01' ;
                } else {
                    $errorCode = 'E02' ;
                }
                return $errorCode;
            }
        }

        return $this->saveLead($request, $lead);
    }

    public function saveLead($request, $lead = null)
    {
        try {
            if (!$lead) {
                $lead = $this->Lead->findOne(['msisdn' => $request->msisdn,'subservice_id' => $request->subservice_id]);
            }
            $freeTrial = false;
            $serviceDetails = $this->SubService->findOne(['id' => $request->subservice_id], ['*'], ['integration']);
            if (!$serviceDetails) {
                return 'E07';
            }
            $operatorsID = $serviceDetails->operators_id;
            $countryID = $serviceDetails->country_id;
            $serviceID = $serviceDetails->service_id;
            $shortcode = $serviceDetails->shortcode;
            $freeShortcode = $serviceDetails->free_shortcode;
            $isFree = $serviceDetails->free_trial;
            $integrationID = $serviceDetails['integration_id'];
            $GetIsUnique = $serviceDetails->integration->unique_by_sc;
            if ($GetIsUnique) {
                $CheckIfSub = $this->Subscriber->findone(['msisdn' => $request->msisdn,'shortcode' => $shortcode]);
                if ($CheckIfSub) {
                    return 'E02';
                }
            }
            $pin = random_int(1000, 9999);
            $contentGroup = $request->group ?? 0;
            $source = $request->source ?? 'Atlas';
            $minisite = $request->minisite ?? 'Atlas';
            $clickId = $request->click_id ?? '' ;
            $subsource = $request->subSource ?? 'Atlas';
            if ($request->click_id && !$request->subSource) {
                $subsource = $request->source;
            }
            $ip = $request->ip ? $request->ip : $request->ip();
            if ($lead) {
                $dateToday = date("Y-m-d H:i:s");
                $Data = [
                "pin" => $pin, "Subdate" => $dateToday, "ContentGroup" => $contentGroup,
                "source" => $source, "subsource" => $subsource, "IP" => $ip, "minisite" => $minisite,
                'click_id' => $clickId
                ];
                $return = $this->Lead->update(['id' => $lead->ID], $Data);
                return $return;
            }

            $status = 0;
            $cseq = 1;
            $subDate = date("Y-m-d H:i:s");
            $Data = [
            "msisdn" => $request->msisdn, "pin" => $pin, "Operators_ID" => $operatorsID,
            "Country_ID" => $countryID, "Service_ID" => $serviceID,
            "subService_ID" => $request->subservice_id, "CSeq" => $cseq,
            "status" => $status, "Subdate" => $subDate, "ContentGroup" => $contentGroup,
            "source" => $source, "subsource" => $subsource, "IP" => $ip, "minisite" => $minisite,
            "Integration_ID" => $integrationID, "shortcode" => $shortcode, 'FreeShortcode' => $freeShortcode,
            'IsFree' => $freeTrial, "FreeCounter" => $isFree, 'click_id' => $clickId
            ];

            $return =  $this->Lead->create($Data);

            return $return;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getIntegration(int $leadId)
    {
        try {
            $Lead = $this->Lead->findById($leadId, ['*'], ['integration']);
            return $Lead;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
