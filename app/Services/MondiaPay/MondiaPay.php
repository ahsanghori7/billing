<?php

namespace App\Services\MondiaPay;

use App\Services\MondiaPay\SendPinService;
use App\Services\MondiaPay\ConfirmPinService;
use App\Services\MondiaPay\UnsubscribeService;
use App\Services\MondiaPay\PurchaseService;

class MondiaPay
{
    public static function sendOtp(object $payLoad)
    {
        $sendPinService = app(SendPinService::class);

        return $sendPinService->send($payLoad);
    }

    public static function verifyOtp(object $payLoad)
    {
         $confirmPinService = app(ConfirmPinService::class);

         return $confirmPinService->verify($payLoad);
    }

    public static function updateMondiaPay(object $payLoad)
    {
        $confirmPinService = app(ConfirmPinService::class);

        if ($payLoad) {
            $confirmPinService->setMondiaPayLead($payLoad);
        }
    }

    public static function removeSubscription()
    {
        $unsubscribeService = app(UnsubscribeService::class);

        return $unsubscribeService->remove();
    }

    public static function purchaseSubscription()
    {
        $purchaseService = app(PurchaseService::class);

        return $purchaseService->purchase();
    }
}
