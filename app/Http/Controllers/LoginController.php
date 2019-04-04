<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Helpers\LoginHelper;
use Auth;
use App\lecturer;
use App\tutor;
use App\children;
use App\staff;
use App\role;

class LoginController extends Controller
{
    public function getLogin(){
    	if(Auth::check()){

    		return redirect()->route('lecturer.index');

    	} else{
    		$getUser = LoginHelper::getUsers();
    		// dd($getUser);
    		return view('admin.login.login');
    	}
    	
    }

    public function postLogin(LoginRequest $reques){
        $credentials = array('Email'=>$reques->txt_email,'password'=>$reques->txt_password);
        // dd($credentials);
        $staff = staff::where([
                ['Email','=',$reques->txt_email]
            ])->first();
        $lecturer = lecturer::where([
            ['Email','=',$reques->txt_email]
        ])->first();
        $tutor = tutor::where([
        	['Email','=',$reques->txt_email]
        ])->first();
        // dd($user);
        if($staff == true and $lecturer == false and $tutor == false){
            if(Auth::attempt($credentials)){

            	return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            } else{

                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        } else{
        	if($staff == false and $lecturer == true and $tutor == flase){
        		if(Auth::attempt($credentials)){

        			return redirect()->back()->with(['flag' => 'success', 'message' => 'Dang nhap thanh cong']);
        		} else{

        			return redirect()->back()->with(['flag' => 'danger', 'message' => 'Dang nhap khong thanh cong']);
        		}
        	} else{
        		if($staff == false and $lecturer == false and $tutor == true){
        			if(Auth::attempt($credentials)){

        				return redirect()->back()->with(['flag' => 'success', 'message' => 'Dang nhap thanh cong']);
        			} else {

        				return redirect()->back()->with(['flag' => 'danger', 'message' => 'Dang nhap khong thanh cong']);
        			}
        		} else{

		           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
		        }
        	}
        }    
    }

    public function getLogout(){
		Auth::logout();
        return redirect()->route('getLogin');
    }
}
