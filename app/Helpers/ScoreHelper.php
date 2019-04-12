<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\level;
use App\history_user;
use App\course;
use App\children;
use App\leogo_class;


class ScoreHelper	
{
	public static function getChirldenOfClass($idClass){
        $getChirldenOfClass = DB::table('history_user')
        ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
        ->join('children', 'history_user.Children_ID', '=', 'children.id')
        ->where('history_user.Class_ID', '=', $idClass)
        ->get();
        return $getChirldenOfClass;
    }

    public static function getChirlden(){
        $getChirlden = history_user::all();
        return $getChirlden;
    }

    public static function getClassOfCourses(){
        $getClassOfCourses = level::select('level.id as id_course', 'level.*', 'leogo_class.*')->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')->get();

        return $getClassOfCourses;
    }

    public static function getCourses()
    {
    	$getCourses = course::all();

    	return $getCourses;
    }

    
}


