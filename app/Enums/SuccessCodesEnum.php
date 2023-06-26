<?php

namespace App\Enums;

use App\Enums\EnumBase;

enum SuccessCodesEnum : string
{
    use EnumBase;

    case S01  = 'User Subscribed';
    case S02  = 'User unsubscribed';
}
