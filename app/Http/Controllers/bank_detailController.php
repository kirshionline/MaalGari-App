<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\bank_detail;


class bank_detailController extends Controller
{



    public function addbank_detail(Request $request){


    	//return $request->all();
    	$bank_detail=bank_detail::create($request->all());

    	if ($bank_detail) {

    		 return response()->json(array(
                'status' => 1,
                'message' => " bank record register successful",
                'data'=>$bank_detail
              
            ));

    	}




    } 






}
