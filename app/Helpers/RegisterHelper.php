<?php

namespace App\Helpers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\register;
use App\course;
use App\level;
class RegisterHelper
{
    public static function getRegister()
    {
       $getRegister = DB::table('register')
        ->join('course', 'register.Course_ID', '=', 'course.id')
        ->select('course.id as id_course','course.*', 'register.*')
        ->get();
        return $getRegister;
    }


    public static function getLevelOfCourse(){
        $parent=level::select('id','Level_Name')->get()->toArray();

        return $parent;
    }

    public static function getCourse($id){
        $parent=course::where('id', '=', $id)->get();

        return $parent;
    }
    
    public static function getCourseOfRegister(){
        // $parent=course::select('id','Course_Name')->get()->toArray();

        // return $parent;
        // 
        $getCourseOfRegister = course::all();

        return $getCourseOfRegister;
    }

    


    public static function getIdOfRegister($idRegister){
        $getId = staff::findOrFail($idRegister);

        return $getId;
    }

    public static function updateAvatar(Request $request)
    {
        $photoName = "";
        $old_avatar = $request->old_avatar;
        $path = public_path('image/avatar/'.$old_avatar);
        if ($request->hasFile('new_avatar')) {
            if($old_avatar != 'default.png') {
                unlink($path);
            }
            $photoName = time().'.'.$request->new_avatar->getClientOriginalExtension();
            $request->new_avatar->move(public_path('image/avatar'), $photoName);
        } else {
            $photoName = $old_avatar;
        }

        return $photoName;
    }
}
