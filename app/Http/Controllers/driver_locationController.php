<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_location;


class driver_locationController extends Controller
{
    


    public static function driverLocation_update(Request $request){


            date_default_timezone_set('Asia/Calcutta'); 
            $currentDateTime = date('Y-m-d H:i:s');

    		$driver_id=$request->input('driver_id');
    		$latitude=$request->input('latitude');
    		$longitude=$request->input('longitude');

    		 // $update_location = DB::table('driver_location')->where('driver_id', $driver_id)->update(['latitude' => $latitude, 'longitude' => $longitude,"updated_at"=>$currentDateTime]);

             
        
             $update_location=driver_location::where('driver_id','=',$driver_id)->update(['latitude' => $latitude, 'longitude' => $longitude,"updated_at"=>$currentDateTime]);

    		 if ($update_location==1){

    		   $driver_location = driver_location::all();
				  return response()->json(array('status' => 1, 'data'=>$update_location, 'message' => "updating.........."));
    		 }


    }



}
