<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DasboardHelper;
use App\Helpers\LecturerHelper;

class DasboarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $countClass = DasboardHelper::countClass();
        $countUser = DasboardHelper::countStaff() + DasboardHelper::countStaff();
        $countRegister = DasboardHelper::countRegister();
        $countNews = DasboardHelper::countNews();
        $getLecturers = LecturerHelper::getLecturers();
        $getListRegisters = DasboardHelper::getListRegisters();
        $getChart = DasboardHelper::getChart();
        // dd($getChart);

        return view('admin.dasboard.dasboard', compact('countClass', 'countUser', 'countRegister', 'countNews', 'getLecturers', 'getListRegisters'));
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
