<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function registeradmin()
    {
        //$input = new Array();
        $input = Input::all();
        $user = new User;
        $user->email=$input['email'];
        $user->password=Hash::make($input['password']);
        $user->collegeid=$input['collegeid'];
        $user->flag=1;
        $user->save();
        $input['loginid']=$user->id;

        $removed=array('_token','password','cpassword');
         foreach( $removed as $k )
           {   unset($input[$k]);

             }

         Admin::saveFormData($input);

           return $input;

    }



}
