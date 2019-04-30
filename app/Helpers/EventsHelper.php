<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\events;
use App\staff;

class EventsHelper
{
    public static function getEvents()
    {
        $getEvents = events::join('staff', 'events.id_user', '=', 'staff.id')->get();

        return $getEvents;
    }
}
