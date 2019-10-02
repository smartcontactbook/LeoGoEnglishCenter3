<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\leogo_class;
use App\class_schedule;
use App\schedule;
use App\time_study;
use App\weekday;
use App\class_room;
use App\tem_day_time_study;

class CalendarHelper
{
    public static function getWeekDays(){
        $getWeekDays = weekday::all();

        return $getWeekDays;
    }

    public static function getCalendarOfClass()
    {
        $getCalendarOfClass = DB::table('schedule')
        ->join('time_study', 'schedule.Time_Study_ID', '=', 'time_study.id')
        ->join('weekday', 'schedule.Weekday_ID', '=', 'weekday.id')
        ->join('class_room', 'schedule.Classroom_ID', '=', 'class_room.id')
        ->join('class_schedule', 'schedule.id', '=', 'class_schedule.Schedule_ID')
        ->join('leogo_class', 'class_schedule.Class_ID', '=', 'leogo_class.id')
        ->select('schedule.id as id_schedule', 'schedule.*', 'time_study.id as id_time_study', 'time_study.*',
            'weekday.id as id_weekday', 'weekday.*', 'class_room.id as id_class_room', 'class_room.*', 
            'class_schedule.id as id_class_schedule', 'leogo_class.*', 
            DB::raw("CONCAT(leogo_class.Class_Name, ' ',class_room.Classroom_Name) as fullNameClassRoom"))
        ->get();

        return $getCalendarOfClass;
    }

    public static function getTemDayTimeStudys(){
        $getTemDayTimeStudys = DB::table('tem_day_time_study')
            ->select(   DB::raw("CONCAT(dayStartStudy, ' ',timeStartStudy) as fullNameTimeStart"),
                        DB::raw("CONCAT(dayEndStudy, ' ',timeEndStudy) as fullNameTimeEnd"),
                        'title')
            ->get();

        return $getTemDayTimeStudys;
    }


    // public static function getCalendarOfUsers($idUser){
    //     $getCalendarOfUsers = DB::table('tem_day_time_study')
    //     ->select(   DB::raw("CONCAT(dayStartStudy, ' ',timeStartStudy) as fullNameTimeStart"),
    //         DB::raw("CONCAT(dayEndStudy, ' ',timeEndStudy) as fullNameTimeEnd"),
    //         'title')
    //     ->where('Lecturer_ID', '=', $idUser)
    //     ->get();

    public static function getCalendarOfUsers($idUser){
        $getCalendarOfUsers = DB::table('tem_day_time_study')
                            ->join('leogo_class', 'tem_day_time_study.id_class', '=', 'leogo_class.id') 
                            ->select(   DB::raw("CONCAT(dayStartStudy, ' ',timeStartStudy) as fullNameTimeStart"),
                                DB::raw("CONCAT(dayEndStudy, ' ',timeEndStudy) as fullNameTimeEnd"),
                                'title')
                            ->where('Lecturer_ID', '=', $idUser)
                            ->orWhere( 'Tutor_ID', '=', $idUser)
                            ->get();
        return $getCalendarOfUsers;
    }

    public static function getCalendarOfChildren($idUser){
        $getCalendarOfUsers = DB::table('tem_day_time_study')
                            ->join('leogo_class', 'tem_day_time_study.id_class', '=', 'leogo_class.id')
                            ->join('history_user', 'leogo_class.id', '=', 'history_user.Class_ID') 
                            ->select(   DB::raw("CONCAT(dayStartStudy, ' ',timeStartStudy) as fullNameTimeStart"),
                                DB::raw("CONCAT(dayEndStudy, ' ',timeEndStudy) as fullNameTimeEnd"),
                                'title')
                            ->where('history_user.Children_ID', '=', $idUser)
                            ->get();
        return $getCalendarOfUsers;
    }

    // public static function getCalendarOfLecturer($idUser){
    //     $getCalendarOfLecturer = DB::table('tem_day_time_study')
    //     ->select(   DB::raw("CONCAT(dayStartStudy, ' ',timeStartStudy) as fullNameTimeStart"),
    //         DB::raw("CONCAT(dayEndStudy, ' ',timeEndStudy) as fullNameTimeEnd"),
    //         'title')
    //     ->where('id_lecturer', '=', $idUser)
    //     ->get();

    //     return $getCalendarOfLecturer;
    // }

    // public static function get
}
