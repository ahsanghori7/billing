<?php

namespace App\Services\MondiaPay;

use Exception;

class SendPinService extends MondiaAbstractClass
{
    public function send($payLoad = null)
    {
        $this->payLoad = $payLoad;
        $this->setSubscription();
        $this->setClientAccessToken();
        $this->setHeaders();
        $this->purchaseSubscription();
        $this->mondiaPayLead();
        return $this->toArray();
    }

    public function purchaseSubscription()
    {
            $headers = $this->headers;
            $headers['Authorization'] = 'Bearer ' . $this->clientAccessToken;

            $body = [
                'msisdn' => optional($this->payLoad)->msisdn ?? $this->request->msisdn,
                'subscriptionTypeId' => optional($this->subscription)->daily_service_id,
            ];

            $this->sendRequest('POST', self::BASE_URL . '/purchase/subscription', $headers, $body);

            $this->response = collect([
                'purchase_token' => $this->response['purchaseToken'] ?? '',
                'msisdn' => optional($this->payLoad)->msisdn ?? $this->request->msisdn,
                'lead_id' => optional($this->payLoad)->ID ?? $this->request->lead_id,
            ]);

        return $this;
    }
}
