<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LeogoClassHelper;
use App\Helpers\EBookHelper;
use App\Helpers\RegisterHelper;
use App\e_book;

class eBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $getEbookOfCourses = EBookHelper::getEbookOfCourses();
        $getCourses = LeogoClassHelper::getCourses();
        return view('admin.E-book.E-bookList', compact('getCourses','getEbookOfCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getCourseOfRegister = RegisterHelper::getCourseOfRegister();
        return view('admin.E-book.addEBook', compact('getCourseOfRegister'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e_book = new e_book;
        $file_image=$request->file('image')->getClientOriginalName();
        $e_book->eBook_Name = $request->txt_eBook_Name;
        $e_book->Author = $request->txt_Author;
        $e_book->description = $request->txt_description;
        $e_book->image = $file_image;
        $request->file('image')->move('image/ebook/',$file_image);
        $e_book->file = $request->txt_file;
        $e_book->Course_ID = $request->cbm_Course;
        
        // dd($lecturer->Gender,$lecturer->Address);
        $result = $e_book->save();

        if($result){

            return redirect()->route('e-book.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add lecturer']);
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getEbookOfCourses = EBookHelper::getIdOfEbook($id);
        } catch (Exception $e) {

            return redirect()->back()->with('errorLists', $e->getMessage());
        }

        return view('admin.E-book.editEbook', compact('getEbookOfCourses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


         try {
            $e_book = e_book::findOrFail($id);
           
            $e_book->eBook_Name = $request->txt_eBook_Name;
            $e_book->Author = $request->txt_Author;
            $e_book->description = $request->txt_description;
            $e_book->file = $request->txt_file;
            $image2 = $request->file('image');
            if($image2 == null)
                $result = $e_book->save();
            else{
                $file_image=$request->file('image')->getClientOriginalName();
                $e_book->image = $file_image;
                $request->file('image')->move('image/ebook/',$file_image);
                $result = $e_book->save();
            }
            
            
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('e-book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
