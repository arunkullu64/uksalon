<?php

class Business extends Eloquent {

	protected $fillable = ['user_id','type_id','name','old_booking_style','signup_reason','email','website','description','image','phone_number','extra_image'];

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
        return $this->hasOne('Venue');
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

    public function full_address(){
        return urlencode("{$this->venue->address}, {$this->venue->city}, {$this->venue->state}, {$this->venue->country}");
    }


    public function get_extra_images(){
        $images = json_decode($this->extra_image,true);

        if(is_array($images)){

            foreach($images as $key=>$img){
                $images[$key] = Helper::salon_other_url($this->id,$img);
            }

            return $images;
        }
        else
            return false;
    }

    public function profile_pic(){
        return Helper::salon_profile_url($this->image);
    }

    public function remove_extra_image($del_key=0)
    {
        $images = json_decode($this->extra_image,true);

        if(is_array($images)){

            foreach($images as $key=>$img){
                if($del_key==$key)
                {
                    $file = Helper::salon_other_path().$this->id.'/'.$img;

                    if(file_exists($file))
                        unlink($file);
                    unset($images[$key]);
                }
            }

            $this->extra_image = json_encode($images);
            $this->save();

            return true;
        }
        else
            return false;
    }
}