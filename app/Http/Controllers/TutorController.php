<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\TutorHelper;
use App\tutor;
use App\tutor_account;
use Session;

class TutorController extends Controller
{

    public function index()
    {
        $getTutor = TutorHelper::getTutor();

        return view('admin.tutorsManagement.tutors', compact('getTutor'));
    }

    public function create()
    {
        return view('admin.tutorsManagement.addTutors');
    }

    public function store(Request $request)
    {
        $tutor = new tutor;
        $tutor->Description = $request->txt_description;
        $tutor->First_Name = $request->txt_FirstName;
        $tutor->Last_Name = $request->txt_LastName;
        $tutor->Email = $request->txt_email;
        $tutor->Birth_Day = $request->txt_date;
        $tutor->Phone_Number = $request->txt_phone;
        $tutor->Gender = $request->txt_gender;
        $tutor->Address = $request->txt_address;
        $tutor->avatar = 'default.png';
        // dd($lecturer->Gender,$lecturer->Address);
        $result = $tutor->save();
        $tutor_account = new tutor_account;
        $tutor_account->User_Name = $request->txt_UserName;
        $tutor_account->Password = $request->txt_password;
        $tutor_account->Tutor_ID = $tutor->id; 
        $result_account = $tutor_account->save();

        if($result && $result_account){

            return redirect()->route('tutor.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add tutor']);
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        try {
            $getTutor = TutorHelper::getIdOfTutor($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.tutorsManagement.editTutor', compact('getTutor'));
    }

    public function update(Request $request, $id)
    {
        try {
            $new_avatar = TutorHelper::updateAvatar($request);
            $tutor = tutor::findOrFail($request->id_tutor);
            $tutor->Description = $request->txt_description;
            $tutor->First_Name = $request->txt_FirstName;
            $tutor->Last_Name = $request->txt_LastName;
            $tutor->Email = $request->txt_email;
            $tutor->Birth_Day = $request->txt_date;
            $tutor->Phone_Number = $request->txt_phone;
            $tutor->Gender = $request->txt_gender;
            $tutor->Address = $request->txt_address;
            $tutor->avatar = $new_avatar;
            $result = $tutor->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('tutor.index');
    }

    public function destroy($id)
    {
        //
    }
}
