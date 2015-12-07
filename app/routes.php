<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',  function()
{
	return View::make('hello');
});
Route::get('/dashboard',array('as' =>'dashboard','uses'=>'HomeController@showdashboard'));
Route::get('/student',array('as' =>'student','uses' =>'StudentController@showstudent'));
Route::get('/teacher',array('as' =>'teacher','uses' =>'TeacherController@showteacher'));
Route::get('/parent',array('as' =>'parent','uses' => 'ParentController@showparent'));
Route::get('/user',array('as' =>'user','uses' => 'UserController@showuser'));
Route::get('/subject',array('as' =>'subject','uses' => 'SubjectController@showsubject'));
Route::get('/grade',array('as' =>'grade','uses' => 'GradeController@showgrade'));
Route::get('/exam',array('as' =>'exam','uses' => 'ExamController@showexam'));

Route::get('/student', function()
{
	return View::make('pages.student');
});
Route::get('/teacher', function()
{
	return View::make('pages.teacher');
});
Route::get('/user', function()
{
	return View::make('pages.user');
});
Route::get('/exam', function()
{
	return View::make('pages.exam');
});
Route::get('/grade', function()
{
	return View::make('pages.grade');
});
Route::get('/parent', function()
{
	return View::make('pages.parent');
});
Route::get('/section', function()
{
	return View::make('pages.section');
});
Route::get('/subject', function()
{
	return View::make('pages.subject');
});
Route::get('/mam', array('as' => 'profile', function()
{
    return View::make('hello');
   
}));
