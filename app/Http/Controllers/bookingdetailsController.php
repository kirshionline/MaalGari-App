<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\bookingdetails;
use App\stops;

class bookingdetailsController extends Controller
{
   



	public function addbookingdetails(Request $request){

      $lastbooking = bookingdetails::orderBy('id', 'desc')->first();
        $Generation_id=0;
        if ($lastbooking) {
            
            $Generation_id=$lastbooking->id;
        }

        else{

            $Generation_id=0;
        }
        $pickup_location=$request->input('pickup_location');
        $pickup_address=$pickup_location['pickup_address'];
        $pickup_lat=$pickup_location['pickup_lat'];
        $pickup_long=$pickup_location['pickup_long'];
        $user_id=$request->input('user_id');
        $request["booking_id"]='MUA'.str_pad($Generation_id + 1, 6, "0", STR_PAD_LEFT);
        $request["pickup_address"] =$pickup_address;
        $request["pickup_lat"] = $pickup_lat;
        $request["pickup_long"] =$pickup_long;
        //get 
     
           $stops_array=$request->input('stops');

        // create
        $add_bookingdetails=bookingdetails::create($request->all());

        if ($add_bookingdetails) {

               $data = $request->input();
               $stops_array=$data['stops'];

            foreach ($stops_array as $value) {

                  $user_id=$request->input('user_id');
                    $stop_address=$value['stop_address'];
                    $stop_lat=$value['stop_lat'];
                    $stop_long=$value['stop_long'];
             
                    $insert_data_stops[] =['booking_id'=>$add_bookingdetails->booking_id,'stop_address'=>$stop_address, 'stop_lat'=>$stop_lat, 'stop_long'=>$stop_long,'user_id'=>$user_id];

            }

     
              $bookings_data=DB::table('stops')->insert($insert_data_stops);

                
              if ($bookings_data) {

                    return response()->json(array('status' =>true,'success' =>$bookings_data,'message' => "insert successful"));
              
              }

            
        }


    }




}
