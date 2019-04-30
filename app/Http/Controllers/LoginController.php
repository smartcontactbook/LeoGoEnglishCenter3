<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Helpers\LoginHelper;
use Auth;
use Session;
use Hash;
use App\lecturer;
use App\tutor;
use App\children;
use App\staff;
use App\role;
use App\Helpers\StaffHelper;
class LoginController extends Controller
{
    public function getLogin(){
    	
    if (Auth::guard('staff')->check()) {
            // nếu đăng nhập thàng công thì 
            // dd(Auth::guard('staff')->check());
            return redirect()->route('getIndex');
        } else {
            return view('admin.login.login');
        }
    		
    	
    }
    public function postLogin(Request $reques){
        $credentials = array('email'=>$reques->txt_email,'password'=>$reques->txt_password);
        // dd($credentials);
        $staff = staff::where('email','=',$reques->txt_email)->first();
        // $lecturer = lecturer::where('email','=',$reques->txt_email)->first();
        // $tutor = tutor::where('Email','=',$reques->txt_email)->first();
        // dd($staff, $lecturer, $tutor);
        // dd($reques->txt_password);
        // dd($staff);
        if($staff){

            if(Auth::guard('staff')->attempt($credentials)){
                 // dd(Auth::guard('staff'));
// dd(Auth::guard('lecturer')->user()->First_Name);
                    if(Auth::guard('staff')->user()->Role_ID == 1)
                	   return redirect()->route('lecturer.index');
                    else
                        if(Auth::guard('staff')->user()->Role_ID == 2)
                            return redirect()->route('lecturer.index');
                        else
                            if(Auth::guard('staff')->user()->Role_ID == 3)
                                return redirect()->route('lecturer.index');
                            else
                                if(Auth::guard('staff')->user()->Role_ID == 4)
                                    return redirect()->route('lecturer.index');
                                else
                                    return redirect()->route('lecturer.index');
            }
            else{
                    // dd("false");
                    return redirect()->back()->with(['flag'=>'danger','message'=>'Login unsuccessful']);
                }
        } else{
 		     return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
		        }
           
    }
    public function getLogout(){
		Auth::guard('staff')->logout();
        return redirect()->route('getLogin');
    }

    public function getProfile(){

        return view('admin.login.profile');
    }

    public function postProfile(Request $request){

        try {
            $new_avatar = StaffHelper::updateAvatar($request);
            $staff = staff::findOrFail($request->id_staff);
            $staff->Description = $request->txt_description;
            $staff->First_Name = $request->txt_FirstName;
            $staff->Last_Name = $request->txt_LastName;
            $staff->Email = $request->txt_email;
            $staff->Birth_Day = $request->txt_date;
            $staff->Phone_Number = $request->txt_phone;
            $staff->Gender = $request->txt_gender;
            $staff->Address = $request->txt_address;
            $staff->avatar = $new_avatar;
            $result = $staff->save();
            if($result) {
                $request->session()->flash('messageUpadte', 'Upadte success');
            } else {
                $request->session()->flash('errorLists', 'There was an error');
            }
        } catch (Exception $e) {
            $request->session()->flash('errorLists', $e->getMessage());
        }

        return redirect()->route('getProfile');
    }

    public function postChangePasswork(Request $request){
        if (Auth::guard('staff')->check()) {
        // dd(Hash::make($request->txt_OldPassword) ,Auth::guard('staff')->user()->password);
        if(Hash::make($request->txt_OldPassword) == Auth::guard('staff')->user()->password){
            if($request->txt_NewPassword == $request->txt_RepPassword){
                $staff = staff::findOrFail($request->id_staff);
                $staff->password = Hash::make($request->txt_NewPassword);
                $result = $staff->save();
                if($result) {
                    $request->session()->flash('messageUpadte', 'Upadte success');
                } else {
                    $request->session()->flash('errorLists', 'There was an error');
                }
            }
            else{
                $request->session()->flash('errorLists', 'There was an error');
            }
        }
        else{
            $request->session()->flash('errorLists', 'There was an error');
        }
    }

        return redirect()->route('getProfile');
    }
}