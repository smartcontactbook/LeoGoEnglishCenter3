<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lecturer;
use App\tutor;
use App\course;
use App\leogo_class;
use App\time_study;
use App\weekday;
use App\class_room;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_schedule;
use App\children_class;

class LeogoClassHelper
{
    // public static function getLecturers()
    // {
    //     $getLecturer = lecturer::join('lecturer_account', 'lecturer.id', '=', 'lecturer_account.Lecturer_ID')->get();

    //     return $getLecturer;
    // }

    public static function getCourses()
    {
    	$getCourses = course::all();

    	return $getCourses;
    }

    public static function getLecturers()
    {
    	$getLecturers = lecturer::all();

    	return $getLecturers;
    }

    public static function getTutors()
    {
    	$getTutors = tutor::all();

    	return $getTutors;
    }

    public static function getWeekdays(){
        $getWeekdays = weekday::all();

        return $getWeekdays;
    }

    public static function getClassRooms(){
        $getClassRooms = class_room::all();

        return $getClassRooms;
    }

    public static function getTimeStudys(){
        $getTimeStudys = time_study::all();

        return $getTimeStudys;
    }

    public static function getChildrenNotActives(){
        $getChildrenNotActives = children::where('Status', 0)->get();

        return $getChildrenNotActives;
    }

    public static function getTemChildrenClass(){
        $getTemChildrenClass = tem_children_class::all();

        return $getTemChildrenClass;
    }

    public static function CountSetSChedule(){
        $CountSetSChedule = tem_schedule::count();

        return $CountSetSChedule;
    }

    public static function getTemChildrenClass2(){
        $getTemChildrenClass2 = tem_children_class::count();

        return $getTemChildrenClass2;
    }

    public static function getSchedules(){
        $getSchedules = DB::table('tem_schedule')
        ->join('time_study', 'tem_schedule.Time_Study_ID', '=', 'time_study.id')
        ->join('weekday', 'tem_schedule.Weekday_ID', '=', 'weekday.id')
        ->join('class_room', 'tem_schedule.Classroom_ID', '=', 'class_room.id')
        ->select('tem_schedule.id as id_schedule', 'tem_schedule.*', 'time_study.id as id_time_study', 'time_study.*', 'weekday.id as id_weekday', 'weekday.*', 'class_room.id as id_class_room', 'class_room.*')
        ->get();
        return $getSchedules;
    }

    public static function getClassOfCourses(){
        $getClassOfCourses = course::select('course.id as id_course', 'course.*', 'leogo_class.*')->join('leogo_class', 'course.id', '=', 'leogo_class.Course_ID')->get();

        return $getClassOfCourses;
    }

    public static function getStudentOfClass($idClass){
        $getStudentOfClass = DB::table('children_class')
            ->join('leogo_class', 'children_class.Class_ID', '=', 'leogo_class.id')
            ->join('children', 'children_class.Children_ID', '=', 'children.id')
            ->where('children_class.Class_ID', '=', $idClass)
            ->get();

        return $getStudentOfClass;
    }

}
