<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CourseHelper;
use App\Helpers\ClientHelper;
use App\Helpers\EventsHelper;
use Illuminate\Support\Facades\Mail;
use App\register;
use Session;
use Alert;
use Hash;
use App\staff;
use App\events;
use GuzzleHttp\Client;
// use App\Http\Controllers\BaoKimAPI;
// use Mail;
// use App\Helpers\CourseHelper;

class ClientController extends Controller
{
    public function getHome(){
    	$getCourses = CourseHelper::getCourse();

        // dd(Hash::make('123456789'));
    	return view('clients.home.home.home', compact('getCourses'));
    }

    public function postRegisterOnline(Request $request){
    	$register = new register;
        $register->Full_Name = $request->txt_name;
        $this->fullName = $request->txt_name;
        $register->Parent_Name = $request->txt_parent;
        $this->parentName = $request->txt_parent;
        $register->Birth_Day = $request->txt_date;
        $register->Email = $request->txt_email;
        $this->email = $request->txt_email;
        $register->Address = $request->txt_address;
        $register->Phone_Number = $request->txt_phone;
        $register->Course_ID = $request->cmb_course;
        $result = $register->save();

        $getNameCourse = CourseHelper::getDetail($request->cmb_course);
        $this->nameCourse = $getNameCourse->Course_Name;

        if($result ){
            $data=['hoten'=>$request->txt_name,'parent'=>$request->txt_parent,'courseName'=>$getNameCourse->Course_Name, 'courseTuition' => $getNameCourse->Tuition];
            Mail::send('mail.mail',$data,function($msg){
                $msg->from('tducnguyen1997@gmail.com','LeoGo English Center');
                $msg->to($this->email)->subject('Xác nhận đăng kí học');
            });
//             $client = new Client(['timeout' => 20.0]);
// $options['query']['jwt'] = BaoKimAPI::getToken();

// $payload['mrc_order_id'] = "LZaBekUIdWzQ92PG";
// $payload['total_amount'] = "13";
// $payload['description'] = "uFjnVCgoSrI1ojFQ";
// $payload['url_success'] = "0DEYqmLgzsWviZiD";
// $payload['url_detail'] = "http://127.0.0.1:8000/home";
// $payload['lang'] = "SMHRHfGwwknks6ve";
// $payload['items'] = "3fTvjvszMa6ws9TR";
// $payload['bpm_id'] = "13";
// $payload['accept_bank'] = "9";
// $payload['accept_cc'] = "9";
// $payload['accept_qrpay'] = $getNameCourse->Tuition;
// $payload['webhooks'] = "N5nzVz4J3BW4wB41";
// $payload['customer_email'] = $this->email;
// $payload['customer_phone'] = $request->txt_phone;
// $payload['customer_name'] = $request->txt_name;
// $payload['customer_address'] = $request->txt_address;
// $options['form_params'] = $payload;

// $response = $client->request("POST", "https://api.baokim.vn/payment/api/v4/order/send", $options);
// echo "Response status code: " . $response->getStatusCode();
// echo "Response data: ". $response->getBody()->getContent();
            Alert::success('Success Message', 'Optional Title')->persistent('Close');
            Alert::success('Good job!');
            return redirect()->route('getHome');
        } else{

            return redirect()->back()->with('errorLists', trans('Faill !!! '));
        }

        // return redirect()->route('getHome');
    }

    public function getDetail($slug, $id){
        $getDetail = CourseHelper::getDetail($id);

        return view('clients.details.detail', compact('getDetail'));
    }

    public function getQuatily(){

        return view('clients.quality.quality');
    }

    public function getTeacher(){
        $getLectures = staff::where('Role_ID', 3)->get();

        return view('clients.teacher.teacher', compact('getLectures'));
    }

    public function getNews(){
        $getNews = ClientHelper::getNews();
        // dd($getNews);

        return view('clients.news.news', compact('getNews'));

    }

    public function getNewsDetail($slug, $id){
        $getNewsDetail = ClientHelper::getNewsDetail($id);
        $getNewsLimit =ClientHelper::getNewsLimit($id);

        return view('clients.news.newsDetail', compact('getNewsDetail', 'getNewsLimit'));
    }

    public function getEventClient(){
        $getEventClient = events::all();
// dd($getEventClient);
        return view('clients.events.event', compact('getEventClient'));
    }

    public function getEventDetail($slug, $id){
        $getDetail = EventsHelper::getDetail($id);
        // dd($getDetail);
        $getEventDetails = EventsHelper::getEventDetails($id);
        // $url = $getEventDetails
// dd($getDetail, $getEventDetails);
        return view('clients.events.eventDetail', compact('getDetail', 'getEventDetails'));
    }
}
