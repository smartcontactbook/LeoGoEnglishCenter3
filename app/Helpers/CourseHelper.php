<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\course;

use Illuminate\Support\Facades\DB;
use App\level;

class CourseHelper
{
    public static function getCourse()
    {
        $getCourses = course::all();
        return $getCourses;
    }

    public static function getLevelOfCourse($idCourse){

        $getLevelOfCourse = DB::table('level')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->select('level.id as id_level', 'level.*','course.*')
            ->where('level.Course_ID', '=', $idCourse)
            ->get();    


        return $getLevelOfCourse;
    }
    

    public static function getDetail($id){
        $getDetail = course::findOrFail($id);

        return $getDetail;
    }

    // public static function postStoreCoure($name, $description, $term, $level){
    //     $course = new course();
    //     $course->Course_Name = $name;
    //     $course->Description = $description;
    //     $course->Term = $term;
    //     $course->Level_ID = $level;
        

    // }
}
