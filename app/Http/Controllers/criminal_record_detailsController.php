<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\criminal_record_details;


class criminal_record_detailsController extends Controller
{
    


	public function add_criminal(Request $request){


		//return $request->all();

		$add_add_criminal=criminal_record_details::create($request->all());

		if ($add_add_criminal) {

			 return response()->json(array(
                'status' => 1,
                'message' => "criminal record register successful",
                'data'=>$add_add_criminal
              
            ));

		}


	}






}
