<?php

class TeacherController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
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





