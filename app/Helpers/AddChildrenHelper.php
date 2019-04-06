<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\level;


class AddchildrenHelper	
{
	public  function getLevelOfCourse(){
        // $parent=course::select('id','Course_Name')->get()->toArray();

        // return $parent;
        // 
        $getLevelOfCourse = level::all();

        return $getLevelOfCourse;
    }
}
