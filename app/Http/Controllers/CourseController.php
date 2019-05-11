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

        return view('admin.courseManagement.course', compact('getCourses'));
    }

    public function create()
    {
        
        return view('admin.courseManagement.addCourse');       
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
        $result = $course->save();
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
        $getCourseEdit = course::findOrFail($id);

        return view('admin.courseManagement.editCourse', compact('getCourseEdit'));
    }

    public function update(Request $request, $id)
    {
        try {
            $course = course::findOrFail($id);
            $course->Course_Name = $request->txt_name2;
            $course->Description = $request->txt_description;
            $course->Term = $request->cmb_term;
            $course->content = $request->txt_contentTest;
            $image = $request->image;
            if($image == null){
                $result = $course->save();
            } else{
                $file_image=$request->file('image')->getClientOriginalName();
                $course->image = $file_image;
                $request->file('image')->move('image/course/',$file_image);
                $result = $course->save();
            }
            
            if($result){

                return redirect()->route('course.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update couser']);
            } else {

                return redirect()->back()->with('errorLists', trans('Faill !!! '));
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

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
