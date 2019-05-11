<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\course;
use App\leogo_class;
use App\time_study;
use App\weekday;
use App\class_room;
use App\schedule;
use App\children;
use App\level;
use App\tem_children_class;
use App\tem_schedule;
use App\children_class;
use Session;
use App\history_user;
use App\Helpers\LeogoClassHelper;
use App\Helpers\WaitClassHelper;
use App\Helpers\CourseHelper;
use App\news;

class AjaxController extends Controller
{
    public function postWaitingClass(Request $request){
        Session::put('idLevel', $request->txt_idLevel);
        Session::put('nameLevel', $request->txt_nameLevel);
        Session::put('numberStudent', $request->txt_numberStudent);
        // dd($request->txt_idLevel, $request->txt_nameLevel);
        // Session::forget('idLevel');
        // Session::forget('nameLevel');
        // $test = $request->session()->get('idLevel');
// dd($test);
        return redirect()->route('classRoom.create');
    }

    public function getStudentOfWaitingClass($id){
        $getStudentOfWaitingClass = WaitClassHelper::getStudentOfWaitingClass($id);

        return ['data' => $getStudentOfWaitingClass];
    }

    public function getStudentOfClass($id){
        $getStudentOfClass = LeogoClassHelper::getStudentOfClass($id);
        
        return ['data' => $getStudentOfClass];
    }

    public function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('history_user')
                // ->where('id',  '=',$request->id)
                ->where('id', $request->id)
                ->update($data);
            echo "$request->id $request->column_value";
        }
    }

     public function getLevelOfCourse($id){
        $getLevelOfCourse = CourseHelper::getLevelOfCourse($id);
        return ['data' => $getLevelOfCourse];
    }

    public function update_data_level(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('level')
                // ->where('id',  '=',$request->id)
                ->where('id', $request->id)
                ->update($data);
            echo "$request->id $request->column_value";
        }
    }

    public function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'Level_Name'    =>  $request->Level_Name,
                'Score_min'     =>  $request->Score_min,
                'Score_max'     =>  $request->Score_max,
                'Course_ID'     =>  $request->Course_ID
            );
            echo '@php $data; @endphp';
            $id = DB::table('level')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted $id</div>';
            }
        }
    }

    public function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('level')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

     public function changeStatus($id)
     {
        $leogo_class = leogo_class::findOrFail($id);
           //dd($leogo_class);
            if($leogo_class->Status  == 0){
                $leogo_class->Status =1;
                $leogo_class->save();
                $a =$leogo_class->Status;
            }

            else{
                $leogo_class->Status=0;
                $leogo_class->save();
                $a =$leogo_class->Status;
            }
        // dd($a);
        return redirect()->route('classRoom.index');
     }

    public function fetchNewClass($id){
       $data = LeogoClassHelper::getInforNewClass($id);
       $output = '
       <tr>
       <td>Class Name</td>
       <td><input type="lable" name="txt_classname" id="txt_classname" value="'.$data->Class_Name.'" disabled ></td>
       </tr>
       <tr>
       <td>Level</td>
       <td><input type="lable" name="txt_levelname" id="txt_levelname" value="'.$data->Level_Name.'" disabled ></td>
       </tr>
       <tr>
       <td>Course</td>
       <td><input type="lable" name="txt_coursename" id="txt_coursename" value="'.$data->Course_Name.'" disabled ></td>
       </tr>
       <tr>
       <td>Learned</td>
       <td><input type="lable" name="txt_qtysession" id="txt_qtysession" value="'.$data->QuantitySession.'" disabled ></td>
       </tr>';

       echo $output;
    }


    public function moveClass(Request $request, $id){
        $children = history_user::where('Children_ID', $id)->update(array('active' => 0));
        if($request->txt_qtystu == 0){
            $changeClassOld = leogo_class::where('id', $request->txt_id_old_class)->update(array('QuantityStudent' => 0));
        } else{
            $changeClassOld = leogo_class::where('id', $request->txt_id_old_class)->decrement('QuantityStudent', 1);
        }
        
        $changeClass = leogo_class::where('id', $request->txt_id_class)->increment('QuantityStudent', 1);
        
        $newchildren = new history_user;
        $newchildren->Class_ID = $request->txt_id_class;
        $newchildren->Level_ID = $request->txt_id_level;
        $newchildren->Children_ID = $id;
        $newchildren->active = 1;
        $result = $newchildren->save();

        return ['data' => $result, 'children' => $children, 'changeClass' => $changeClass, 'changeClassOld' => $changeClassOld];
    }

      public function postCheckOrder(Request $req){
        $checkOrder=news::findOrFail($req->id);
        $status = $req->status;
        $order_id=$req->id;

        if($checkOrder->status==0)
        {
            $checkOrder->status =1;
            // $checkOrder->active=1;
        }
        else
        {
            $checkOrder->status =0;
            // $checkOrder->active=0;
        }
        $reuslt = $checkOrder->save();
       // dd($reuslt);
        return view('admin.brands.ajaxToggoActiveStatus',compact('status','order_id'));
    }

}
