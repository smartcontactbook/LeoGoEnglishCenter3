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
use App\Helpers\WaitClassHelper;
use App\Helpers\LeogoClassHelper;

class AjaxController extends Controller
{
    public function postWaitingClass(Request $request){
        Session::put('idLevel', $request->txt_idLevel);
        Session::put('nameLevel', $request->txt_nameLevel);
        Session::put('numberStudent', $request->txt_numberStudent);
        // dd($request->txt_idLevel, $request->txt_nameLevel);
        // Session::forget('idLevel');
        // Session::forget('nameLevel');
        // $test = $request->session()->get('idLevel');
// dd($test);
        return redirect()->route('classRoom.create');
    }

    public function getStudentOfWaitingClass($id){
        $getStudentOfWaitingClass = WaitClassHelper::getStudentOfWaitingClass($id);

        return ['data' => $getStudentOfWaitingClass];
    }

    public function getStudentOfClass($id){
        $getStudentOfClass = LeogoClassHelper::getStudentOfClass($id);
        return ['data' => $getStudentOfClass];
    }

    public function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('history_user')
                // ->where('id',  '=',$request->id)
                ->where('id', $request->id)
                ->update($data);
            echo "$request->id $request->column_value";
        }
    }
}
