<?php

namespace App\Factory;

use App\Services\MondiaPay\MondiaPay;

class IntegrationFactory
{
    public $object;

    public static function getintegration($payLoad = null)
    {
        switch ($payLoad->integration->integration_file) {
            case "mondiapay":
                return new MondiaPay();
            default:
                throw new \Exception('Unknown Integration');
                break;
        }
    }
}
