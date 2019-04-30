<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CourseHelper;
use App\course;

class CourseController extends Controller
{

    public function index()
    {
        $getCourses = CourseHelper::getCourse();
        // dd($getCourses);
        //$getLevels = CourseHelper::getLevelOfCourse();
        return view('admin.courseManagement.course', compact('getCourses'));
    }

    public function create()
    {
        

    }

    public function store(Request $request)
    {

        $file_image=$request->file('image')->getClientOriginalName();
        $course = new course();
        $course->Course_Name = $request->txt_name;
        $course->Description = $request->txt_description;
        $course->Term = $request->cmb_term;
        $course->image = $file_image;
        $request->file('image')->move('image/course/',$file_image);
        $course->content = $request->txt_content;
        // dd($course->content);
        //$course->Level_ID = $request->cmb_level;
        $result = $course->save();
        // dd($result);
        if($result){

            return redirect()->route('course.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add couser']);
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request)
    {
        // dd($request->txt_courseID);
        try {
            $course = course::findOrFail($request->idCourse);
            $course->Course_Name = $request->txt_name;
            $course->Description = $request->txt_description;
            $course->Term = $request->cmb_term;
           // $course->Level_ID = $request->cmb_level;
            $result = $course->save();
        // dd($result);
            if($result){
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->back();

        // $course = new course();
        // $course->Course_Name = $request->txt_name;
        // $course->Description = $request->txt_description;
        // $course->Term = $request->cmb_term;
        // $course->Level_ID = $request->cmb_level;
        // $result = $course->save();
        // // dd($result);
        // if($result){

        //     return redirect()->route('course.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add couser']);
        // } else{

        //     return redirect()->back()->with('errorLists', trans('Faill !!! '));
        // }
    }

    public function destroy($id)
    {
        //
    }
}
