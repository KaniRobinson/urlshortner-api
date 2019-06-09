<?php

namespace App;

use Carbon\Carbon;

class Helper
{
    /**
     * Tranform date into multple readible types
     *
     * @param Carbon $date
     * @return array
     */
    public static function formatDate(Carbon $date) : array
    {
        return [
            'human' => $date->diffForHumans(),
            'formatted' => $date->format('d M Y'),
            'default' => $date->format('y-m-d h:i:s'),
        ];
    }
}
