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





Route::get('login', array('as' => 'login', function () {
    if (Auth::check()) {
        return Redirect::route('home')
            ->with('flash_notice', 'You are successfully logged in.');
    }
    return View::make('login');
}))->before('guest');

Route::post('login', function () {
      $user = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );


    if (Auth::attempt($user)) {

       $user= Auth::user();
        return $user->email;
    }

    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
});
Route::get('/foo', function() {
    $user = User::find(1);
    return $user;
});
Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('login')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return "profile page";
}))->before('auth');
Route::get('register', function(){

return View::make('register');
});
Route::post('register', ['uses' => 'AdminController@registeradmin','as' => 'register_action']);
