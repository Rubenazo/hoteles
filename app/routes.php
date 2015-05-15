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

Route::get('/', function()
{
	$title = 'Home';
	return View::make('home')
	->with('title',$title);
});

Route::post('login','AuthController@getLogin');

Route::group(array('before' => 'auth'), function() {

	Route::get('admin/home','AdminController@showHome');
	Route::get('admin/newuser','AuthController@getRegister');
	Route::post('admin/newusesr','AuthController@postRegister');
	Route::get('admin/newhotel','AdminController@getHotel');
	Route::post('admin/newhotel','AdminController@postHotel');

	Route::get('client/home','UserController@showClientHome');

	Route::get('hotel/home','UserController@showHotelHome');
	Route::get('hotel/gallery','UserController@getGallery');
	Route::post('hotel/gallery','UserController@postGallery');

	Route::get('logout','AuthController@getLogout');
});

