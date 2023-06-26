<?php

namespace App\Services\MondiaPay;

use Exception;
use App\Services\SubscriberService;

class UnsubscribeService extends MondiaAbstractClass
{
    /**
     * @var string
     */
    protected $userAccessToken;

    /**
     * @var array
     */
    protected $subscriptionDetail;


    public function remove($payLoad = null)
    {
        $this->setMondiaLead();
        $this->setSubscription();
        $this->setHeaders();
        $this->setUserAccessToken();
        $this->fetchSubscriptionDetails();
        return $this->deleteSubscription();
    }

    private function setMondiaLead()
    {
        $this->mondiaLead =  $this->mondiaPayLead->findOne(
            ['subscriber_id' => $this->request->subscriber_id, 'lead_status' => 1]
        );
        if ($this->mondiaLead === null) {
            return 'E08';
        }
    }

    private function setUserAccessToken(): string
    {
        try {
            $headers = $this->headers;
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';

            $queryParams = [
                'grant_type' => 'user_credentials',
                'client_id' => optional(optional($this->subscription)->config)->client_id ?? '',
                'client_secret' => optional(optional($this->subscription)->config)->client_secret ?? '',
                'uuid' => optional($this->mondiaLead)->uuid ?? '',
            ];

            $this->sendRequest('POST', self::BASE_URL . '/oauth/token?' . http_build_query($queryParams), $headers);

            $this->userAccessToken = $this->response['access_token'];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function fetchSubscriptionDetails(): void
    {
        try {
            $headers = [
                'Authorization' => 'Bearer ' . $this->userAccessToken
            ];

            $queryParams = [
                'subscriptionTypeId' => optional($this->subscription)->daily_service_id ?? '',
            ];

            $this->sendRequest('POST', self::BASE_URL . '/subscription?' . http_build_query($queryParams), $headers);

            $this->subscriptionDetail = $this->response;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function deleteSubscription()
    {
        try {
            $headers = [
                'Authorization' => 'Bearer ' . $this->userAccessToken
            ];

            foreach ($this->subscriptionDetail as $subscription) {
                $queryParams = [
                    'subscriptionTypeId' => optional($this->subscription)->daily_service_id ?? '',
                    'immediately' => true
                ];

                $url = self::BASE_URL . '/subscription/' . $subscription['id'] . '?';
                $url .= http_build_query($queryParams);
                $this->send('DELETE', $url, $headers);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $this;
    }
}
