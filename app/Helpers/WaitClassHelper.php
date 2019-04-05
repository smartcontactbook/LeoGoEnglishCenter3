<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;use App\course;
use App\leogo_class;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_schedule;
use App\level;
use App\children_class;

class WaitClassHelper
{
    public static function getCourses()
    {
    	$getCourses = course::all();

    	return $getCourses;
    }

    public static function getLevels(){
        $getLevels = level::all();

        return $getLevels;
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

    public static function getLevelOfCourses(){

        $getLevelOfCourses = DB::table('level')
            ->join('tem_children_class', 'level.id', '=', 'tem_children_class.Level_ID')
            ->join('course', 'tem_children_class.Course_ID', '=', 'course.id')
            ->select('tem_children_class.Level_ID as idLevel', 'tem_children_class.Course_ID as idCourse', 'level.*', 'tem_children_class.*', 'course.*')
            ->get()
            ->groupBy('idLevel');

        $getLevelOfCoursed = [];

        foreach ($getLevelOfCourses as $group) {
            $getLevelOfCoursed[] =  $group->groupBy('idCourse');
        }

        return $getLevelOfCoursed;
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
