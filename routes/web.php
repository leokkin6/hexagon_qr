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
// */
 
#Upon Landing Page
// Route::get('/','PagesController@getGatekeeper');
Route::get('/','MainController@index');
Route::get('/{id}','HashMonitoringController@getInformation');

#QR Generator Routes
Route::get('/qr/generator','PagesController@getQRGenerator');
Route::get('/qr/generator/getQRValueGen','QRGeneratorController@getQRValueGen');
Route::get('/qr/generator/getQRValueReg','QRGeneratorController@getQRValueReg'); #QR Gen for Registration

#QR Scanner Routes
Route::get('/qr/scanner/posts','QRScannerController@insertQRData');
Route::get('/qr/scanner','PagesController@getQRScanner');

#User Registration Routes
Route::resource('/security/registration','RegistrationController');	
Route::get('/security/registration','PagesController@getRegistration');	

#Employee Registration
Route::group(['prefix' => 'employees'], function() {
  Route::get('/profile', 'EmployeeController@index');
  Route::match(['get', 'post'], 'create', 'EmployeeController@create');
  Route::match(['get', 'put'], 'update/{id}', 'EmployeeController@update');
  Route::get('show/{id}', 'EmployeeContoller@show');
  Route::delete('delete/{id}', 'EmployeeController@delete');
});



#User Login
Route::resource('/admin', 'EmployeeController');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/main', 'MainController@main');
Route::get('main/logout', 'MainController@logout');



#Monitoring
	#Gatekeeper Routes
// Route::get('/monitoring/gatekeeper/fetchUnit','GatekeeperController@fetchUnit');
Route::get('/monitoring/gatekeeper/fetchData','GatekeeperController@fetchData');
Route::get('/monitoring/gatekeeper','PagesController@getGatekeeper');
	#Statistics Routes
Route::get('/monitoring/statistics','PagesController@getStatistics');

































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


// Route::get('/dump', function() {
// 	$user = DB::select("SELECT EmployeeName 
// 						FROM EmployeeLogs
// 						WHERE ID = 1 ");
// 	dd($user);
// });
 
// Route::get('/dump1', function() {
// 	$user = DB::selectOne("SELECT * 
// 						FROM EmployeeLogs
// 						WHERE ID = 1");

// 	$result = DB::select("SELECT *
// 						FROM (SELECT TOP 5 Row_Number() 
// 							OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, *
// 						FROM EmployeeLogs) A 
// 						--WHERE ROWNUMBER = 1");
// 	dd($result);
// 	// return $result->EmployeeName;
// });

// Route::get('/dump2', function(){
// 	// DB::insert("INSERT INTO EmployeeLogs (UnitCompany, EmployeeID, EmployeeName,DateEntered,Status,Hash) VALUES (?,?,?,?,?,?)", 
//  //    		array('001-73','00150-1799','Kim Domingo','01/01/01',1,'123'));
// 	// return 'Success';
// 	if(request()->ajax()){
//     	$code = $_REQUEST['code'];

//     	DB::insert("INSERT INTO scanner_logs (DateEntered,Hash) VALUES (GETDATE(),?)", 
//     		array($code));
    	
//     	return $code;
// 		}
		
// });