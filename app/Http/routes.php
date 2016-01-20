<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::group(['middleware' => 'cors','prefix' => 'api/v1'], function(){
	Route::get('allvenues', function(){
    	return App\Venue::with('type','city','features')->get();
	});

	Route::resource('posts','ApiPostController');
	Route::resource('venues','ApiVenueController');
});

Route::resource('posts','PostController');
Route::resource('venues','VenueController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


