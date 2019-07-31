<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*=================driver_detailController==========================*/
Route::post('/driver_detail', 'driver_detailController@adddriver_detail');
/*=========================addcompany_info====================*/
Route::post('/addcompany_info', 'companyinfoController@addcompany_info');

/*============================diver_vehicleController===================*/
Route::post('/add_drivervehicle', 'driver_vehicleController@addDriver_vehicle');

/*===========================driver_licence==========================*/
Route::post('/add_driverLicence', 'driver_licenceController@add_driverLicence');

/*=======================add_DriverCertificateController======================*/

Route::post('/add_Certificate', 'driver_certificateController@add_DriverCertificateController');


/*=======================add_DriverCertificateController======================*/



/*=================criminal_record_detailsController=======================*/

Route::post('/addCriminal_record', 'criminal_record_detailsController@add_criminal');


/*=================criminal_record_detailsController=================*/




/*=============================passport_and_residenceController=================*/


Route::post('/addPassportResidence', 'passport_and_residenceController@addPassportResidence');


/*========================passport_and_residenceController================*/


/*=====================bank_detailController============================*/

Route::post('/addbank_detail', 'bank_detailController@addbank_detail');


/*=====================bank_detailController============================*/




/*============================driver_login=====================*/

Route::post('/driver_login', 'driverModuleController@driver_login');



/*========================driver_login====================*/



/*=====================addbookingdetails===========================*/

Route::post('/addbookingdetails', 'bookingdetailsController@addbookingdetails');

/*=====================addbookingdetails=============*/



/*=====================driverLocation_update===========================*/

Route::post('/driverLocation_update', 'driver_locationController@driverLocation_update');


/*=====================driverLocation_update=============*/

Route::post('/mailsend', 'driverModuleController@mailsend');


Route::get('/getall', 'bokingsController@getall');





Route::post('/url', 'demourlcontroller@demo');




Route::post('/bookings', 'bokingsController@addbooking');

Route::get('/getbookingdetails/{id}', 'bokingsController@getbookingdetails');

Route::post('/try_add', 'bokingsController@testadd');

Route::post('/register', 'registerController@register');

Route::post('/login', 'registerController@login_user');

Route::post('/numberlogin', 'registerController@numberlogin');

Route::post('/facebooklogin', 'registerController@facebooklogin');

Route::get('/getaddress', 'registerController@getaddress');


Route::post('/fb_sec', 'registerController@fb_sec');


Route::post('/profileupdate', 'registerController@profile_update');

 Route::get('/viewvehicle_type','vehicle_typesController@viewvehicle_type');