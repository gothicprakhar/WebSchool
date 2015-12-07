<?php

class TeacherController extends BaseController {

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

    public function registerTeacher()
    {
        $input = Input::all();

        if (Input::hasFile('profilepic'))
        {
           $input['profilepic']= $this->filestore(Input::file('profilepic'));
        }

       $input['collegeid']=Auth::user()->collegeid;
       $input['collegename']=Admin::where('collegeid','=',Auth::user()->collegeid)->first()->collegename;

        //$input['collegeid']="dummy";
        //$input['collegename']="dummy";
        $user = new User;
        $user->email=$input['email'];
        $user->password=Hash::make($input['password']);
        $user->collegeid=$input['collegeid'];
        $user->flag=2;
        $user->save();
        $input['loginid']=$user->id;
        $removed=array('_token','password','cpassword');
         foreach( $removed as $k )
           {   unset($input[$k]);
            }


         Teacher::saveFormData($input);
          return $input;

    }



    public function filestore($file)
    {
     $destinationPath= "/assets/images/teacher";
     $extension = $file->getClientOriginalExtension();
     $filename = str_random(4).".{$extension}";
     //$size = $file->getSize();
     $upload_success = $file->move(public_path().'/'.$destinationPath, $filename);
     $url=$destinationPath.'/'. $filename;
      return $url;
      //echo $upload_success;

    }

}
