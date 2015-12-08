<?php

class TeacherController extends \BaseController {




    public function createTeacher()
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


    public function showTeacher()
	{
        $data = array();

        $colid = Auth::user()->collegeid;
        $classes = Classes::where('collegeid', '=', $colid)->get();
        $data['class'] = [];
        $i = 0;
        for($i=0;$i<sizeof($classes);$i++){
             $data['class'][$i]['id'] = $classes[$i]->id;
            $data['class'][$i]['name'] = $classes[$i]->classname;
        }

		return View::make('pages.teacher')->with('data', $data);
	}

    public function getTeachersData($classid)
    {
        $colid = Auth::user()->collegeid;
        $teachers = Teacher::whereRaw('collegeid = ? and classid = ?', array($colid, $classid))->get();


        $data['teacher'] = [];
        $i = 0;
        for($i=0;$i<sizeof($teachers);$i++){
             $data['teacher'][$i]['pic'] = $teachers[$i]->profilepic;
             $data['teacher'][$i]['name'] = $teachers[$i]->name;
             $data['teacher'][$i]['email'] = $teachers[$i]->email;
             $data['teacher'][$i]['phone'] = $teachers[$i]->phone;
        }
        return json_encode($data['teacher']);
    }
}





