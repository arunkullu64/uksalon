<?php

class BusinessType extends Eloquent {

	protected $fillable = ['type'];

	protected $table = 'business_type';

	public static function select_type(){
		return BusinessType::orderBy('type', 'asc')->lists('type','id');
	}

}