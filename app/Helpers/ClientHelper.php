<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\news;

class ClientHelper
{
    public static function getWeekDays(){
        $getWeekDays = weekday::all();

        return $getWeekDays;
    }

    public static function getNews(){
    	$getNews = DB::table('news')
		    	->groupBy('news.id')
		    	->orderByRaw('COALESCE(news.create_at) DESC')
		    	->select('news.*')
		    	->get();

		return $getNews;
    }

    public static function getNewsDetail($id){
    	$getNewsDetail = news::findOrFail($id)->first();

    	return $getNewsDetail;
    }

    public static function getNewsLimit($id){
    	$getNewsLimit = DB::table('news')
		    	->groupBy('news.id')
		    	->orderByRaw('COALESCE(news.create_at) DESC')
		    	->where('news.id', '<>', $id)
		    	->select('news.*')
		    	->skip(5)->take(0)->get();

		return $getNewsLimit;
    }

}
