<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\StaffHelper;
use App\staff;
use Session;
use Hash;

class StaffController extends Controller
{

    public function index()
    {
        $getStaff = StaffHelper::getStaff();

        return view('admin.staffsManagement.staffs', compact('getStaff'));
    }

    public function create()
    {
        return view('admin.staffsManagement.addStaffs');
    }

    public function store(Request $request)
    {
       $tutor = new staff;
        $tutor->Description = $request->txt_description;
        $tutor->Full_Name = $request->txt_FirstName;
        $tutor->Email = $request->txt_email;
        $tutor->Birth_Day = $request->txt_date;
        $tutor->Phone_Number = $request->txt_phone;
        $tutor->Gender = $request->txt_gender;
        $tutor->Address = $request->txt_address;
        $tutor->avatar = 'default.png';
        $tutor->Password = Hash::make($request->txt_password);
        $tutor->User_Name = $request->txt_email;
        $tutor->Role_ID = 2;
        $result = $tutor->save();

        if($result){

            return redirect()->route('staff.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add tutor']);
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
            $getStaff = StaffHelper::getIdOfStaff($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.staffsManagement.editStaff', compact('getStaff'));
    }

    public function update(Request $request, $id)
    {
        try {
            $new_avatar = StaffHelper::updateAvatar($request);
            $staff = staff::findOrFail($request->id_tutor);
            $staff->Description = $request->txt_description;
            $staff->Full_Name = $request->txt_FirstName;
            $staff->email = $request->txt_email;
            $staff->Birth_Day = $request->txt_date;
            $staff->Phone_Number = $request->txt_phone;
            $staff->Gender = $request->txt_gender;
            $staff->Address = $request->txt_address;
            $staff->avatar = $new_avatar;
            $result = $staff->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('staff.index');
    }

    public function destroy($id)
    {
        //
    }
}
