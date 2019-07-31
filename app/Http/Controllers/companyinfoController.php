<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\company_info;

class companyinfoController extends Controller
{

    public function addcompany_info(Request $request){



          //return $request->all();

    	   $company_info = company_info::create($request->all());

    	   if ($company_info) {
    	   	  
    	   	   return response()->json(array(
                'status' => 1,
                'message' => "company info register successful",
                'data'=>$company_info
              
            ));
    	  }

    }

}
