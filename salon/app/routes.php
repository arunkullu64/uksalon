<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::post('/signup',array('before' => 'csrf','uses' =>'UsersController@store'));

Route::post('/login',array('before' => 'csrf','uses' => 'UsersController@login'));

Route::get('/users/logout',array('uses' => 'UsersController@logout'));

Route::get('/profile',array('before'=>'auth','uses' => 'ProfileController@index'));

Route::post('/update',array('before'=>'auth','uses' => 'UsersController@update_profile'));

route::post('/password',array('before' => 'csrf|auth','uses' => 'UsersController@change_password'));

Route::post('/search',array('before' => 'csrf' , 'uses' => 'UsersController@search'));

Route::get('/search',function(){
	return Redirect::to('/');
});