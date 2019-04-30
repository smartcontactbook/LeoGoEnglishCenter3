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
	Route::get('LevelOfCourse/{id}', ['as' => 'getLevelOfCourse', 'uses' => 'AjaxController@getLevelOfCourse']);
	Route::post('LevelOfCourse/update_data', ['as' => 'update_data_level', 'uses' => 'AjaxController@update_data_level']);
	// END COURSE MANAGEMENT 

	// START CLASS MANAGEMENT
	Route::resource('classRoom', 'ClassController');
	Route::get('setSchedule', ['as' => 'getSetSchudule', 'uses' => 'HomeController@getSetSchudule']);

	Route::get('schedules', ['as' => 'getSchedules', 'uses' => 'HomeController@getSchedules']);
	Route::get('historyStudent/{id}', ['as' => 'getHistoryStudent', 'uses' => 'HomeController@getHistoryStudent']);
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

	Route::get('DelTemSchedule/{id}',['as'=>'postDelTemSchedule','uses'=>'HomeController@postDelTemSchedule']);
	Route::post('DelTemChildren',['as'=>'postDelTemChildren','uses'=>'HomeController@postDelTemChildren']);

	Route::post('/ajax/Schedule', array(
	  'uses'  =>  'AjaxController@loadTemSchedule'
	));



	Route::get('StudentOfClass/{id}', ['as' => 'getStudentOfClass', 'uses' => 'AjaxController@getStudentOfClass']);
	Route::get('ScoreOfStudent/{id}', ['as' => 'getStudentOfClass', 'uses' => 'AjaxController@getStudentOfClass']);
	Route::post('StudentOfClass/update_data', ['as' => 'update_data', 'uses' => 'AjaxController@update_data']);
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
	Route::get('studentOfWaitingClass/{id}', ['as' => 'getStudentOfWaitingClass', 'uses' => 'AjaxController@getStudentOfWaitingClass']);
	// END Wait Class MANAGEMENT

	// START CALENDER MANAGEMENT
	Route::resource('calender', 'CalenderController');
	// END CALENDER MANAGEMENT 
	// 
	Route::get('profile', ['as' => 'getProfile', 'uses' => 'LoginController@getProfile']);

	Route::post('profile',['as'=>'postProfile','uses'=>'LoginController@postProfile']);
	Route::post('changePassword',['as'=>'postChangePasswork','uses'=>'LoginController@postChangePasswork']);

	Route::get('event', ['as' => 'getEvents', 'uses' => 'EventsController@getEvents']);
	Route::get('addEvent', ['as' => 'getAddEvent', 'uses' => 'EventsController@getAddEvent']);
	// getAddEvent
	Route::post('upload', ['as' => 'postImages', 'uses' => 'EventsController@postImages']);
});

Route::get('home', ['as' => 'getHome', 'uses' => 'ClientController@getHome']);
Route::post('registerOnline', ['as' => 'postRegisterOnline', 'uses' => 'ClientController@postRegisterOnline']);

Route::get('detail/{id}', ['as' => 'getDetail', 'uses' => 'ClientController@getDetail']);
Route::get('quatily', ['as' => 'getQuatily', 'uses' => 'ClientController@getQuatily']);
Route::get('teacher', ['as' => 'getTeacher', 'uses' => 'ClientController@getTeacher']);

