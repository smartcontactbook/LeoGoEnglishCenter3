<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getHome(){
    	return view('clients.layout.master.master');
    }
}
