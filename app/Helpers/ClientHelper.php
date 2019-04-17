<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarHelper
{
    public static function getWeekDays(){
        $getWeekDays = weekday::all();

        return $getWeekDays;
    }

}
