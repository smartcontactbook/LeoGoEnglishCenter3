<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\staff;

class LecturerHelper
{
    public static function getLecturers()
    {
        $getLecturers = staff::where('Role_ID', 3)->get();

        return $getLecturers;
    }

    public static function getIdOfLecturer($idLecturer){
        $getId = staff::findOrFail($idLecturer);

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
