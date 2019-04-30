<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LecturerHelper;
use App\staff;
use Session;
use Hash;

class LecturersController extends Controller
{

    public function index()
    {
        $getLecturers = LecturerHelper::getLecturers();

        return view('admin.lecturersManagement.lecturers', compact('getLecturers'));
    }

    public function create()
    {
        return view('admin.lecturersManagement.addLecturers');
    }

    public function store(Request $request)
    {
        $lecturer = new staff;
        $lecturer->Description = $request->txt_description;
        $lecturer->Full_Name = $request->txt_FirstName;
        $lecturer->Email = $request->txt_email;
        $lecturer->Birth_Day = $request->txt_date;
        $lecturer->Phone_Number = $request->txt_phone;
        $lecturer->Gender = $request->txt_gender;
        $lecturer->Address = $request->txt_address;
        $lecturer->avatar = 'default.png';
        $lecturer->User_Name = $request->txt_email;
        $lecturer->Password = Hash::make($request->txt_password);
        $lecturer->Role_ID = 3;
        // dd($lecturer->Gender,$lecturer->Address);
        $result = $lecturer->save();

        if($result){

            return redirect()->route('lecturer.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add lecturer']);
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
            $getLecturer = LecturerHelper::getIdOfLecturer($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.lecturersManagement.editLecturers', compact('getLecturer'));
    }

    public function update(Request $request, $id)
    {
        // try {
        //     $lecturer = lecturer::findOrFail($request->id_lecturer);
        //     $lecturer->Description = $request->txt_description;
        //     $lecturer->First_Name = $request->txt_FirstName;
        //     $lecturer->Last_Name = $request->txt_LastName;
        //     $lecturer->Email = $request->txt_email;
        //     $lecturer->Birth_Day = $request->txt_date;
        //     $lecturer->Phone_Number = $request->txt_phone;
        //     $lecturer->Gender = $request->txt_gender;
        //     $lecturer->Address = $request->txt_address;
        //     dd($lecturer->Address);
        //     $result = $lecturer->save();
        //     if($result) {
        //         $request->session()->flash('messageUpadte', 'Upadte success');
        //     } else {
        //         $request->session()->flash('errorLists', 'There was an error');
        //     }
        // } catch (Exception $e) {
        //     $request->session()->flash('errorLists', $e->getMessage());
        // }

        // return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
