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
    if (Auth::check()) {
        return Redirect::route('dashboard')
            ->with('flash_notice', 'You are successfully logged in.');
    }
       return View::make('login');
});

Route::get('/dashboard',array(
    'as' =>'dashboard',
    'uses'=>'HomeController@showDashboard'
))->before('auth');


Route::get('/student',array(
    'as' =>'student',
    'uses' =>'StudentController@showStudent'
))->before('auth');
Route::get('student-new', function(){

    return View::make('studentreg');
})->before('auth');

Route::get('/teacher',array(
    'as' =>'teacher',
    'uses' =>'TeacherController@showTeacher'
))->before('auth');
Route::get('/teacher-new', function(){

return View::make('teacherreg');
})->before('auth');

Route::get('/parent',array(
    'as' =>'parent',
    'uses' => 'ParentController@showParent'
))->before('auth');

Route::get('/user',array(
    'as' =>'user',
    'uses' => 'UserController@showUser'
))->before('auth');

Route::get('/subject',array(
    'as' =>'subject',
    'uses' => 'SubjectController@showSubject'
))->before('auth');

Route::get('/grade',array(
    'as' =>'grade',
    'uses' => 'GradeController@showGrade'
))->before('auth');

Route::get('/exam',array(
    'as' =>'exam',
    'uses' => 'ExamController@showExam'
))->before('auth');

Route::get('/section',array(
    'as' =>'section',
    'uses' => 'SectionController@showSection'
))->before('auth');








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
       return Redirect::route('dashboard');
    }

    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
});
Route::get('/foo', function() {
    $user = User::find(1);
    return Auth::user()->collegeid;
   // return trans('gre.welcome');






});

Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('login')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return "profile page";
}))->before('auth');

Route::get('admin-new', function(){

return View::make('register');
})->before('auth');
Route::post('register', ['uses' => 'AdminController@registeradmin','as' => 'register_action']);
Route::post('teacher', ['uses' => 'TeacherController@createTeacher','as' => 'teacher_action']);
Route::post('student', ['uses' => 'StudentController@createStudent','as' => 'student_action']);
Route::get('/testtable', ['uses' => 'AttendenceController@showWelcome','as' => 'table_action']);



// Functionality starts here
Route::get('/showstudents/{id}', 'StudentController@getStudentsData');
Route::get('/showteachers/{id}', 'TeacherController@getTeachersData');
Route::get('/showsubjects/{id}', 'SubjectController@getSubjectsData');
Route::get('/showparents/{id}', 'ParentController@getParentsData');

