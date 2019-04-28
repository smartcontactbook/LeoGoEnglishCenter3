<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CourseHelper;
use App\register;
use Session;
use Alert;
use Hash;
use App\lecturer;

class ClientController extends Controller
{
    public function getHome(){
    	$getCourses = CourseHelper::getCourse();

        // dd(Hash::make('123456789'));
    	return view('clients.home.home.home', compact('getCourses'));
    }

    public function postRegisterOnline(Request $request){
    	$register = new register;
        $register->Last_Name = $request->txt_name;
        $register->Parent_Name = $request->txt_parent;
        $register->Birth_Day = $request->txt_date;
        $register->Email = $request->txt_email;
        $register->Address = $request->txt_address;
        $register->Phone_Number = $request->txt_phone;
        $register->Course_ID = $request->cmb_course;
        $result = $register->save();
        if($result ){
             alert()->success('Post Created', 'Successfully');
        	// Alert::success('Welcome', 'Demo success alert');
			// return redirect()->route('getHome')->with('status', 'Item has been added successfully!');
            // return redirect()->route('getHome');
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }

        return redirect()->route('getHome');
    }

    public function getDetail($id){
        $getDetail = CourseHelper::getDetail($id);

        return view('clients.details.detail', compact('getDetail'));
    }

    public function getQuatily(){

        return view('clients.quality.quality');
    }

    public function getTeacher(){
        $getLectures = lecturer::all();

        return view('clients.teacher.teacher', compact('getLectures'));
    }
}
