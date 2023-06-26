<?php

namespace App\Services\MondiaPay;

use Exception;

class ConfirmPinService extends MondiaAbstractClass
{
    public function verify($payLoad = null)
    {
        $this->payLoad = $payLoad;
        $this->setSubscription();
        $this->setClientAccessToken();
        $this->setHeaders();
        $this->confirmSubscription();
        return $this->toArray();
    }

    private function confirmSubscription()
    {
        $headers = $this->headers;
        $headers['Authorization'] = 'Bearer ' . $this->clientAccessToken;

        $body = [
            'pin' => $this->request->pin,
            'purchaseToken' => $this->request->purchase_token,
        ];

        $this->sendRequest('POST', self::BASE_URL . '/purchase/subscription/confirm', $headers, $body);

        $this->response = collect(['code' => $this->response['code'] ?? null]);

        return $this;
    }

    public function setMondiaPayLead($payLoad)
    {
        $this->response = collect(
            ['lead_id' => $payLoad->lead_id , 'subscriber_id' => $payLoad->id ?  $payLoad->id : $payLoad->ID]
        );
        $this->mondiaPayLead();
    }
}
