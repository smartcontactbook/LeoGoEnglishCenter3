<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function getDasboard(){

        return view('admin.dasboard.dasboard');
    }
}
