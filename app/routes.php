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
    /*$user = new User;
    $user->email="sun";
    $user->password=Hash::make("123456");
    $user->flag=1;
    $user->collegeid='abf--qw';
    $user->save();*/
   // $ide=Auth::user()->collegeid;
   // $admin = Admin::where('collegeid','=',Auth::user()->collegeid)->first()->collegename;
     $admin=Classm::where('collegeid','=','bt123');
    return $admin;


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

           //$user =User::where('password', '=', Input::get('password'))->first();
              // return $user;

      //return (string)Auth::attempt($user);
    if (Auth::attempt($user)) {
        //return Redirect::route('home') ->with('flash_notice', 'You are successfully logged in.');
       $user= Auth::user();
        return $user->email;
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
Route::get('register', function(){

return View::make('register');
});
Route::get('teacher', function(){

return View::make('teacherreg');
});
Route::get('student', function(){

    return View::make('studentreg');
});
Route::post('register', ['uses' => 'AdminController@registeradmin','as' => 'register_action']);
Route::post('teacher', ['uses' => 'TeacherController@registerTeacher','as' => 'teacher_action']);
Route::post('student', ['uses' => 'StudentController@registerStudent','as' => 'student_action']);
