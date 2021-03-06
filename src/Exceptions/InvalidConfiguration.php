<?php

namespace RifkyEkayama\Activitylog\Exceptions;

use Exception;
use RifkyEkayama\Activitylog\Models\Activity;

class InvalidConfiguration extends Exception
{
    public static function modelIsNotValid(string $className)
    {
        return new static("The given model class `$className` does not extend `".Activity::class.'`');
    }
}
