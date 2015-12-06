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
Route::get('/dashboard', function()
{
	return View::make('pages.dashboard');
});
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
