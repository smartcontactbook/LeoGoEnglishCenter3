<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\StaffHelper;
use App\staff;
use App\staff_account;
use Session;

class StaffController extends Controller
{

    public function index()
    {
        $getStaff = StaffHelper::getStaff();
       // dd($getStaff);

        return view('admin.staffsManagement.staffs', compact('getStaff'));
    }

    public function create()
    {
        return view('admin.staffsManagement.addStaffs');
    }

    public function store(Request $request)
    {
        dd($request->txt_password);
        // $staff = new staff;
        // $staff->Description = $request->txt_description;
        // $staff->First_Name = $request->txt_FirstName;
        // $staff->Last_Name = $request->txt_LastName;
        // $staff->Email = $request->txt_email;
        // $staff->Birth_Day = $request->txt_date;
        // $staff->Phone_Number = $request->txt_phone;
        // $staff->Gender = $request->txt_gender;
        // $staff->Address = $request->txt_address;
        // $staff->avatar = 'default.png';
        // $staff->Password = $request->txt_password;
        // $staff->Role_ID = 4;
        // dd($staff->Password);
        // // dd($lecturer->Gender,$lecturer->Address);
        // $result = $staff->save();
        
        // if($result){

        //     return redirect()->route('staff.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add staff']);
        // } else{

        //     return redirect()->back()->with('errorLists', trans('Faill !!! '));
        // }

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

        return view('admin.staffsManagement.editStaffs', compact('getStaff'));
    }

    public function update(Request $request, $id)
    {
        try {
            $new_avatar = StaffHelper::updateAvatar($request);
            $staff = staff::findOrFail($request->id_staff);
            $staff->Description = $request->txt_description;
            $staff->First_Name = $request->txt_FirstName;
            $staff->Last_Name = $request->txt_LastName;
            $staff->Email = $request->txt_email;
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
