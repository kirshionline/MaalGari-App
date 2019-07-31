<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_vehicle;

class driver_vehicleController extends Controller
{

		public function addDriver_vehicle(Request $request){


		  // return $request->all();

    	   $add_vehicle = driver_vehicle::create($request->all());

    	   if ($add_vehicle) {
    	   	  
    	   	   return response()->json(array(
                'status' => 1,
                'message' => "vehicle register successful",
                'data'=>$add_vehicle
              
            ));
    	  }

    }


}
