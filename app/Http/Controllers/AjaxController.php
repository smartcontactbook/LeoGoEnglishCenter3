<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lecturer;
use App\tutor;
use App\course;
use App\leogo_class;
use App\time_study;
use App\weekday;
use App\class_room;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_schedule;
use App\children_class;
use Session;
use App\Helpers\ScoreHelper;

class AjaxController extends Controller
{
    public function postWaitingClass(Request $request){
        Session::put('idLevel', $request->txt_idLevel);
        Session::put('nameLevel', $request->txt_nameLevel);
        // dd($request->txt_idLevel, $request->txt_nameLevel);
        // Session::forget('idLevel');
        // Session::forget('nameLevel');
        // $test = $request->session()->get('idLevel');
// dd($test);
        return redirect()->route('classRoom.create');
    }

    public function postScore(Request $request){
        $getChirldenOfClass = ScoreHelper::getChirldenOfClass($request->txt_idClass);
        return view('admin.scoreManagement.updateScore', compact('getChirldenOfClass'));
    }

}
