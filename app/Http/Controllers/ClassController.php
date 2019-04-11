<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LeogoClassHelper;
use App\leogo_class;
use App\schedule;
use App\children;
use App\tem_children_class;
use App\tem_children;
use App\tem_schedule;
use Carbon\Carbon;
use App\tem_leogo_class;
use Session;
use App\Helpers\CalendarHelper;
use App\Helpers\WaitClassHelper;

class ClassController extends Controller
{
    public function index(Request $request)
    {
        Session::forget('idLevel');
        Session::forget('nameLevel');
        Session::forget('numberStudent');
        $getClassOfCourses = LeogoClassHelper::getClassOfCourses();
        // dd($getClassOfCourses);
        $getCourses = LeogoClassHelper::getCourses();
        $getHistoryStudent = LeogoClassHelper::getHistoryStudent(6);
        // dd($getHistoryStudent);

        $getStudentClass = LeogoClassHelper::getStudentOfClass($request->txt_idClass);


        return view('admin.classManagement.classRoom', compact('getClassOfCourses', 'getCourses', 'getStudentClass', 'getStudentClass'));
    }

    public function create(Request $request)
    {
        // Session::forget('idLevel');
        // Session::forget('nameLevel');
        $getLevels = LeogoClassHelper::getLevels();
        $getLecturers = LeogoClassHelper::getLecturers();
        $getTutors = LeogoClassHelper::getTutors();
        
        // dd($getStudentOfWaitingClass);

        return view('admin.classManagement.addClass', compact('getLevels', 'getLecturers', 'getTutors'));
    }

    public function store(Request $request)
    {
// dd($request->quantityStudent);
        // dd(Session::get('idLevel'));
        if(Session::get('numberStudent') != null )
            $quaStudent = Session::get('numberStudent');
        else
            $quaStudent = $request->quantityStudent;

        try{
            $leogoCLass = new leogo_class;
            $leogoCLass->Class_Name = $request->txt_ClassName;
            $leogoCLass->Start_Date = Carbon::parse($request->txt_dateStart);
            $leogoCLass->End_Date = Carbon::parse($request->txt_dateEnd);
            $leogoCLass->Tuition = $request->txt_Tuition;
            $leogoCLass->Description = $request->txt_description;
            $leogoCLass->QuantityStudent = $quaStudent;
            $leogoCLass->QuantitySession = $request->quantitySession;
            $leogoCLass->Lecturer_ID = $request->cmb_lecturer;
            $leogoCLass->Tutor_ID = $request->cmb_tutor;
            $leogoCLass->Level_ID = $request->cmb_course;
        // $leogoCLass->save();
            $result = $leogoCLass->save();
            if($result) {
                $idLevel = Session::get('idLevel');
                $getStudentOfWaitingClass = WaitClassHelper::getStudentOfWaitingClass($idLevel);
                foreach ($getStudentOfWaitingClass as $key => $value) {
                    $tem_children_class = new tem_children_class;
                    $tem_children_class->Children_Name = $value->Last_Name;
                    $tem_children_class->Gender = $value->Gender;
                    $tem_children_class->Phone_Number = $value->Phone_Number;
                    $tem_children_class->Birth_Day = $value->Birth_Day;
                    $tem_children_class->Address = $value->Address;
                    $tem_children_class->Email = $value->email;
                    $tem_children_class->Parent_Name = $value->Parent_Name;
                    $tem_children_class->Score = $value->Score;
                    $tem_children_class->id_Children = $value->id;
                    $tem_children_class->Status = $value->Status;
                    $tem_children_class->save();

                    $tem_class = tem_children::findOrFail($value->id_tem_children);
                    $tem_class->delete($value->id_tem_children);
                }
                // Session::forget('idLevel');
                // Session::forget('nameLevel');
                Session::put('id_LeogoClass', $leogoCLass->id);

                $request->session()->flash('messageAdd', 'Add success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }
        
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
