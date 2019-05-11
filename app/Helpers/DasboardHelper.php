<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\staff;

class TutorHelper
{
    public static function getTutor()
    {
        $getLecturers = staff::where('Role_ID', 4)->get();

        return $getLecturers;
    }

    public static function getIdOfTutor($idTutor){
        $getId = staff::findOrFail($idTutor);

        return $getId;
    }
}
