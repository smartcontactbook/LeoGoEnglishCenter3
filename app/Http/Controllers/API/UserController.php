<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\staff; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\User; 
use App\Helpers\CalendarHelper;
// use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use Hash;
use Session;
use App\PasswordReset;
class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){
    	if(Auth::guard('staff')->attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::guard('staff')->user();
            if($user->Role_ID == 1){
            	// $success['token'] =  $user->createToken('MyApp')->accessToken; 
				$user = Auth::guard('staff')->user()->id;
				// $test = CalendarHelper::getCalendarOfLecturer($user);
				$success['token'] =  CalendarHelper::getTemDayTimeStudys();
            	return response()->json(['Staff' => $success], $this->successStatus); 
            } else{
            	if($user->Role_ID == 3){
            		$success['token'] =  $user->createToken('MyApp')->accessToken; 

            		return response()->json(['Lecturer' => $success], $this->successStatus); 
            	} else{
            		if($user->Role_ID == 4){
						$success['token'] =  $user->createToken('MyApp')->accessToken; 

	            		return response()->json(['Tutor' => $success], $this->successStatus); 
            		} else {
            			$success['token'] =  $user->createToken('MyApp')->accessToken; 

	            		return response()->json(['User' => $success], $this->successStatus); 
            		}
            	}
            }
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function changePassword(Request $request){
        // $email = $request->email;
        // // $uers = User::where('email', '')->firstOrFail();

        // return response()->json($email);
        // // $user = User::where('email', $request->email)->firstOrFail();
        // // $passwordReset = PasswordReset::updateOrCreate([
        // //     'email' => $user->email,
        // // ], [
        // //     'token' => Str::random(60),
        // // ]);
        // // if ($passwordReset) {
        // //     $user->notify(new ResetPassword($passwordReset->token));
        // // }
  
        // // return response()->json([
        // // 'message' => 'We have e-mailed your password reset link!'
        // // ]);
        // if(Auth::user()->check()){
        $user = User::where('id', 2)->firstOrFail();

        if($user){
            if(Hash::make(request('oldPassword') == $user->password)){
                if(request('repPassword') == request('newPassword')){
                    // $user = User::findOrFail(Auth::user()->id);
                    $user->password = Hash::make(request('newPassword'));
                    $result = $user->save();
                    $success['token'] =  $user->save();
                    return response()->json(['Upadte success' => $success], $this->successStatus);
                } else{
                    return response()->json(['error'=>'Unauthorised'], 401);
                }
            } else {
                 return response()->json(['error'=>'Unauthorised'], 401);
            }
        }
        else {
            return response()->json(['error'=>'You faill'], 401);
        }
        // }
    }


    public function changePersonalInformation(){
        $user = User::where('id', 2)->firstOrFail();
        if($user){
            if(Hash::make(request('oldPassword') == $user->password)){
                if(request('repPassword') == request('newPassword')){
                    // $user = User::findOrFail(Auth::user()->id);
                    $user->fullName = request('fulName');
                    $user->email = request('email');
                    $user->Birth_Day = request('Birth_Day');
                    $user->Phone_Number = request('Phone_Number');
                    $user->Gender = request('Gender');
                    $user->Address = request('Address');
                    $user->avatar = request('avatar');
                    $result = $user->save();
                    $success['token'] =  $user->save();
                    return response()->json(['Upadte success' => $success], $this->successStatus);
                } else{
                    return response()->json(['error'=>'Unauthorised'], 401);
                }
            } else {
                 return response()->json(['error'=>'Unauthorised'], 401);
            }
        }
        else {
            return response()->json(['error'=>'You faill'], 401);
        }
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this->successStatus); 
    } 
}
