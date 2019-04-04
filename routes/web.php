<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'getIndex',
	'uses'=>'HomeController@getIndex'
]);

// Route::get('lecturers',[
// 	'as'=>'getLecturers',
// 	'uses'=>'HomeController@getLecturers'
// ]);

// Route::get('addLecturers',[
// 	'as'=>'getAddLecturers',
// 	'uses'=>'HomeController@getAddLecturers'
// ]);

// START LECTURER MANAGEMENT
Route::resource('lecturer', 'LecturersController');
Route::post('updateLecturer/{id}',['as'=>'postUpdateLecturer','uses'=>'HomeController@postUpdateLecturer']);
// END LECTURER MANAGEMENT

// START COURSE MANAGEMENT
Route::resource('course', 'CourseController');
// END COURSE MANAGEMENT 

// START CLASS MANAGEMENT
Route::resource('classRoom', 'ClassController');
Route::get('setSchedule',[
	'as'=>'getSetSchudule',
	'uses'=>'HomeController@getSetSchudule'
]);
Route::post('addSchedule',[
	'as'=>'postAddSchedule',
	'uses'=>'HomeController@postAddSchedule'
]);
Route::post('addTemChildrenClass', [
	'as' => 'postTemChildrenClass',
	'uses' => 'HomeController@postTemChildrenClass'
]);

Route::post('ClassOfCourses1', [
	'as' => 'getClassOfCourses1',
	'uses' => 'HomeController@getClassOfCourses1'
]);

Route::post('addAll', [
	'as' => 'postAddAll',
	'uses' => 'HomeController@postAddAll'
]);
Route::get('childrenOfClass/{id}', [
	'as' => 'getChildrenClass',
	'uses' => 'HomeController@getChildrenClass'
]);

Route::get('ChildrenClass', [
	'as' => 'getChildrenClass',
	'uses' => 'HomeController@getChildrenClass'
]);

Route::post('DelTemSchedule',['as'=>'postDelTemSchedule','uses'=>'HomeController@postDelTemSchedule']);
Route::post('DelTemChildren',['as'=>'postDelTemChildren','uses'=>'HomeController@postDelTemChildren']);

Route::post('/ajax/Schedule', array(
  'uses'  =>  'AjaxController@loadTemSchedule'
));

// END CLASS MANAGEMENT
 
// START RIGISTER MANAGEMENT
Route::resource('register', 'RegisterController');
Route::post('updateRegister',['as'=>'postUpdateRegister','uses'=>'HomeController@postUpdateRegister']);
Route::post('addChildren',['as'=>'postAddChildren','uses'=>'HomeController@postAddChildren']);
Route::post('delChildren',['as'=>'postDelRegister','uses'=>'HomeController@postDelRegister']);
//

// START TUTOR MANAGEMENT
Route::resource('tutor', 'TutorController');


//Route::post('updateTutor/{id}',['as'=>'postUpdateTutor','uses'=>'HomeController@postUpdateTutor']);
// END TUTOR MANAGEMENT

// START STAFF MANAGEMENT
Route::resource('staff', 'StaffController');
// END STAFF MANAGEMENT


// START CALENDER MANAGEMENT
Route::resource('calender', 'CalenderController');
// END CALENDER MANAGEMENT 

// START LOGIN/LOGOUT
Route::get('login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);

// Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
// 	Route::get('/', function() {
// 		return view('admin.home');
// 	});
// });
// END LOGIN/LOHOUT



