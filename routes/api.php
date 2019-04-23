<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::get('reset-password', 'API\PasswordResetController@sendMail');
Route::post('register', 'API\UserController@register');

	Route::post('changePassword', 'API\UserController@changePassword');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('logout', 'API\UserController@logout');
	Route::get('details', 'API\UserController@details');


	Route::post('reset-password', 'API\PasswordResetController@sendMail');
	Route::put('reset-password/{token}', 'API\PasswordResetController@reset');
	// Route::post('create', 'API\PasswordResetController@create');
 //    Route::get('find/{token}', 'API\PasswordResetController@find');
 //    Route::post('reset', 'API\PasswordResetController@reset');
});

// Route::group([    
//     'namespace' => 'Auth',    
//     'middleware' => 'api',    
//     'prefix' => 'password'
// ], function () {    
//     Route::post('create', 'PasswordResetController@create');
//     Route::get('find/{token}', 'PasswordResetController@find');
//     Route::post('reset', 'PasswordResetController@reset');
// });

Route::post('create', 'PasswordResetController@create');
Route::get('apiCalender', 'API\ApiCalenderController@getCalenderOfUser');
Route::get('apiCourse', 'API\ApiCalenderController@getCourseOfUser');
Route::get('apiClassOfChildrens/{id}', 'API\ApiCalenderController@getClassOfChildrens');
Route::get('apiClass/{id}', 'API\ApiCalenderController@getClassOfCoursesDatail');
