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

<<<<<<< HEAD
=======
Route::get('/dashboard',array(
    'as' =>'dashboard',
    'uses'=>'HomeController@showDashboard'
));

Route::get('/student',array(
    'as' =>'student',
    'uses' =>'StudentController@showStudent'
));

Route::get('/teacher',array(
    'as' =>'teacher',
    'uses' =>'TeacherController@showTeacher'
));

Route::get('/parent',array(
    'as' =>'parent',
    'uses' => 'ParentController@showParent'
));

Route::get('/user',array(
    'as' =>'user',
    'uses' => 'UserController@showUser'
));

Route::get('/subject',array(
    'as' =>'subject',
    'uses' => 'SubjectController@showSubject'
));

Route::get('/grade',array(
    'as' =>'grade',
    'uses' => 'GradeController@showGrade'
));

Route::get('/exam',array(
    'as' =>'exam',
    'uses' => 'ExamController@showExam'
));

Route::get('/section',array(
    'as' =>'section',
    'uses' => 'SectionController@showSection'
));

Route::get('/abc', function() {
    return View::make('pages.abc');
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
    return Auth::user()->collegeid;
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
>>>>>>> origin/prakhar
