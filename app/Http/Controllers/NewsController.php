<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
// dd($news);
        return view('admin.news.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.news.addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $file_image=$request->file('image')->getClientOriginalName();
            $news = new news();
            $news->title = $request->txt_name;
            $news->description = $request->txt_description;
            $news->image = $file_image;
            $request->file('image')->move('image/news/',$file_image);
            $news->content = $request->txt_content;
            $news->create_at = Carbon::now()->toDateString();
            // dd( $request->cmb_type);
            $news->type = $request->cmb_type;
            if($request->cmb_type = 1){
                $news->status = 0;
            } else{
                $news->status = 1;
            }
            $result = $news->save();
            // dd($result);
            if($result){

                return redirect()->route('news.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete add news']);
            } else{

                return redirect()->back()->with('errorLists', trans('Faill !!! '));
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = news::findOrFail($id);
// dd($detail);
        return view('admin.news.editNews', compact('detail'));
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
            $news = news::findOrFail($id);
            $news->title = $request->txt_name;
            $news->description = $request->txt_description;
            $news->content = $request->txt_content;
            $image = $request->image;
            
            if($image == null){

               $result = $news->save();
            } else {
                $file_image=$request->file('image')->getClientOriginalName();
                $news->image = $file_image;
                $request->file('image')->move('image/news/',$file_image);

                $result = $news->save();
            }
            if($result){

                return redirect()->route('news.index')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update news']);
            } else{

                return redirect()->back()->with('errorLists', trans('Faill !!! '));
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
