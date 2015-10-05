<?php

Route::group(array('prefix' => '/business', 'before'=>'auth.guest'), function() {

	Route::get('/', 'ClientController@index');

	Route::get('/signup', 'ClientController@signup_form');

	Route::post('/signup',array('before' => 'csrf','uses' =>'ClientController@signup_store'));

	Route::get('/venue','ClientController@venue_form');

	Route::post('/venue',array('before' => 'csrf','uses' =>'ClientController@venue_store'));

	Route::get('/complete','ClientController@complete_form');

	Route::post('/complete',array('before' => 'csrf','uses' =>'ClientController@complete_store'));

});


Route::group(array('prefix' => '/business/dashboard', 'before'=>'auth.salonowner'), function() {

		Route::get('/', 'SalonDashboardController@index');

		Route::get('/menu', 'SalonDashboardController@list_menu');
		
		Route::post('/menu/save', array('before' => 'csrf','uses' =>'SalonDashboardController@save_menu'));

		Route::post('/ajax', 'SalonDashboardController@ajax');

		Route::get('/venue', 'SalonDashboardController@list_venue');

        Route::post('/venue/save', array('before' => 'csrf','uses' =>'SalonDashboardController@save_venue'));

        Route::post('/venue/images', array('before' => 'csrf','uses' =>'SalonDashboardController@extra_images'));
		
});





