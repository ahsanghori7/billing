<?php

namespace App\Enums;

trait EnumBase
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function message(string $errorCode)
    {
        $combine  = array_combine(self::names(), self::values());

        foreach ($combine as $key => $value) {
            if ($key == $errorCode) {
                return $value;
            }
        }
    }
}
