<?php

namespace App\Http\Helpers;

class Helper
{
    public static function oldOrDB($oldDataKey, $dbData)
    {
        return old($oldDataKey) === null ? $dbData : old('oldDataKey');
    }
}
