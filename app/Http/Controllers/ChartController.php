<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\DasboardHelper;
use App\events;
use App\event_detail;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getChart = DasboardHelper::getChart();
        // ['data' => $result, 'children' => $children, 'changeClass' => $changeClass, 'changeClassOld' => $changeClassOld];
        return response()->json($getChart); 
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
        
        $result1 = DB::table('event_detail')->where('event_detail.id_event', '=', $id)->delete();
        $result2=  DB::table('events')->delete($id);
        if($result1 && $result2){
            echo "<script>
                alert('Delete sucess');
                window.location.href='{{ route('getEvents')}}';
            </script>";
        } else{
            echo "<script>
                alert('Some problem');
                window.location.href='{{ route('getEvents')}}';
            </script>";
        }
    }
}
