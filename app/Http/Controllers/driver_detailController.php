<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_detail;
use App\driver_location;
class driver_detailController extends Controller {
    public function adddriver_detail(Request $request) {
        $email_id = $request->input('email_id');
        $location = $request->input('location');
        $latitude = $location['latitude'];
        $longitude = $location['longitude'];

        $mobilenumber = $request->input('mobilenumber');
        $request['latitude']=$latitude;
        $request['longitude']=$longitude;
       
        $email_id_get = driver_detail::where('email_id', $email_id)->get();
        $mobilenumber_get = driver_detail::where('mobilenumber', $mobilenumber)->get();
        $count_email = count($email_id_get);
        $count_mobilenumber = count($mobilenumber_get);
        $email_count = 0;
        $mobilenumber_count = 0;
        if ($count_email == 0) {
            $email_count = 0;
        } else {
            $email_count = 2;
        }
        if ($count_mobilenumber == 0) {
            $mobilenumber_count = 0;
        } else {
            $mobilenumber_count = 2;
        }
        if ($email_count == 0 && $mobilenumber_count == 0) {
            $addDriver = driver_detail::create($request->all());
             $driver_id = $addDriver->id;
             $request['driver_id']=$driver_id;
            $usersession_id = $addDriver->usersession_id;
            if ($addDriver) {

                $driver_location=driver_location::create($request->all());
        
                if ($driver_location) {
                    return response()->json(array('status' => 0, 'driver_id' => $driver_id, 'message' => "register successful", 'usersession_id' => $usersession_id));
                }
            }
        } else {
            return response()->json(array('status' => 0, 'message' => "User already exist"));
        }
    }
}
