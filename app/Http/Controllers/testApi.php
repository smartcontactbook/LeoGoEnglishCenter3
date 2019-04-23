<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CalendarHelper;
use Calendar;
use Carbon\Carbon;
use App\tem_day_time_study;
use Auth;

class testApi extends Controller
{
	public function getCalenderOfUser(){
		// $user = Auth::guard('staff')->user()->id;
		$test = CalendarHelper::getCalendarOfLecturer(1);

		return response()->json($test);
	}
}
