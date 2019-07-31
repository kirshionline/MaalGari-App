<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_details;

class driver_detailsController extends Controller
{
   

     public function AddDriver(Request $request){


     	 //return $request->all();

     	$driver_details= new driver_details;
     	$driver_details->corporate=$request->input('corporate');
     	$driver_details->firstname=$request->input('firstname');
     	$driver_details->lastname=$request->input('lastname');
     	$driver_details->gender=$request->input('gender');
     	$driver_details->email=$request->input('email');
     	$password = $request->input('password'); 
        $hashed_password = Hash::make($password);
     	$driver_details->password=$hashed_password;
     	$driver_details->contactnumber=$request->input('contactnumber');
     	$driver_details->plate_no=$request->input('plate_no');
     	$driver_details->brand=$request->input('brand');
     	$driver_details->color=$request->input('color');
     	$driver_details->address=$request->input('address');
     	if($request->hasfile('profile_picture')) 
			{ 
			  $file = $request->file('profile_picture');
			  $extension = $file->getClientOriginalExtension(); // getting image extension
			  $profile_picture =time().'.'.$extension;
			  $file->move(public_path().'/upload/', $profile_picture);
			}
	    $driver_details->profile_picture=$profile_picture;
	   	if($request->hasfile('car_image')) 
			{ 
			  $file = $request->file('car_image');
			  $extension = $file->getClientOriginalExtension(); // getting image extension
			  $car_image =time().'.'.$extension;
			  $file->move(public_path().'/upload/', $car_image);
			}
		 $driver_details->car_image=$car_image;
		 $driver_details->paypal_email=$request->input('paypal_email');
		 $driver_details->vehicle_type=$request->input('vehicle_type');

		 if ($driver_details->save()) {
		 	
		 	  return back()->with('message','Successfully Added!!');
		 }

	


     }













}
