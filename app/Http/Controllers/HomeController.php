<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;
use App\Helpers\lecturerHelper;

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
}

