<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\course;
use App\level;

class CourseHelper
{
    public static function getCourse()
    {
        $getCourses = level::select('course.id as id_course', 'course.*', 'level.*')->join('course', 'level.id', '=', 'course.Level_ID')->get();

        return $getCourses;
    }

    public static function getLevelOfCourse(){
        $parent=level::select('id','Level_Name')->get()->toArray();

        return $parent;
    }

    // public static function postStoreCoure($name, $description, $term, $level){
    //     $course = new course();
    //     $course->Course_Name = $name;
    //     $course->Description = $description;
    //     $course->Term = $term;
    //     $course->Level_ID = $level;
        

    // }
}
