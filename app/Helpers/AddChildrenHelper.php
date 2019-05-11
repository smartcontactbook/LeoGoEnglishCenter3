<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\level;
use App\children;
use App\history_user;
use App\leogo_class;
// use App\level;
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
    public static function getDetailChildrens($id){
        $getDetailChildrens = children::findOrFail($id)->first();

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
