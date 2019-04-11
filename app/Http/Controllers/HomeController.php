<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;
use App\Helpers\lecturerHelper;
use App\Helpers\CalendarHelper;
use App\time_study;
use App\weekday;
use App\level;
use App\class_room;
use App\schedule;
use App\tem_children_class;
use App\tem_children;
use App\children;
use App\tem_schedule;
use App\class_schedule;
use App\history_user;
use App\tem_leogo_class;
use Carbon\Carbon;
use Session;
use App\Helpers\LeogoClassHelper;
use Illuminate\Support\Facades\DB;
use App\register;
use App\children_account;
use App\Helpers\RegisterHelper;
use App\tem_day_time_study;



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

    // public function getCourse(){
    //     // $getClassRooms = LeogoClassHelper::getClassRooms();
    //     $getCourse = RegisterHelper::getCourseOfRegister();
    //     return view('admin.enrollmentManagement.register',compact('getCourse');
    // }

    public function getHistoryStudent($id){
        $getHistoryStudent = LeogoClassHelper::getHistoryStudent($id);

        return ['data' => $getHistoryStudent];
    }

    public function getSchedules(){
        $getSchedules = LeogoClassHelper::getSchedules();

        return ['data' => $getSchedules];
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
        // dd();
        try {       
            $children = new children;
            $register = register::findOrFail($request->txt_testId);
            $children->First_Name = $request->txt_firstname;
            $children->Last_Name = $request->txt_lastname;
            $children->Parent_Name = $request->txt_parent;
            $children->Birth_Day = $request->txt_birthday;
            $children->Email = $request->txt_email;
            $children->Address = $register->Address;
            $children->Gender = $register->Gender;
            $children->Phone_Number = $request->txt_phone;
            $children->Score = $request->txt_score;
            $children->Description = 'Description';
            $children->avatar = 'default.png';
            $children->Status = 0 ;
            $children->Role_ID = 5 ;
            $children->User_Name = $request->txt_email;
            $children->Password = $request->txt_phone;
            $result = $children->save();
            $tem_children = new tem_children;
            $tem_children->Children_ID = $children->id;
            $tem_children->Course_ID =  $request->txt_course;
            $tem_children->Level_ID =  $request->cbm_Level;
            $result = $tem_children->save();
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

    

    public function getClassOfCourses1(Request $request){ 
        $getClassOfCourses1 = LeogoClassHelper::getStudentOfClass($request->txt_idClass);
        //dd('txt_idSchedule');
        //$tem_schedule->delete();
        return redirect()->route('getClassOfCourses1');
    }

    public function getLevelOfCourse(){ 
        $getLevelOfCourse = RegisterHelper::getLevelOfCourse();
        //dd('txt_idSchedule');
        //$tem_schedule->delete();
        return redirect()->route('getLevelOfCourse');
    }

    public function postDelTemSchedule($id){ 
        $tem_schedule = tem_schedule::findOrFail($id);
        //dd('txt_idSchedule');
        $tem_schedule->delete();
        return response()->json($tem_schedule);
    }

    public function postDelTemChildren(Request $request){ 
        // dd($request->txt_idChildrenTem);
        $tem_children_class = tem_children_class::findOrFail($request->txt_idChildrenTem);
        $tem_children = new tem_children;
        $tem_children->Children_ID = $request->txt_idChildrenTem;
        $tem_children->Level_ID = Session::forget('idLevel');
        $tem_children->save();

        //dd('txt_idSchedule');
        $tem_children_class->delete();
        return redirect()->route('getSetSchudule');
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
            $children->Status = 0 ;
            $children->Role_ID = 5 ;
            $children->User_Name = $register->Email;
            $children->Password = $register->Phone_Number;
            $result = $children->save();
            $tem_children_class = new tem_children_class;
            $tem_children_class->id_Chidren = $children->id;
            $tem_children_class->Level_ID =  $register->cbm_Level;

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
       // dd('ssf');
        $result = 0;
        $getSchedules = LeogoClassHelper:: getSchedules();
        foreach ($getSchedules as $value){
                    if($value->id_class_room == $req->cbm_classRoom and $value->id_weekday == $req->cbm_weekday and $value->id_time_study == $req->cbm_timeStudy){
                        echo"<script type='text/javascript'>
                                alert('Sorry ! You need change information or click button Cancel');
                                window.location='";
                                echo route('getSetSchudule');
                        echo"'</script>";
                        $result =1;
                        break;
                    }
        }
        if($result == 0 ){
        $tem_schedule = new tem_schedule;
                        $tem_schedule->Classroom_ID = $req->cbm_classRoom;
                        $tem_schedule->Weekday_ID = $req->cbm_weekday;
                        $tem_schedule->Time_Study_ID = $req->cbm_timeStudy;
                        // dd($req->cbm_classRoom, $req->cbm_weekday, $req->cbm_timeStudy);
                        $tem_schedule->save();

                        return response()->json($tem_schedule);
        }
    }

    public function postTemChildrenClass(Request $req){
        // $getIdChildren = LeogoClassHelper::getInforChildrens($req->cbm_student);
        $getInforChildrens = children::select('children.id as id_children', 'tem_children.*', 'children.*')->join('tem_children', 'children.id', '=', 'tem_children.Children_ID')->where('children.id', '=', $req->cbm_student)->first();

        // return $getInforChildrens;
        // dd($getInforChildrens);
        $tem_children_class = new tem_children_class;
        $tem_children_class->Children_Name = $getInforChildrens->Last_Name;
        $tem_children_class->Gender = $getInforChildrens->Gender;
        $tem_children_class->Phone_Number = $getInforChildrens->Phone_Number;
        $tem_children_class->Birth_Day = $getInforChildrens->Birth_Day;
        $tem_children_class->Address = $getInforChildrens->Address;
        $tem_children_class->Email = $getInforChildrens->email;
        $tem_children_class->Parent_Name = $getInforChildrens->Parent_Name;
        $tem_children_class->Score = $getInforChildrens->Score;
        $tem_children_class->id_Children = $getInforChildrens->id;
        $tem_children_class->Status = $getInforChildrens->Status;
        // dd($req->cbm_classRoom, $req->cbm_weekday, $req->cbm_timeStudy);
        $tem_children_class->save();
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
            $getNewChildrenClass = new history_user;
            $getNewChildrenClass->Level_ID = Session::get('idLevel');
            $getNewChildrenClass->Class_ID = Session::get('id_LeogoClass');
            $getNewChildrenClass->Children_ID = $value->id_Children;
            $getNewChildrenClass->save();
            // $delete_tem_children_class = tem_children_class::find($value->ID);
        }

        DB::table('tem_day_time_study')->truncate();
        $data = CalendarHelper::getCalendarOfClass();
        $getWeekDays = CalendarHelper::getWeekDays();
        foreach ($data as $key => $value) {
            $dateEndTime = \Carbon\Carbon::create($value->End_Date)->dayOfWeek;
            $day = \Carbon\Carbon::create($value->Start_Date)->diffInDays(\Carbon\Carbon::create($value->End_Date));
            for($i = 0; $i < $day; $i++) {
                $getDateStart = \Carbon\Carbon::create($value->Start_Date)->addDays($i);
                $dateStartTime = $getDateStart->dayOfWeek;
                if($value->Weekday_ID == $dateStartTime and $getDateStart != $value->End_Date) {
                    $tem_day_time_study = new tem_day_time_study;
                    $tem_day_time_study->title = $value->fullNameClassRoom;
                    $tem_day_time_study->dayStartStudy = $getDateStart;
                    $tem_day_time_study->dayEndStudy = $getDateStart;
                    $tem_day_time_study->timeStartStudy = $value->Time_Start;
                    $tem_day_time_study->timeEndStudy = $value->Time_End;
                    $tem_day_time_study->save();
                }
                else {
                    if($value->Weekday_ID == $dateEndTime and $value->Start_Date == $value->End_Date) {
                       $tem_day_time_study = new tem_day_time_study;
                       $tem_day_time_study->title = $value->fullNameClassRoom;nd_Date;
                       $tem_day_time_study->dayEndStudy = $value->End_Date;
                       $tem_day_time_study->timeStartStudy = $value->Time_Start;
                       $tem_day_time_study->timeEndStudy = $value->Time_End;
                       $tem_day_time_study->save();
                 }
                 else{
                    continue;
                }
            }
        }
    }
        Session::forget('idLevel');
        Session::forget('nameLevel');
        Session::forget('numberStudent');
        DB::table('tem_children_class')->truncate();
        DB::table('tem_schedule')->truncate();
        Session::forget('id_LeogoClass');
        return redirect()->route('classRoom.index');
    }

    public function getChildrenClass($id){
        $getChildrenClass = LeogoClassHelper::getStudentOfClass($id);
        dd($getChildrenClass);
    }
}

