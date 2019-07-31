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


Route::get('/register', function () {
    return view('register');
});





Route::get('/driver_history', function () {
    return view('driver_history');
});






Route::get('/managers', function () {
    return view('view_managers');
});










 // Route::get('/view_vehicle', function () {
 //    return view('vehicle_view');
 // });



 







 // Route::get('/pakage_list', function () {
 //    return view('pakage_list');
 // });
 
 


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


// Route::get('/providers', function () {
//     return view('view_drivers');
// });
Route::get('/vechicle_download/{imageId}', 'driverModuleController@Vechiclesimage_download');


Route::get('/licence_image_download/{imageId}', 'driverModuleController@licence_image_download');



Route::get('/cirminal_certificate_image_download/{imageId}', 'driverModuleController@cirminal_certificate_image_download');






Route::post('/adddriver_detail', 'admin_driver_controller@add_admin_driver_detail');






Route::get('/cardimage_download/{imageId}', 'driverModuleController@cardimage_download');


Route::get('/providers','driverModuleController@driver_detail');


Route::get('/viewdriver_info/_token/{driver_id}','driverModuleController@view_driver_detail');


/*======================Update_satus==================*/

Route::post('/bankdetail_status', 'driverModuleController@bankdetail_status');

Route::post('/getstatus_count', 'driverModuleController@getstatus_count');



Route::post('/drivervehicle_status', 'driverModuleController@drivervehicle_status');

Route::post('/driver_licence', 'driverModuleController@driver_licence');

Route::post('/residence_status', 'driverModuleController@residence_status');

Route::post('/criminal_status', 'driverModuleController@criminal_status');


Route::post('/company_status', 'driverModuleController@company_status');

/*======================Update_satus==================*/

Route::get('/join', 'driverModuleController@join');



Route::get('/', 'HomeController@index');
Route::get('/vehicle','HomeController@add_vehicle');
Route::get('/dashboard','HomeController@dashboard');
Route::get('/transactions','HomeController@transactions');
Route::get('/addpackage','HomeController@addpackage');
Route::get('/addpassenger','HomeController@addpassenger');
Route::get('/driver','HomeController@driver');
Route::get('/mapview','HomeController@mapview');
Route::get('/availability','HomeController@availability');

Route::get('/getall','bokingsController@getall');

    //return view('availability_map');






Route::post('/login_admin','loginController@adminlogin');



Route::get('/logout','loginController@logout');

Route::get('package_delete/{delete_id}','packageController@package_delete');

Route::get('/packageview','packageController@viewpackage' );

Route::post('/addpackage', 'packageController@addpackage');
//Route::resource('Passengers', 'PassengerController');

Route::post('/addvehicle', 'vehicle_typesController@add_vehicle');
Route::get('vehicle_delete/{delete_id}','vehicle_typesController@vehicledelete');




 Route::get('/vehiclelist','vehicle_typesController@viewvehicle');

 Route::get('/viewvehicle_type','vehicle_typesController@viewvehicle_type');

Route::get('userview/{id}','PassengerController@viewuser');
Route::get('user_delete/{delete_id}','PassengerController@delete_user');


Route::post('/addpassenger', 'PassengerController@addpassenger');
Route::get('/viewpassenger', 'PassengerController@viewpassenger');



Route::post('/add_driver','driver_detailsController@AddDriver');



Route::get('/gmaps', 'mapController@gmaps');


Route::post('/try', 'mapController@get');


   
   Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
