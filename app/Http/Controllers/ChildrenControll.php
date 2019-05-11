<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AddchildrenHelper;
use App\Helpers\TutorHelper;
use App\children;

class ChildrenControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $getChildrens = AddchildrenHelper::getChildrens();
        // dd($getChildrens);
        return view('admin.ChildrensManagement.childrens', compact('getChildrens'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getDetailChildrens = AddchildrenHelper::getDetailChildrens($id);
        $getDetailChildrens2 = AddchildrenHelper::getDetailChildrens2($id);
// dd($getDetailChildrens2);
        return view('admin.ChildrensManagement.childrenDetal', compact('getDetailChildrens', 'getDetailChildrens2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getEditChildren = AddchildrenHelper::getDetailChildrens($id);

        return view('admin.ChildrensManagement.editChildren', compact('getEditChildren'));
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
            $new_avatar = TutorHelper::updateAvatar($request);
            $children = children::findOrFail($id);
            $children->Description = $request->txt_description;
            $children->Full_name = $request->txt_FirstName;
            $children->Email = $request->txt_email;
            $children->Birth_Day = $request->txt_date;
            $children->Phone_Number = $request->txt_phone;
            $children->Gender = $request->txt_gender;
            $children->Address = $request->txt_address;
            $children->avatar = $new_avatar;
            $children->Parent_Name = $request->txt_ParentName;
            $children->password = $request->txt_passwords;
            $children->Role_ID = 5;
            $children->Status = 0;
            $result = $children->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('children.index');
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
