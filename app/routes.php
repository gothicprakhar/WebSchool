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


Route::get('/foo', function()
{
	//return View::make('home');
    $user = User::find(1);
    return $user->email;


});
Route::get('/mam', array('as' => 'profile', function()
{
    return View::make('hello');
   
}));





Route::get('/', array('as' => 'home', function () {
    return View::make('home');
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
        return Redirect::route('home')
            ->with('flash_notice', 'You are successfully logged in.');
    }

    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
});

Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('login')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return "profile page";
}))->before('auth');
