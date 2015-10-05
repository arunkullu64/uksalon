<?php

class Services extends Eloquent {
	protected $fillable = ['title','service_group_id','business_id','service_category_id','duration','price','image','description'];

	protected $table = 'services';

	public static $rules = array(
        'business_id'     			=> 'required',
        'service_group_id'          => 'required',
        'service_category_id'       => 'required',
    );

    public function service_group(){
    	return $this->belongsTo('ServiceGroup','service_group_id','id');
    }

}