<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lecturer;
use App\tutor;
use App\children;
use App\staff;
use App\role;

class LoginHelper
{
    public static function getUsers()
    {
        $getUsers = DB::table('role')
        ->join('lecturer', 'role.id', '=', 'lecturer.Role_ID')
        ->join('staff', 'role.id', '=', 'staff.Role_ID')->get();
        // ->get();

        return $getUsers;
    }

}
