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
// END CLASS MANAGEMENT

// START TUTOR MANAGEMENT
Route::resource('tutor', 'TutorController');
//Route::post('updateTutor/{id}',['as'=>'postUpdateTutor','uses'=>'HomeController@postUpdateTutor']);
// END TUTOR MANAGEMENT

// START STAFF MANAGEMENT
Route::resource('staff', 'StaffController');
// END STAFF MANAGEMENT

