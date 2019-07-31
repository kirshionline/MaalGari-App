<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\demourl;


class demourlcontroller extends Controller
{
    


    public function demo(Request $req){


    		
    		$data=demourl::create($req->all());

    	    return $data;



    }






}




