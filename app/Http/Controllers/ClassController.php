<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LeogoClassHelper;
use App\leogo_class;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_schedule;
use Carbon\Carbon;
use App\tem_leogo_class;
use Session;
use App\Helpers\CalendarHelper;

class ClassController extends Controller
{
    public function index(Request $request)
    {
        $getClassOfCourses = LeogoClassHelper::getClassOfCourses();
        $getCourses = LeogoClassHelper::getCourses();

        $getStudentClass = LeogoClassHelper::getStudentOfClass($request->txt_idClass);


        return view('admin.classManagement.classRoom', compact('getClassOfCourses', 'getCourses', 'getStudentClass'));
    }

    public function create()
    {
        $getCourses = LeogoClassHelper::getCourses();
        $getLecturers = LeogoClassHelper::getLecturers();
        $getTutors = LeogoClassHelper::getTutors();
        return view('admin.classManagement.addClass', compact('getCourses', 'getLecturers', 'getTutors'));
    }

    public function store(Request $request)
    {
        $leogoCLass = new leogo_class;
        $leogoCLass->Class_Name = $request->txt_ClassName;
        $leogoCLass->Start_Date = Carbon::parse($request->txt_dateStart);
        $leogoCLass->End_Date = Carbon::parse($request->txt_dateEnd);
        $leogoCLass->Tuition = $request->txt_Tuition;
        $leogoCLass->Description = $request->txt_description;
        $leogoCLass->QuantityStudent = $request->quantityStudent;
        $leogoCLass->QuantitySession = $request->quantitySession;
        $leogoCLass->Lecturer_ID = $request->cmb_lecturer;
        $leogoCLass->Tutor_ID = $request->cmb_tutor;
        $leogoCLass->Course_ID = $request->cmb_course;

        $leogoCLass->save();

        Session::put('id_LeogoClass', $leogoCLass->id);
        // $test = Session::get('id_LeogoClass');


        return redirect()->route('getSetSchudule');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
