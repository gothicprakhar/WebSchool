<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Student extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';
    public $timestamps = false;


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
    public static function saveFormData($data)
        {
            DB::table('students')->insert($data);
        }



    public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */


	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */



}
