<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_certificate;

class driver_certificateController extends Controller
{


	public function add_DriverCertificateController(Request $request){

		//return $request->all();

		$add_certifiacte=driver_certificate::create($request->all());

		if ($add_certifiacte){
			 return response()->json(array(
                'status' => 1,
                'message' => "certifiacte register successful",
                'data'=>$add_certifiacte
              
            ));

		}




	}



}
