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

Route::get('/admin/monitoring/gatekeeper','PagesController@getGatekeeper');
Route::get('/','PagesController@getGatekeeper');

Route::get('/admin/qr_system/qr_generator','PagesController@getQRGenerator');
Route::get('/admin/qr_system/qr_scanner','PagesController@getQRScanner');
Route::get('/admin/monitoring/statistics','PagesController@getStatistics');
Route::get('/admin/user_access/user_registration','PagesController@getRegistration');


































#Route::get('/', function () {
#    return view('pages/gatekeeper');
#});

#Route::get('index','PagesController@getIndex')

/*
//Routing by group
Route::group(['prefix' => 'admin'], function (){
	Route::get('monitoring/gatekeeper', function (){
		return view('pages/gatekeeper');
	});
	Route::get('monitoring/statistics', function (){
		return view('pages/statistics');
	});
	Route::get('user_access/user_registration', function (){
		return view('pages/user_registration_form');
	});

	Route::get('qr_system/qr_generator', function (){
		return view('pages/qr_generator');
	});

	Route::get('qr_system/qr_scanner', function (){
		return view('pages/qr_scanner');
	});

});

*/

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

