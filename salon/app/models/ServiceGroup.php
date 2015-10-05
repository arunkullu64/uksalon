<?php

class ServiceGroup extends \Eloquent {
	protected $fillable = ['business_id', 'name'];

	protected $table = 'service_group';

	public static $rules = array(
        'business_id'     => 'required',                        // just a normal required validation
        'name'            => 'required',     // required and must be unique in the ducks table
    );

    public function business(){
    	return $this->belongsTo('Business');
    }

     public function services(){
    	return $this->hasMany('Services','service_group_id');
    }
}