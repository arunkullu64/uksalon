<?php

class Venue extends Eloquent {

	protected $fillable = ['business_id','address','city','state','country','phone_number','postal_code'];

	protected $table = 'venue';

	public function business()
    {
        return $this->belongsTo('Business');
    }
    
    public static function get_unique_city(){
        return Venue::distinct('city')->get();
    }
}