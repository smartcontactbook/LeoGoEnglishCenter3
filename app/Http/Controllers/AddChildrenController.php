<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use App\lecturer;
use App\Helpers\AddchildrenHelper;
use App\time_study;
use App\weekday;
use App\level;
use App\class_room;
use App\schedule;
use App\tem_children_class;
use App\children;
use App\tem_schedule;
use App\class_schedule;
use App\children_class;
use App\tem_leogo_class;
use Carbon\Carbon;
use Session;
use App\Helpers\LeogoClassHelper;
use Illuminate\Support\Facades\DB;
use App\children_account;
use App\Helpers\RegisterHelper;

class AddChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getLevelOfCourse = AddchildrenHelper::getLevelOfCourse();
        return view('admin.enrollmentManagement.RegisterList',compact('getLevelOfCourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
