<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LeogoClassHelper;
use App\leogo_class;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_children;
use App\tem_schedule;
use Carbon\Carbon;
use App\tem_leogo_class;
use Session;
use App\Helpers\CalendarHelper;
use App\Helpers\WaitClassHelper;
use App\history_user;
use App\Helpers\ScoreHelper;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getClassOfCourses = ScoreHelper::getClassOfCourses();
        $getCourses = ScoreHelper::getCourses();

        //$getStudentClass = LeogoClassHelper::getStudentOfClass($request->txt_idClass);


        return view('admin.scoreManagement.listClass', compact('getClassOfCourses', 'getCourses'));


        //return view('admin.scoreManagement.updateScore');//, compact('getChirldenOfClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        //dd($request->txt_idClass);
        return view('admin.scoreManagement.updateScore');
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
            $history_user = history_user::findOrFail($id);
            dd($request->input_ScoreMidtem);
            $history_user->Score_Midtem = $request->input_ScoreMidtem;
            $history_user->Score_Final = $request->input_ScoreFinal;
            $result = $history_user->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return view('admin.scoreManagement.updateScore');
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
