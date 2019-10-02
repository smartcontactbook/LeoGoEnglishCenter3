<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\level;
use App\children;
use App\history_user;
use App\leogo_class;
use App\staff;
use App\course;

class AddchildrenHelper	
{
	public static function getLevelOfCourse(){
        // $parent=course::select('id','Course_Name')->get()->toArray();

        // return $parent;
        // 
        $getLevelOfCourse = level::all();

        return $getLevelOfCourse;
    }

    public static function getChildrens(){
    	 // $getStudentOfClass = DB::table('history_user')
      //       ->join('children', 'history_user.Children_ID', '=', 'children.id')
      //       ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
      //       ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
      //       ->join('course', 'level.Course_ID', '=', 'course.id')
      //       ->select('history_user.id as id_history_user', 'children.id as id_children', 'leogo_class.id as id_leogo_class', 'level.id as id_level', 'course.id as id_course', 'history_user.*','children.*','leogo_class.*', 'level.*', 'course.*')
      //       ->get();    


        $getStudentOfClass = children::all();

        return $getStudentOfClass;
    }

    public static function getChildrenOfLecturer($id){
        $getChildrenOfLecturer = DB::table('level')
        ->join('course', 'level.Course_ID', '=', 'course.id')
        ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
        ->join('staff', 'leogo_class.Lecturer_ID', '=', 'staff.id')
        ->join('history_user', 'leogo_class.id', '=', 'history_user.Class_ID')
        ->join('children', 'history_user.Children_ID', '=', 'children.id')
        ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'staff.id as id_staff', 'children.id as id_children','level.*', 'leogo_class.*', 'course.*', 'staff.*', 'children.*')
        ->where('staff.id', $id)
        ->get();
    
    return $getChildrenOfLecturer;

    	
    }

    public static function getChildrenOfTutor($id){
    	$getChildrenOfTutor = DB::table('staff')
            ->join('leogo_class', 'staff.id', '=', 'leogo_class.Tutor_ID')
            ->join('history_user', 'leogo_class.id', '=', 'history_user.Class_ID')
            ->join('children', 'history_user.Children_ID', '=', 'children.id')
            ->select('history_user.id as id_history_user', 'leogo_class.id as id_leogo_class', 'children.id as id_children', 'history_user.*', 'leogo_class.*', 'children.*')
            ->where('staff.id', '=', $id)
            ->get();      

        return $getChildrenOfTutor;
    }

    public static function getDetailChildrens($id){
        $getDetailChildrens = children::findOrFail($id);

        return $getDetailChildrens;
    }

    public static function getDetailChildrens2($id){
    	$getDetailChildrens2 = DB::table('history_user')
            ->join('children', 'history_user.Children_ID', '=', 'children.id')
            ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
            ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->select('history_user.id as id_history_user', 'children.id as id_children', 'leogo_class.id as id_leogo_class', 'level.id as id_level', 'course.id as id_course', 'history_user.*','children.*','leogo_class.*', 'level.*', 'course.*')
            ->where('children.id', '=', $id)
            ->get();    

        return $getDetailChildrens2;
    }

}
