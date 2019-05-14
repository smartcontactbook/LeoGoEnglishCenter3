<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\e_book;
use App\course;

class EBookHelper
{
	public static function getEbookOfCourses(){
        $getEbookOfCourses = DB::table('e_book')
        ->join('course', 'course.id', '=', 'e_book.Course_ID')
        ->select('course.id as id_course','e_book.image as eBook_image','e_book.description as eBook_description', 'e_book.id as eBook_id', 'e_book.*',  'course.*')
        ->get();
        
        return $getEbookOfCourses;
    }


    public static function getIdOfEbook($id){
        $getIdOfEbook = e_book::findOrFail($id);

        return $getIdOfEbook;
    }
}