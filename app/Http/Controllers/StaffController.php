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
        dd($getStaff);

        return view('admin.staffsManagement.staffs', compact('getStaff'));
    }

    public function create()
    {
        return view('admin.staffsManagement.addStaffs');
    }

    public function store(Request $request)
    {
        $staff = new staff;
        $staff->Description = $request->txt_description;
        $staff->First_Name = $request->txt_FirstName;
        $staff->Last_Name = $request->txt_LastName;
        $staff->Email = $request->txt_email;
        $staff->Birth_Day = $request->txt_date;
        $staff->Phone_Number = $request->txt_phone;
        $staff->Gender = $request->txt_gender;
        $staff->Address = $request->txt_address;
        $staff->avatar = 'default.png';
        // dd($lecturer->Gender,$lecturer->Address);
        $result = $staff->save();
        
        $staff_account = new staff_account;
        $staff_account->User_Name = $request->txt_UserName;
        $staff_account->Password = $request->txt_password;
        $staff_account->Staff_ID = $staff->id; 
        $result_account = $staff_account->save();
        dd($result_account);

        if($result && $result_account){

            return redirect()->route('staff.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add staff']);
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
