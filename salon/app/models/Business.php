<?php

class Business extends Eloquent {

	protected $fillable = ['user_id','type_id','name','old_booking_style','signup_reason'];

	protected $table = 'business';

	public function owner()
    {
       return $this->belongsTo('User');
    }

    public function service_groups()
    {
        return $this->hasMany('ServiceGroup','business_id');
    }

    public function business_type()
    {
        return $this->hasOne('BusinessType','type_id');
    }

    public function venue()
    {
        $venue = Venue::where('business_id','=',$this->id)->first();

        return $venue;
    }
    
    public function user_booking()
    {
        $venue = UserBooking::where('business_id','=',$this->id)
                            ->where('service_id','=',$this->service_id)
                            ->first();

        return $venue;
    }

    public function service(){
        return $this->hasMany('Services');
    }

    public function getUser(){
        return User::where('id','=',$this->user_id)->first();
    }
}