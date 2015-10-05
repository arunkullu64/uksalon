<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    protected $fillable = array('fname', 'lname', 'email','password','role');
    //validation rules//
    
    public static $rules = array(
        'fname'             => 'required',                        // just a normal required validation
        'email'            => 'required|email|unique:users',     // required and must be unique in the ducks table
        'password'         => 'required|min:6',
    );
    
    public function profile()
    {
        return $this->hasOne('Profile');
    }
    
    public function role()
    {
        return $this->belongsTo('Roles','role','rolRoleNo');
    }


    public function full_name(){
        return ucfirst($this->fname.' '.$this->lname);
    }

    public function is_client(){
        return ($this->role == CLIENT );
    }

    public function business(){

        if($this->is_client()){
            return $this->hasOne('Business');
        }
        else
        {
            return false;
        }
         
    }
}
