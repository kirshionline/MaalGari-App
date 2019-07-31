<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\passport_and_residence;

class passport_and_residenceController extends Controller
{
  

	  public function addPassportResidence(Request $request){

	  	 //return $request->all();
	  	 $addPassportResidence=passport_and_residence::create($request->all());


	  	 if ($addPassportResidence) {
	  	 	 return response()->json(array(
                'status' => 1,
                'message' => "passport residence record register successful",
                'data'=>$addPassportResidence
              
            ));

	  	 }


	  }


}
