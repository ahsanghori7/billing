<?php

namespace App\Services;

use App\Repository\Interfaces\MarketingAffiliatesInterface;
use App\HttpRequest\HttpRequest;
use App\Traits\GeneralTrait;

class AffiliateService extends HttpRequest
{
    use GeneralTrait;

    public function __construct(protected MarketingAffiliatesInterface $marketingAffiliates)
    {
        $this->marketingAffiliates = $marketingAffiliates;
    }

    public function affiliateCallback(object $payLoad)
    {
        try {
            $affiliate = $this->marketingAffiliates->getAffiliates($payLoad);
            $postbackData = [];
            if ($affiliate->count() !== 0) {
                $affiliate = $affiliate[0];
                foreach ($affiliate->affiliateParams as $param) {
                    if ('[clickid]' === $param->value) {
                        $param->value = !empty($payLoad->click_id) ? $payLoad->click_id : $payLoad->subsource;
                    }

                    if ('[pubid]' === $param->value) {
                        $param->value = $payLoad->subsource;
                    }

                    $postbackData[$param->key] = $param->value;
                }

                $res =  $this->sendRequest($affiliate->method, $affiliate->postback_url, json_encode($postbackData));
                $data = ['affiliate_id' => $affiliate->id, 'lead_id' => $payLoad->Leads_ID,
                'request_json' => json_encode($postbackData),
                'response_json' => json_encode(json_decode($res->getBody(), true))];

                if ($res->getStatusCode() == 200) {
                    $data = array_merge($data, ['callback_sent' => true]) ;
                } else {
                    $data = array_merge($data, ['callback_sent' => false]) ;
                }
                $this->log($data, 'affiliates_log');
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
