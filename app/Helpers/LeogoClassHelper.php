<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\staff;
use App\course;
use App\leogo_class;
use App\time_study;
use App\weekday;
use App\class_room;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_children;
use App\tem_schedule;
use App\children_class;
use App\level;
use App\history_user;

class LeogoClassHelper
{
    // public static function getLecturers()
    // {
    //     $getLecturer = lecturer::join('lecturer_account', 'lecturer.id', '=', 'lecturer_account.Lecturer_ID')->get();

    //     return $getLecturer;
    // }

    public static function getCourses()
    {
    	$getCourses = course::all();

    	return $getCourses;
    }

    public static function getCourseOfLecturer($id){
        $getClassOfCourses = DB::table('level')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
            ->join('staff', 'leogo_class.Lecturer_ID', '=', 'staff.id')
            ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'staff.id as id_staff','level.*', 'leogo_class.*', 'course.*', 'staff.*')
            ->groupBy('course.id')
            ->where('staff.id', $id)
            ->get();
        
        return $getClassOfCourses;
    }

    public static function getCourseOfLecturer2($id){
        $getClassOfCourses = DB::table('level')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
            ->join('staff', 'leogo_class.Lecturer_ID', '=', 'staff.id')
            ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'staff.id as id_staff','level.*', 'leogo_class.*', 'course.*', 'staff.*')
            ->where('staff.id', $id)
            ->get();
        
        return $getClassOfCourses;
    }

    public static function getCourseOfTutor($id){
        $getClassOfCourses = DB::table('level')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
            ->join('staff', 'leogo_class.Tutor_ID', '=', 'staff.id')
            ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'staff.id as id_staff','level.*', 'leogo_class.*', 'course.*', 'staff.*')
            ->groupBy('course.id')
            ->where('staff.id', $id)
            ->get();
        
        return $getClassOfCourses;
    }

    public static function getCourseOfTutor2($id){
        $getClassOfCourses = DB::table('level')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
            ->join('staff', 'leogo_class.Tutor_ID', '=', 'staff.id')
            ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'staff.id as id_staff','level.*', 'leogo_class.*', 'course.*', 'staff.*')
            ->where('staff.id', $id)
            ->get();
        
        return $getClassOfCourses;
    }

    public static function getLecturers()
    {
    	$getLecturers = staff::where('Role_ID', 3)->get();

        return $getLecturers;
    }

    public static function getTutors()
    {
    	$getTutors = staff::where('Role_ID', 4)->get();

        return $getTutors;
    }

    public static function getWeekdays(){
        $getWeekdays = weekday::all();

        return $getWeekdays;
    }

    public static function getClassRooms(){
        $getClassRooms = class_room::all();

        return $getClassRooms;
    }

    public static function getTimeStudys(){
        $getTimeStudys = time_study::all();

        return $getTimeStudys;
    }

    public static function getChildrenNotActives(){
        $getChildrenNotActives = tem_children::all();

        return $getChildrenNotActives;
    }

    public static function getInforChildrens($id){
        $getInforChildrens = children::select('children.id as id_children', 'tem_children.*', 'children.*')->join('tem_children', 'children.id', '=', 'tem_children.Children_ID')->where('children.id', '=', '$id')->first();

        return $getInforChildrens;
    }

    public static function getTemChildrenClass(){
        $getTemChildrenClass = tem_children_class::all();

        return $getTemChildrenClass;
    }

    public static function CountSetSChedule(){
        $CountSetSChedule = tem_schedule::count();

        return $CountSetSChedule;
    }

    public static function getTemChildrenClass2(){
        $getTemChildrenClass2 = tem_children_class::count();

        return $getTemChildrenClass2;
    }

    public static function getSchedules(){
        $getSchedules = DB::table('tem_schedule')
        ->join('time_study', 'tem_schedule.Time_Study_ID', '=', 'time_study.id')
        ->join('weekday', 'tem_schedule.Weekday_ID', '=', 'weekday.id')
        ->join('class_room', 'tem_schedule.Classroom_ID', '=', 'class_room.id')
        ->select('tem_schedule.id as id_schedule', 'tem_schedule.*', 'time_study.id as id_time_study', 'time_study.*', 'weekday.id as id_weekday', 'weekday.*', 'class_room.id as id_class_room', 'class_room.*')
        ->get();
        return $getSchedules;
    }

    public static function getLevels(){
        $getLevels = level::all();

        return $getLevels;
    }

    public static function getClassOfCourses(){
        // $getClassOfCourses = level::select('level.id as id_course', 'level.*', 'leogo_class.*')->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')->get();
        $getClassOfCourses = DB::table('level')
        ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
        ->join('course', 'level.Course_ID', '=', 'course.id')
        //->select('course.id as id_course', 'leogo_class.id as id_class', 'level.*', 'leogo_class.*', 'course.*')
        ->select('course.id as id_course', 'level.id as id_level', 'leogo_class.id as id_leogo', 'level.*', 'leogo_class.*', 'course.*')
        ->get();
        
        return $getClassOfCourses;
    }

    public static function getStudentOfClass($idClass){
        $getStudentOfClass = DB::table('history_user')
        ->join('children', 'history_user.Children_ID', '=', 'children.id')
        ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
        ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
        ->join('course', 'level.Course_ID', '=', 'course.id')
        ->select('history_user.id as id_history_user', 'level.id as id_level', 'course.id as id_course', 'children.id as id_children_new', 'leogo_class.id as id_leogo_class','course.*', 'level.*','history_user.*','children.*','leogo_class.*')
        ->where([ 
            ['history_user.active', '=', 1 ],
            ['history_user.Class_ID', '=', $idClass]
        ])
        ->get();    

        return $getStudentOfClass;
    }

    public static function getClassOfChildrens($id){
        // $getClassOfChildrens = history_user::where('Class_ID', $id)->get();
        // $getClassOfChildrens = history_user::join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')->where('history_user.Children_ID', '=', $id)->get();
        // $getClassOfChildrens = children::select('children.id as id_children', 'history_user.*', 'children.*')->join('history_user', 'children.id', '=', 'history_user.Children_ID')->where('id_children', '=', $id)->get();
        $getClassOfChildrens = DB::table('history_user')
            ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
            ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
            ->join('course', 'level.Course_ID', '=', 'course.id')
            ->where('history_user.Children_ID', '=', $id)
            ->get();
        return $getClassOfChildrens;
    }

    public static function getClassOfCoursesDatail($idCourse){
        $getClassOfCoursesDatail = DB::table('history_user')
            ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
            ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
            ->where('level.Course_ID', '=', $idCourse)
            ->get();
        return $getClassOfCoursesDatail;
    }

    public static function getNewClass($id){
        $getNewClass =  DB::table('level')
                        ->join('leogo_class', 'level.id', '=', 'leogo_class.Level_ID')
                        ->select('level.id as id_level', 'level.*', 'leogo_class.*')
                        ->where('leogo_class.id', '<>', $id)
                        ->get();

        return $getNewClass;
    }

    public static function getInforNewClass($idClass){
        $getInforNewClass = DB::table('leogo_class')
        // ->join('children', 'history_user.Children_ID', '=', 'children.id')
        // ->join('leogo_class', 'history_user.Class_ID', '=', 'leogo_class.id')
        ->join('level', 'leogo_class.Level_ID', '=', 'level.id')
        ->join('course', 'level.Course_ID', '=', 'course.id')
        ->select( 'level.id as id_level', 'course.id as id_course', 'leogo_class.id as id_class', 'course.*', 'level.*', 'leogo_class.*')
        ->where('leogo_class.id', '=', $idClass)
        ->first();    

        return $getInforNewClass;
    }

}
        