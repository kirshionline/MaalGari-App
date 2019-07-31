<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\map;

class mapController extends Controller
{
   


	 public function gmaps()
    {
    	$locations = DB::table('map')->get();

    	return view('locations',compact('locations'));
    }









}
