<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Route::get('index','PagesController@getIndex')

//Routing by group
Route::group(['prefix' => 'admin'], function (){
	Route::get('dashboard', function (){
		return view('pages/index');
	});
	Route::get('registration', function (){
		return view('pages/user_registration_form');
	});
});

/*
//Routing 
Route::get('dashboard', function () {
	return "dashboard";
});

//Routing by group
Route::group(['prefix' => 'admin'], function (){
	Route::get('dashboard', function (){
		return "dashboard";
	});

	Route::get('shit', function (){
		return "shetness";
	});
});

*/

