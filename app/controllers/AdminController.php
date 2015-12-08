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

        $input = Input::all();
        if (Input::hasFile('profilepic'))
        {
           $input['profilepic']= $this->filestore(Input::file('profilepic'));
        }
        if (Input::hasFile('collegelogo'))
        {
           $input['collegelogo']= $this->filestore(Input::file('collegelogo'));
        }

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



    public function filestore($file)
    {
     $destinationPath= "/assets/images/admin";
     $extension = $file->getClientOriginalExtension();
     $filename = str_random(4).".{$extension}";
     //$size = $file->getSize();
     $upload_success = $file->move(public_path().'/'.$destinationPath, $filename);
     $url=$destinationPath.'/'. $filename;
      return $url;
      //echo $upload_success;

    }

}
