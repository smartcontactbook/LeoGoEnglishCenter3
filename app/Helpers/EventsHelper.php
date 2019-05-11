<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\events;
use App\staff;

class EventsHelper
{
    public static function getEvents()
    {
        $getEvents = events::join('staff', 'events.id_user', '=', 'staff.id')->select('staff.id as id_staff', 'staff.*', 'events.*')->orderBy('events.create_at', 'desc')->get();

        return $getEvents;
    }

    public static function getEventClients()
    {
        $getEventClients = events::all();

        return $getEventClients;
    }

    public static function getDetail($id){
        $getDetail = events::findOrFail($id);

        return $getDetail;
    }

    public static function getEventDetails($id){
        $getEventDetail = events::join('event_detail', 'events.id', '=', 'event_detail.id_event')->get();

        return $getEventDetail;
    }
}
