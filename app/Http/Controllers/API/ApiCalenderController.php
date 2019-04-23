<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Helpers\CalendarHelper;
use App\Helpers\CourseHelper;
use App\Helpers\LeogoClassHelper;
use Calendar;
use Carbon\Carbon;
use App\tem_day_time_study;
use Auth;

class ApiCalenderController extends Controller
{
    public function getCalenderOfUser(){
		$user = Auth::user()->id;
		$test = CalendarHelper::getCalendarOfLecturer($user);

		return response()->json($test);
	}

	public function getCourseOfUser(){
		$getCourses = CourseHelper::getCourse();

		return response()->json($getCourses);
	}

	public function getClassOfChildrens($id){
		$getClassOfChildrens = LeogoClassHelper::getClassOfChildrens($id);

		return response()->json($getClassOfChildrens);
	}

	public function getClassOfCoursesDatail($id){
		$getClassOfCoursesDatail = LeogoClassHelper::getClassOfCoursesDatail($id);

		return response()->json($getClassOfCoursesDatail);
	}
}
