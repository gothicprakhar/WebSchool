<?php

class StudentController extends \BaseController{



        public function createStudent(){

            $validator=$this->validateStudent(Input::all());
            if ($validator->fails()) {
                $messages = $validator->messages();
                return Redirect::to('studentform')->withErrors($messages)->withInput(Input::except('password', 'password_confirmation'));
            }

            $input = Input::all();
            if (Input::hasFile('profilepic'))
            {
           $input['profilepic']= $this->filestore(Input::file('profilepic'));
        }
            //$input['dob'] = date('m-d-Y H:i:s', strtotime(Input::get('dob')));
            $input['collegename']=Admin::where('collegeid','=',Auth::user()->collegeid)->first()->collegename;
            $input['collegeid']=Auth::user()->collegeid;
            //$input['collegeid']="dummy";
            //$input['collegename']="dummy";
            $user = new User;
            $user->email=$input['email'];
            $user->password=Hash::make($input['password']);
            $user->collegeid=$input['collegeid'];
            $user->flag=3;
            $user->save();
            $input['loginid']=$user->id;
            $removed=array('_token','password','password_confirmation');

            foreach( $removed as $k )
                unset($input[$k]);

            Student::saveFormData($input);
            return Redirect::to('student');
        }

        public function showStudent(){
        $data = array();
        $colid = Auth::user()->collegeid;
        $classes = Classes::where('collegeid', '=', $colid)->get();
        $data['class'] = [];
        $i = 0;
        for($i=0;$i<sizeof($classes);$i++){
             $data['class'][$i]['id'] = $classes[$i]->id;
            $data['class'][$i]['name'] = $classes[$i]->classname;
        }
		return View::make('pages.student')->with('data', $data);
	    }


        public function getStudentsData($classid){
        $colid = Auth::user()->collegeid;
        $students = Student::whereRaw('collegeid = ? and classid = ?', array($colid, $classid))->get();
        $data['student'] = [];
        $i = 0;
        for($i=0;$i<sizeof($students);$i++){
             $data['student'][$i]['pic'] = $students[$i]->profilepic;
             $data['student'][$i]['name'] = $students[$i]->name;
             $data['student'][$i]['rollno'] = $students[$i]->roll_no;
             $data['student'][$i]['phone'] = $students[$i]->phone;
        }
        return json_encode($data['student']);
        }

        public function filestore($file) {
        $destinationPath= "/assets/images/student";
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(4).".{$extension}";
        //$size = $file->getSize();
        $upload_success = $file->move(public_path().'/'.$destinationPath, $filename);
        $url=$destinationPath.'/'. $filename;
        return $url;
        //echo $upload_success;

        }


        public function validateStudent()
        {

            $rules = array(
            'name' => 'Required|Min:3|Max:80|Alpha',
            'email'     => 'Required|Between:3,64|Email|Unique:users',
            'gender' => 'Required',
            'roll_no' =>'Required|Numeric|Digits_Between:10,15',
            'dob' =>'date_format:"m/d/Y"',
            'phone' =>'Required|Numeric|Digits_Between:10,14',
            'fathername' => 'Required|Min:3|Max:80|Alpha',
            'mothername' => 'Required|Min:3|Max:80|Alpha',
            'fphone' => 'Required|Numeric|Digits_Between:10,14',
            'femail' => 'Required|Between:3,64|Email',
            'religion' => 'Required|Min:3|Max:80|Alpha',
            'password'  => 'Required|AlphaNum|Between:4,8|Confirmed',
            'password_confirmation'=>'Required|AlphaNum|Between:4,8',
            'profilepic' =>'Image',
             );

             $validator= Validator::make(Input::all(), $rules);
             return $validator;



        }

}
