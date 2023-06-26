<?php

namespace App\Enums;

use App\Enums\EnumBase;

enum ErrorCodesEnum : string
{
    use EnumBase;

    case E01 = 'User Locked.';
    case E02 = 'User Exist.';
    case E03  = 'Subscription Failed.';
    case E04  = 'PIN Not Verified.';
    case E05  = 'Service has been blocked.';
    case E06  = 'The subscription limit has been exceeded against this service.';
    case E07  = 'Service not found.';
    case E08  = 'Invalid subscription provided.';
}
