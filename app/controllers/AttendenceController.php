<?php

class AttendenceController extends BaseController {

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
        $this->createNewMonth('july');
		return 'success';
	}



    public function createNewMonth($tablename)
    {
        if(Schema::hasTable($tablename))
            return 1;
        else
        {
            Schema::create($tablename,function($table)
             {
                 $table->increments('id');
                 $table->integer('studentid');

                 for($i=1;$i<31;$i++)
                 {
                     $colname='day'.$i;
                     $table->boolean($colname);
                  }
             });
        }




    }




}
