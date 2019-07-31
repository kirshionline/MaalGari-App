<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_detail;
use App\bank_detail;
use App\driver_location;
use App\driver_vehicle;
use App\driver_licence;
use App\passport_and_residence;
use App\criminal_record_details;
use App\company_info;

class admin_driver_controller extends Controller
{
    
    
    public function add_admin_driver_detail(Request $request)
    {
        
        
        if ($request->hasfile('profile')) {
            $file            = $request->file('profile');
            $extension       = $file->getClientOriginalExtension(); 
            $profile_picture = rand(1, 999). '.' . $extension;
            $file->move(public_path() . '/upload/', $profile_picture);
        }
        
        
        
        if ($request->hasfile('registration')) {
            $file                     = $request->file('registration');
            $extension                = $file->getClientOriginalExtension();
            $registration_certificate = rand(2, 999). '.' . $extension;
            $file->move(public_path() . '/upload/', $registration_certificate);
        }
        
        if ($request->hasfile('licence')) {
            $file          = $request->file('licence');
            $extension     = $file->getClientOriginalExtension(); 
            $licence_image = rand(3, 999). '.' . $extension;
            $file->move(public_path() . '/upload/', $licence_image);
        }
        

        
        if ($request->hasfile('cirminal')) {
            $file                 = $request->file('cirminal');
            $extension            = $file->getClientOriginalExtension(); 
            $cirminal_certificate = rand(4, 999) . '.' . $extension;
            $file->move(public_path() . '/upload/', $cirminal_certificate);
        }
        
        if ($request->hasfile('id_card')) {
            $file          = $request->file('id_card');
            $extension     = $file->getClientOriginalExtension(); // getting image extension
            $id_card_image = rand(5, 999). '.' . $extension;
            $file->move(public_path() . '/upload/', $id_card_image);
        }
        $request['id_card_image'] = $id_card_image;
        $request['licence_image'] = $licence_image;
        $request['registration_certificate'] = $registration_certificate;
        $request['cirminal_certificate'] = $cirminal_certificate;
        $request['profile_picture'] = $profile_picture;




        $email_id  = $request->input('email_id');
        $location  = $request->input('location');
        $latitude  = $location['latitude'];
        $longitude = $location['longitude'];
        
        $mobilenumber         = $request->input('mobilenumber');
        $request['latitude']  = $latitude;
        $request['longitude'] = $longitude;
        
        $email_id_get       = driver_detail::where('email_id', $email_id)->get();
        $mobilenumber_get   = driver_detail::where('mobilenumber', $mobilenumber)->get();
        $count_email        = count($email_id_get);
        $count_mobilenumber = count($mobilenumber_get);
        $email_count        = 0;
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
            $addDriver            = driver_detail::create($request->all());
            $driver_id            = $addDriver->id;
            $request['driver_id'] = $driver_id;
            
            if ($addDriver) {
                
                $driver_location      = driver_location::create($request->all());
                $bank_detail          = bank_detail::create($request->all());
                $add_vehicle          = driver_vehicle::create($request->all());
                $add_driverLicence    = driver_licence::create($request->all());
                $addPassportResidence = passport_and_residence::create($request->all());
                $add_add_criminal     = criminal_record_details::create($request->all());
                $company_info         = company_info::create($request->all());
                
                if ($driver_location && $bank_detail && $add_vehicle && $add_driverLicence && $addPassportResidence && $add_add_criminal && $company_info) {
                    
                    return redirect('driver')->with('status', 'inserted driver details');
                }
            }
        } else {
            
            return redirect('driver')->with('status', 'User already exist');
        }
        
    }
    
    
}
