<?php

class ServiceCategory extends Eloquent {
	protected $fillable = ['name','description'];
	
	protected $table = 'service_category';
}