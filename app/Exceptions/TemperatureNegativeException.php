<?php

namespace App\Exceptions;
 
use Exception;
 
class TemperatureNegativeException extends Exception 
{
    public static function fromMeasure(int $measure)
    {
        return new static(
            sprintf("Measure %d must be positive", $measure)
	);
    }
}


