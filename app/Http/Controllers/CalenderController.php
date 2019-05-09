<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CalendarHelper;
use Calendar;
use Carbon\Carbon;
use App\tem_day_time_study;
use Auth;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::guard('staff')->user()->id;
        //$test = CalendarHelper::getCalendarOfLecturer($user);
        // dd($test);

        $events = [];
        // $data = CalendarHelper::getCalendarOfClass();
        // $getWeekDays = CalendarHelper::getWeekDays();
        // foreach ($data as $key => $value) {
        //     $dateEndTime = \Carbon\Carbon::create($value->End_Date)->dayOfWeek;
        //     $day = \Carbon\Carbon::create($value->Start_Date)->diffInDays(\Carbon\Carbon::create($value->End_Date));
        //     for($i = 0; $i < $day; $i++) {
        //         $getDateStart = \Carbon\Carbon::create($value->Start_Date)->addDays($i);
        //         $dateStartTime = $getDateStart->dayOfWeek;
        //         if($value->Weekday_ID == $dateStartTime and $getDateStart != $value->End_Date) {
        //             $tem_day_time_study = new tem_day_time_study;
        //             $tem_day_time_study->title = $value->fullNameClassRoom;
        //             $tem_day_time_study->dayStartStudy = $getDateStart;
        //             $tem_day_time_study->dayEndStudy = $getDateStart;
        //             $tem_day_time_study->timeStartStudy = $value->Time_Start;
        //             $tem_day_time_study->timeEndStudy = $value->Time_End;
        //             $tem_day_time_study->save();
        //         }
        //         else {
        //             if($value->Weekday_ID == $dateEndTime and $value->Start_Date == $value->End_Date) {
        //                $tem_day_time_study = new tem_day_time_study;
        //                $tem_day_time_study->title = $value->fullNameClassRoom;nd_Date;
        //                $tem_day_time_study->dayEndStudy = $value->End_Date;
        //                $tem_day_time_study->timeStartStudy = $value->Time_Start;
        //                $tem_day_time_study->timeEndStudy = $value->Time_End;
        //                $tem_day_time_study->save();
        //             }
        //             else{
        //                 continue;
        //             }
        //         }
        //     }
        // }

        $getTemDayTimeStudys = CalendarHelper::getTemDayTimeStudys();
        if($getTemDayTimeStudys->count()) {
            foreach ($getTemDayTimeStudys as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    false,
                    new \DateTime($value->fullNameTimeStart),
                    new \DateTime($value->fullNameTimeEnd),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);

        return view('admin.calenderManagement.calender', compact('calendar'));
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
