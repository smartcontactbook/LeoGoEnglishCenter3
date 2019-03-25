<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\staff;
use App\staff_account;


class StaffHelper
{
    public static function getStaff()
    {
         $getStaff = staff::join('staff_account', 'staff.id', '=', 'staff_account.Staff_ID')->get();

        return $getStaff;
    }

    public static function getIdOfStaff($idStaff){
        $getId = staff::findOrFail($idStaff);

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
