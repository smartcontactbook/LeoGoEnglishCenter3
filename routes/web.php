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
Auth::routes();

Route::get('/', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('/', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin'], function (){
	Route::get('index', ['as '=> 'getIndex', 'uses' => 'HomeController@getIndex']);
	// START LECTURER MANAGEMENT
	Route::resource('lecturer', 'LecturersController');
	Route::post('updateLecturer/{id}', ['as' => 'postUpdateLecturer', 'uses' => 'HomeController@postUpdateLecturer']);
	// END LECTURER MANAGEMENT

	// START COURSE MANAGEMENT
	Route::resource('course', 'CourseController');
	// END COURSE MANAGEMENT 

	// START SCORE MANAGEMENT
	Route::resource('score', 'ScoreController');
	//Route::post('scoreClass', ['as' => 'postScore', 'uses' => 'AjaxController@postScore']);
	Route::get('scoreOfClass', ['as' => 'fetch_data_index', 'uses' => 'ScoreAjaxController@index']);
	Route::get('scoreClass', ['as' => 'getChirlden', 'uses' => 'ScoreAjaxController@getChirlden']);
	// Route::get('/scoreOfClass/fetch_data/{id}', ['as' => 'fetch_data', 'uses' => 'ScoreAjaxController@fetch_data']);
	//Route::get('/scoreOfClass', 'ScoreAjaxController@index');
	// Route::get('scoreOfClass/{id}', ['as' => 'fetch_data', 'ScoreAjaxController@fetch_data']);
	Route::post('scoreOfClass/add_data', 'ScoreAjaxController@add_data')->name('ScoreAjax.add_data');
	Route::post('scoreOfClass/update_data', 'ScoreAjaxController@update_data')->name('ScoreAjax.update_data');
	Route::post('scoreOfClass/delete_data', 'ScoreAjaxController@delete_data')->name('ScoreAjax.delete_data');
	// END SCORE MANAGEMENT 

	// START CLASS MANAGEMENT
	Route::resource('classRoom', 'ClassController');
	Route::get('setSchedule', ['as' => 'getSetSchudule', 'uses' => 'HomeController@getSetSchudule']);
	Route::post('addSchedule', ['as' => 'postAddSchedule', 'uses' => 'HomeController@postAddSchedule']);
	Route::post('addTemChildrenClass', ['as' => 'postTemChildrenClass', 'uses' => 'HomeController@postTemChildrenClass']);
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

	// Wait Class MANAGEMENT
	Route::resource('wait', 'WaitClassController');
	Route::post('watingClass', ['as' => 'postWaitingClass', 'uses' => 'AjaxController@postWaitingClass']);
	// END Wait Class MANAGEMENT

	// START CALENDER MANAGEMENT
	Route::resource('calender', 'CalenderController');
	// END CALENDER MANAGEMENT 
	// 
	Route::get('profile', ['as' => 'getProfile', 'uses' => 'LoginController@getProfile']);

	Route::post('profile',['as'=>'postProfile','uses'=>'LoginController@postProfile']);
	Route::post('changePassword',['as'=>'postChangePasswork','uses'=>'LoginController@postChangePasswork']);
});
