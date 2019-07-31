<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_licence;

class driver_licenceController extends Controller
{
    
	public function add_driverLicence(Request $request){


		//return $request->all();

		$add_driverLicence=driver_licence::create($request->all());

		if ($add_driverLicence) {
			
		    return response()->json(array(
                'status' => 1,
                'message' => "Licence register successful",
                'data'=>$add_driverLicence
              
            ));

		}


	}










}
