<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;
use App\Helpers\lecturerHelper;
use App\register;
use App\children;
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
}

