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
use App\Helpers\CalendarHelper;
use App\Helpers\WaitClassHelper;
use App\history_user;
use App\Helpers\ScoreHelper;
use Session;

class ScoreAjaxController extends Controller
{
    function index()
    {
        
        // dd($idClass);
        return view('admin.scoreManagement.updateScore');

    }

    function getChirlden()
    {
            // $idClass = Session::get('IdClass');
            //  dd($idClass);
            $getChirlden = ScoreHelper::getChirlden();
            return ['data' => $getChirlden];
            //echo json_encode($data);

    // $data = ScoreHelper::getChirldenOfClass($idClass);

    // return ['data' => $data];
        // return view('admin.scoreManagement.updateScore');
    }

    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'first_name'    =>  $request->first_name,
                'last_name'     =>  $request->last_name
            );
            $id = DB::table('history_user')->insert($data);
            if($id > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('history_user')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('history_user')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
?>
}
