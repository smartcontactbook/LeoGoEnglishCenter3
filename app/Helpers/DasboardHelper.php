<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;
use App\children;
use App\register;
use App\leogo_class;
use App\news;

class DasboardHelper
{
    public static function countStaff(){
        $countStaff = staff::all()->count();

        return $countStaff;
    }

    public static function countChildren(){
        $countChildren = children::all()->count();

        return $countChildren;
    }

    public static function countRegister(){
        $countRegister = register::all()->count();

        return $countRegister;
    }

    public static function countClass(){
        $countClass = leogo_class::all()->count();

        return $countClass;
    }

    public static function countNews(){
        $countNews = news::all()->count();

        return $countNews;
    }

    public static function getListRegisters()
    {
       $getListRegisters = register::orderBy('id', 'desc')->offset(0)->limit(7)->get();

        return $getListRegisters;
    }

    public static function getChart(){
        $result = DB::table('children')
                    ->select(DB::raw("(COUNT(*)) as total"), 'children.*', DB::raw("MONTH(create_at) as month"))
                    ->orderBy('create_at', 'ASC')
                    ->groupBy(DB::raw("MONTH(create_at)"))
                    ->get();
        return $result;
    }

    public static function getChartChildren($id){
        $getChartChildren = DB::table('history_user')->where()
                            ->get();
        return $getChartChildren;
    }

}
