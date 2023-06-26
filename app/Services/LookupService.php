<?php

namespace App\Services;

use Twilio\Rest\Client;
use App\Repository\Interfaces\OperatorInterface;
use Exception;

class LookupService
{
    public function __construct(protected OperatorInterface $Operator)
    {
        $this->Operator = $Operator;
    }

    protected function lookupPhone($request): string
    {
        $sid = env('TWILIO_ACCOUNT_SID');
        $token = env('TWILIO_AUTH_TOKEN');

        $client = new Client($sid, $token);

        $number = $client->lookups->v1->phoneNumbers("+" . $request->msisdn)
            ->fetch(
                array("type" => "carrier")
            );

        $mcc = $number->carrier['mobile_country_code'];
        $mnc = $number->carrier['mobile_network_code'];
        $type = $number->carrier['type'];
        $operator_name = $number->carrier['name'];

        $mcc = ltrim($mcc);
        $mnc = ltrim($mnc);

        return $mcc . $mnc;
    }

    public function getSubService($request)
    {
        try {
            $operatorCode = $this->lookupPhone($request);
            $payLoad = [
                'service' => $request->service,
                'operatorCode' => $operatorCode,
            ] ;

            $operator = $this->Operator->getSubService((object) $payLoad);

        //log maintain here//

            if ($operator === null) {
                throw new Exception('Operator or Sub Service not found');
            }

            return response()->json([
            'status' => true,
            'message' => 'success',
            'body' => [
                'id' => $operator->SubService->id,
                'name' => $operator->SubService->subservice_name,
                    ]
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
