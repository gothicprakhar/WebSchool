<?php

class StudentController extends \BaseController {


    public function showStudent()
	{

        $data['flag'] = 0;

        $colid = Auth::user()->collegeid;
        $classes = Classes::where('collegeid', '=', $colid)->get();

        $data['class'] = array();
        $i = 0;

		return View::make('pages.student', ['data' => $data]);
	}

    public function createStudent()
    {
        $input = Input::all();

        if (Input::hasFile('profilepic'))
        {
           $input['profilepic']= $this->filestore(Input::file('profilepic'));
        }
        $input['dob'] = date('Y-m-d H:i:s', strtotime(Input::get('dob')));

       $input['collegeid']=Auth::user()->collegeid;
       $input['collegename']=Admin::where('collegeid','=',Auth::user()->collegeid)->first()->collegename;




        //$input['collegeid']="dummy";
        //$input['collegename']="dummy";
        $user = new User;
        $user->email=$input['email'];
        $user->password=Hash::make($input['password']);
        $user->collegeid=$input['collegeid'];
        $user->flag=3;
        $user->save();
        $input['loginid']=$user->id;
        $removed=array('_token','password','cpassword');
         foreach( $removed as $k )
           {   unset($input[$k]);
            }


         Student::saveFormData($input);
          return $input;

    }

    public function filestore($file)
    {
     $destinationPath= "/assets/images/student";
     $extension = $file->getClientOriginalExtension();
     $filename = str_random(4).".{$extension}";
     //$size = $file->getSize();
     $upload_success = $file->move(public_path().'/'.$destinationPath, $filename);
     $url=$destinationPath.'/'. $filename;
      return $url;
      //echo $upload_success;

    }




}
