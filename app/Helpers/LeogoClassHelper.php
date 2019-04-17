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
use App\tem_children;
use App\tem_schedule;
use App\children_class;
use App\level;
use App\history_user;

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
        $getChildrenNotActives = tem_children::all();

        return $getChildrenNotActives;
    }

    public static function getInforChildrens($id){
        $getInforChildrens = children::select('children.id as id_children', 'tem_children.*', 'children.*')->join('tem_children', 'children.id', '=', 'tem_children.Children_ID')->where('children.id', '=', '$id')->first();

        return $getInforChildrens;
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

    public static function getLevels(){
        $getLevels = level::all();

        return $getLevels;
    }

    public static function getClassOfCourses(){
        $getClassOfCourses = level::select('level.id as id_course', 'level.*', 'leogo_class.*')->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')->get();

        return $getClassOfCourses;
    }

    // public static function getStudentOfClass($idClass){
    //     $getStudentOfClass = DB::table('children_class')
    //         ->join('leogo_class', 'children_class.Class_ID', '=', 'leogo_class.id')
    //         ->join('children', 'children_class.Children_ID', '=', 'children.id')
    //         ->where('children_class.Class_ID', '=', $idClass)
    //         ->get();

    //     return $getStudentOfClass;
    // }

    // public static function getHistoryStudent($idClass){
    //     $getHistoryStudent = DB::table('history_user')
    //     ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
    //     ->join('children', 'history_user.Children_ID', '=', 'children.id')
    //     ->where('history_user.Class_ID', '=', $idClass)
    //     ->get();

    //     return $getHistoryStudent;
    // }

     public static function getStudentOfClass($idClass){
        $getStudentOfClass = DB::table('history_user')
            ->join('children', 'history_user.Children_ID', '=', 'children.id')
            ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
            ->select('history_user.id as id_history_user', 'history_user.*','children.*','leogo_class.*')
            ->where('history_user.Class_ID', '=', $idClass)
            ->get();    

        return $getStudentOfClass;
    }


}
