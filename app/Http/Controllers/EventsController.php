<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EventsHelper;
use App\staff;
use App\event_detail;
use App\events;
use Auth;
use Session;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function getEvents(){
    	$getEvents = EventsHelper::getEvents();

    	return view('admin.events.event', compact('getEvents'));
    }

    public function getAddEvent(){

    	return view('admin.events.addEvent');
    }

    public function postImages(Request $request)
    {
        $file_image=$request->file('image')->getClientOriginalName();
    	$events = new events;
        $events->title = $request->txt_name;
        $events->create_at = Carbon::now();
        $events->id_user = $user = Auth::guard('staff')->user()->id;        
        $events->image = $file_image;
        $request->file('image')->move('image/events/',$file_image);
        $result = $events->save();

        if($result){
        	foreach ($request->photos as $photo) {
        		$filename = $photo->store('photos');
	        		event_detail::create([
	        			'id_event' => $events->id,
	        			'name' => $filename
	        		]);
            }
            
            return redirect()->route('getEvents')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add lecturer']);
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }



    }
}
