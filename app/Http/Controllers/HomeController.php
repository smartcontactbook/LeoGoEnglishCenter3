<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;
use App\Helpers\lecturerHelper;
use App\time_study;
use App\weekday;
use App\class_room;
use App\schedule;
use App\tem_children_class;
use App\children;
use App\tem_schedule;
use App\class_schedule;
use App\children_class;
use App\tem_leogo_class;
use Carbon\Carbon;
use Session;
use App\Helpers\LeogoClassHelper;
use Illuminate\Support\Facades\DB;
use App\register;
use App\children_account;


class HomeController extends Controller
{
    public function getIndex(){
    	return view ('admin.courseManagement.course');
    }

    public function getLecturers(){
    	return view ('admin.lecturersManagement.lecturers');
    }

    public function getAddLecturers(){
    	return view ('admin.lecturersManagement.addLecturers');
    }


    public function getSetSchudule(){
        $getSchedules = LeogoClassHelper::getSchedules();
        $getWeekdays = LeogoClassHelper::getWeekdays();
        $getClassRooms = LeogoClassHelper::getClassRooms();
        $getTimeStudys = LeogoClassHelper::getTimeStudys();
        $getChildrenNotActives = LeogoClassHelper::getChildrenNotActives();
        $getTemChildrenClass = LeogoClassHelper::getTemChildrenClass();
        $getTemChildrenClass2 = LeogoClassHelper::getTemChildrenClass2();
        $CountSetSChedule = LeogoClassHelper::CountSetSChedule();

        return view('admin.classManagement.setSchedule', compact('getSchedules', 'getWeekdays', 'getClassRooms', 'getTimeStudys', 'getChildrenNotActives', 'getTemChildrenClass', 'getTemChildrenClass2', 'CountSetSChedule'));
    }
  
    public function postUpdateRegister(Request $request){
        try {       
            $register = register::findOrFail($request->txt_testId);
            $register->First_Name = $request->txt_firstname;
            $register->Last_Name = $request->txt_lastname;
            $register->Parent_Name = $request->txt_parent;
            $register->Email = $request->txt_email;
            $register->Phone_Number = $request->txt_phone;
            $register->Score = $request->txt_score;
            $register->Birth_Day = $request->txt_birthday;
            $result = $register->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('register.index');

    }

    public function postDelRegister(Request $request){ 
        $register = register::findOrFail($request->txt_idDelChildren);
        $register->delete();
        return redirect()->route('register.index');
    }

    public function postAddChildren(Request $request){
        // dd($request->txt_idAddChildren);
        try {       
            $children = new children;
            $register = register::findOrFail($request->txt_idAddChildren);
            $children->First_Name = $register->First_Name;
            $children->Last_Name = $register->Last_Name;
            $children->Parent_Name = $register->Parent_Name;
            $children->Birth_Day = $register->Birth_Day;
            $children->Email = $register->Email;
            $children->Address = $register->Address;
            $children->Gender = $register->Gender;
            $children->Phone_Number = $register->Phone_Number;
            $children->Score = $register->Score;
            $children->Description = 'Description';
            $children->avatar = 'default.png';
            $children->Status = 1 ;
            $result = $children->save();

            $children_account = new children_account;
            $children_account->User_Name = $register->Email;
            $children_account->Password = $register->Phone_Number;
            $children_account->Children_ID = $children->id;
            $result = $children_account->save();

            $result = $register->delete();
            if($result) {
                $request->session()->flash('messageAdd', 'Add success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('register.index');
    }

    public function postUpdateLecturer(Request $request,$id){
    	 try {
    	 	$new_avatar = lecturerHelper::updateAvatar($request);
            $lecturer = lecturer::findOrFail($request->id_lecturer);
            $lecturer->Description = $request->txt_description;
            $lecturer->First_Name = $request->txt_FirstName;
            $lecturer->Last_Name = $request->txt_LastName;
            $lecturer->Email = $request->txt_email;
            $lecturer->Birth_Day = $request->txt_date;
            $lecturer->Phone_Number = $request->txt_phone;
            $lecturer->Gender = $request->txt_gender;
            $lecturer->Address = $request->txt_address;
            $lecturer->avatar = $new_avatar;
            $result = $lecturer->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('lecturer.index');
    }

    public function postAddSchedule(Request $req){
        $tem_schedule = new tem_schedule;
        $tem_schedule->Classroom_ID = $req->cbm_classRoom;
        $tem_schedule->Weekday_ID = $req->cbm_weekday;
        $tem_schedule->Time_Study_ID = $req->cbm_timeStudy;
        // dd($req->cbm_classRoom, $req->cbm_weekday, $req->cbm_timeStudy);
        $tem_schedule->save();

        return redirect()->route('getSetSchudule');
    }

    public function postTemChildrenClass(Request $req){
        $getIdChildren = children::findOrFail($req->cbm_student);
        $tem_children_class = new tem_children_class;
        $tem_children_class->Children_Name = $getIdChildren->Last_Name;
        $tem_children_class->Gender = $getIdChildren->Gender;
        $tem_children_class->Phone_Number = $getIdChildren->Phone_Number;
        $tem_children_class->Adress = $getIdChildren->Address;
        $tem_children_class->Email = $getIdChildren->Email;
        $tem_children_class->Parent_Name = $getIdChildren->Parent_Name;
        $tem_children_class->Score = $getIdChildren->Score;
        $tem_children_class->id_Chidren = $getIdChildren->id;
        // dd($req->cbm_classRoom, $req->cbm_weekday, $req->cbm_timeStudy);
        $tem_children_class->save();

        $updateStatusChildren = children::findOrFail($getIdChildren->id);
        $updateStatusChildren->Status = 1;
        $updateStatusChildren->save();

        return redirect()->route('getSetSchudule');
    }

    public function postAddAll(Request $request){
        // $test = Session::get('id_LeogoClass');
        // dd($test);
        $getSchedulesToTems = DB::table('tem_schedule')->get();
        foreach ($getSchedulesToTems as $key => $value) {
            $getNewSchedule = new schedule;
            $getNewSchedule->Classroom_ID = $value->Classroom_ID;
            $getNewSchedule->Weekday_ID = $value->Weekday_ID;
            $getNewSchedule->Time_Study_ID = $value->Time_Study_ID;
            $getNewSchedule->save();

            $classSchedule = new class_schedule;
             // dd($request->session()->get('id_LeogoClass'));
            $classSchedule->Class_ID = Session::get('id_LeogoClass');
            $classSchedule->Schedule_ID = $getNewSchedule->id;
            $classSchedule->save();
            // dd($value->ID);
            // $delete_tem_schedule = tem_schedule::find($value->ID);

        }

        $getChildrenToTems = DB::table('tem_children_class')->get();
        foreach ($getChildrenToTems as $key => $value) {
            $getNewChildrenClass = new children_class;
            $getNewChildrenClass->Children_ID = $value->id_Chidren;
            $getNewChildrenClass->Class_ID = Session::get('id_LeogoClass');
            $getNewChildrenClass->save();
            // $delete_tem_children_class = tem_children_class::find($value->ID);
        }

        DB::table('tem_children_class')->truncate();
        DB::table('tem_schedule')->truncate();
        Session::forget('id_LeogoClass');
        return redirect()->route('classRoom.index');
    }
}

