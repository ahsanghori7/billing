<?php

namespace App\Services\MondiaPay;

use Exception;

class PurchaseService extends MondiaAbstractClass
{
    public function purchase($payLoad = null)
    {
        $this->setSubscription();
        $this->setClientAccessToken();
        $this->setHeaders();
        $this->preparePurchase();
    }

    private function preparePurchase()
    {
            $headers = $this->headers;
            $headers['Authorization'] = 'Bearer ' . $this->clientAccessToken;

            $body = [
                'redirect' => $this->resolveRedirect(),
                'subscriptionTypeId' => optional($this->subscription)->daily_service_id,
            ];
            $this->sendRequest('POST', self::BASE_URL . '/purchase/subscription/prepare', $headers, $body);

            $this->response = collect([
                'purchase_url' => $this->response['_links']['initiatePurchase']['href'] ?? ''
            ]);


        return $this;
    }

    private function resolveRedirect()
    {
        $redirect = "http://billing.atlas-me.com";
        $redirect .= '/integrations/mondiapay/thankyou.php?';
        $redirect .= http_build_query([
            'lead' => optional($this->payLoad)->ID ?? $this->request->get('lead_id'),
            'msisdn' => optional($this->payLoad)->msisdn ?? $this->request->get('msisdn'),
        ]);
        return $redirect;
    }
}
