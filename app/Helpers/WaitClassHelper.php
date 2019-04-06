<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;use App\course;
use App\leogo_class;
use App\schedule;
use App\children;
use App\tem_children;
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

    public static function getLevelOfCourses(){

        $getLevelOfCourses = DB::table('level')
            ->join('tem_children', 'level.id', '=', 'tem_children.Level_ID')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->select('tem_children.Level_ID as idLevel', 'level.Course_ID as idCourse', 'level.*', 'tem_children.*', 'course.*', DB::raw('count(tem_children.Level_ID) as user_count'))
            ->groupBy('idLevel')
            ->get();

        // $getLevelOfCoursed = [];

        // foreach ($getLevelOfCourses as $group) {
        //     $getLevelOfCoursed[] =  $group->groupBy('idCourse');
        // }

        return $getLevelOfCourses;
    }

    public static function getStudentOfWaitingClass($idLevel){
        $getStudentOfWaitingClass = DB::table('children')
            ->join('tem_children', 'children.id', '=', 'tem_children.Children_ID')
            ->select('tem_children.id as id_tem_children', 'tem_children.*', 'children.*')
            ->where('tem_children.Level_ID', '=', $idLevel)
            ->get();    

        return $getStudentOfWaitingClass;
    }

}
