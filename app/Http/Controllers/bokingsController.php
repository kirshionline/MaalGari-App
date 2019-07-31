<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\bookings;
use App\stops;
use Redirect,Response;
use Illuminate\Support\Facades\Hash;
use Crypt;

class bokingsController extends Controller
{
  

	 public function addbooking(Request $request){

         //return $request->all();
         // $data = $request->input();
          $bookings=new bookings;
          $bookings->userid=$request->input('userid');

         if ($bookings->save()) {
       
       	   // return response()->json(array('success' => true, 'last_insert_id' => $bookings->id), 200);
         	 $last_insert_id= $bookings->id;

         	  $data = $request->input();
         
	          $Arraydata=$data['data'];

	          foreach ($Arraydata as  $value) {
	          	
	          	  $user_id=$data['userid'];
	          	  $title=$value['title'];
	          	  $latitude=$value['latitude'];
	          	  $longitude=$value['longitude'];
	      

	          	 $insert_data[] =['booking_id'=>$last_insert_id,'title'=>$title, 'latitude'=>$latitude, 'longitude'=>$longitude,'userid'=>$user_id];

	          }
	          //print_r($insert_data);
	         // die();
	          
	          $bookings_data=DB::table('stops')->insert($insert_data);
	            
	          if ($bookings_data) {

	          	  return response()->json(array('status' => 200,'success' =>$bookings_data,'message' => "insert successful"));
	          
	          }

        }

}


public function getbookingdetails($id){

		  $getuser = stops::where('booking_id',$id)->get();

    	  return Response::json($getuser);

}

 public function getall(){


 	$map=stops::all();

 	$output=[];
 	$count=0;

 	foreach ($map as $value) {

 		$output[]=[$value->stop_address,(float)$value->stop_lat,(float)$value->stop_long,$count++];

 	}

     //return Response::json($output);



	return view('demo', compact('output'));



 }       






}
