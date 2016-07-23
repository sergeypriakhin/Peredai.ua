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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', 'Controller@index');

// registration
// Route::get('/registration', 'Controller@registration');

// Delivery
Route::group(['prefix' => 'delivery'], function()
{

	Route::get('/', 'DeliveryController@index');

	Route::get('/show/{id}', ['middleware' => 'auth', 'uses' => 'DeliveryController@show']);

	Route::get('/add', 'DeliveryController@create');
	
	Route::post('/add/store', ['middleware' => 'auth', 'uses' => 'DeliveryController@store']);

});

// Trip
Route::group(['prefix' => 'trip'], function()
{

	Route::get('/', 'TripController@index');

	// Route::get('/show/{id}', 'TripController@show');
	Route::get('/show/{id}',['middleware' => 'auth', 'uses' => 'TripController@show']);

	Route::get('/add', 'TripController@create');
	
	Route::post('/add/store', ['middleware' => 'auth', 'uses' => 'TripController@store']);

});


// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();

Route::get('/home', 'HomeController@index');
