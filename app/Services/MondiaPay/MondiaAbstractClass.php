<?php

namespace App\Services\MondiaPay;

use App\Repository\Eloquent\MondiaPaySubscriptionRepository;
use Exception;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\GenericProvider;
use Illuminate\Http\Request;
use App\Models\Logs\BaseLogClass;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Repository\Interfaces\MondiaPayLeadInterface;

abstract class MondiaAbstractClass
{
    use GeneralTrait;

    public const BASE_URL = 'http://gateway.mondiapay.com/v1/api';

    public $payLoad;

    public $clientAccessToken;

    public $response;

    public function __construct(
        protected MondiaPaySubscriptionRepository $mondiaPaySubscriptionRepository,
        protected Request $request,
        protected MondiaPayLeadInterface $mondiaPayLead
    ) {
        $this->mondiaPaySubscriptionRepository = $mondiaPaySubscriptionRepository;
        $this->request = $request;
        $this->mondiaPayLead = $mondiaPayLead;
    }

    public function setSubscription()
    {
        $this->subscription = $this->mondiaPaySubscriptionRepository->findOne(
            ['subService_ID' => $this->payLoad ? $this->payLoad->subService_ID : $this->request->subservice_id],
            ['*'],
            ['config']
        );
    }

    public function setClientAccessToken()
    {
        $provider = new GenericProvider([
            'clientId'                => optional(optional($this->subscription)->config)->client_id ?? '',
            'clientSecret'            => optional(optional($this->subscription)->config)->client_secret ?? '',
            'urlAuthorize'            => self::BASE_URL . '/oauth/authorize',
            'urlAccessToken'          => self::BASE_URL . '/oauth/token',
            'urlResourceOwnerDetails' => self::BASE_URL . '/oauth/resource'
        ]);

        try {
            $this->clientAccessToken = $provider->getAccessToken('client_credentials');
        } catch (IdentityProviderException $e) {
            throw new Exception('Connection error with mondia pay');
        }
    }

    public function setHeaders()
    {
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function sendRequest($method, $url, $headers, $body = null)
    {
        $log = [
            'url' => $url,
            'request' => json_encode($body),
        ];

        try {
            $response = Http::withHeaders($headers)->post($url, $body);

            if ($response->clientError()) {
                $response = json_decode($response, true);

                $doNoting = false;
                $errors = array("FORBIDDEN", "BAD_REQUEST", "UNAUTHORIZED", "PAYMENT_REQUIRED",
                "NOT_FOUND", "CONFLICT", "INTERNAL_SERVER_ERROR", "NOT_IMPLEMENTED",
                "BAD_GATEWAY", "GATEWAY_TIMEOUT");

                if ($response['error'] === 'INSUFFICIENT_FUNDS') {
                    $doNoting = true;
                }

                if ($response['error'] === 'INCORRECT_OTP' && env('BYPASS_OTP')) {
                    $doNoting = true;
                }

                $log['response'] = json_encode($response);

                if ($response['error'] && !$doNoting) {
                    throw new Exception(json_encode($response));
                }
            } else {
                $this->response = json_decode($response->getBody(), true);

                $log['response'] = json_encode($this->response);
            }
        } catch (\Exception $exception) {
            throw $exception;
        } finally {
            $this->log($log, 'mondiapay_logs');
        }
    }

    public function mondiaPayLead()
    {
        $dataToUpdate = [
            'lead_id' => $this->response->get('lead_id'),
            'subscriber_id' => $this->response->get('subscriber_id') ?? null,
            'lead_status' => true,
            'status' => $this->response->get('subscriber_id') ? true : 0,
        ];

        if ($this->response->get('msisdn')) {
            $dataToUpdate['msisdn'] = $this->response->get('msisdn');
        }
        if ($this->response->get('purchase_token')) {
            $dataToUpdate['code'] = $this->response->get('purchase_token');
        }

        return $this->mondiaPayLead->updateOrCreate(
            ['lead_id' => $this->response->get('lead_id')],
            $dataToUpdate
        );
    }

    public function toArray()
    {
        return $this->response->toArray();
    }
}
