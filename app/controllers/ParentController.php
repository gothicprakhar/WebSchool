<?php

class ParentController extends \BaseController {

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
  public function showParent()
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

		return View::make('pages.parent')->with('data', $data);
	}

    public function getParentsData($classid)
    {
       $colid = Auth::user()->collegeid;
        $students = Student::whereRaw('collegeid = ? and classid = ?', array($colid, $classid))->get();


        $data['student'] = [];
        $i = 0;
        for($i=0;$i<sizeof($students);$i++){
             $data['student'][$i]['fathername'] = $students[$i]->fathername;
             $data['student'][$i]['mothername'] = $students[$i]->mothername;
             $data['student'][$i]['fphone'] = $students[$i]->fphone;
             $data['student'][$i]['femail'] = $students[$i]->femail;
             $data['student'][$i]['name'] = $students[$i]->name;
        }
        return json_encode($data['student']);
    }
}
