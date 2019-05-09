<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\RegisterHelper;
use App\register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getRegister = RegisterHelper::getRegister();
        $getLevels = RegisterHelper::getLevelOfCourse();
// dd($getRegister);
        // $getCourse = RegisterHelper::getCourse();
        return view('admin.enrollmentManagement.RegisterList',compact('getRegister','getLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $getCourseOfRegister = RegisterHelper::getCourseOfRegister();
        return view('admin.enrollmentManagement.register', compact('getCourseOfRegister'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $register = new register;
        $register->Test_Schedule = $request->dt_Schedule;
        // dd($register->Test_Schedule);
        $register->Full_Name = $request->txt_FirstName;
        $register->Nick_Name = $request->txt_NickName;
        $register->Parent_Name = $request->txt_ParentName;
        $register->Birth_Day = $request->txt_date;
        $register->Email = $request->txt_email;
        $register->Address = $request->txt_address;
        $register->Gender = $request->txt_gender;
        $register->Phone_Number = $request->txt_phone;
        $register->Course_ID = $request->cbm_Course;
        // dd($lecturer->Gender,$lecturer->Address);
        $result = $register->save();
        if($result ){

            return redirect()->route('register.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add register']);
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {       
            $register = register::findOrFail($request->txt_testId);
           // dd($register);
            $register->Test_Schedule = $request->txt_testSchedule;
            $result = $register->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $register = register::findOrFail($request->txt_testId);
            dd($register);
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            dd($id);
            $register = register::findOrFail($id);
            $register->delete();
            return redirect()->route('register.index');
    }

        
}
