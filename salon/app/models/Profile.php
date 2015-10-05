<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Profile extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profile';
    protected $fillable = array('gender', 'user_id', 'profile_name','postal_code','address','city','state','country','profile_pic');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    public function user()
    {
        return $this->hasOne('User');
    }

    public function profile_pic(){
        return Helper::user_profile_url($this->profile_pic);
    }
}
