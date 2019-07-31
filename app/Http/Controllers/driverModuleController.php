<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Hash;
use App\driver_detail;
use App\bank_detail;
use App\driver_vehicle;
use App\driver_licence;
use App\passport_and_residence;
use App\criminal_record_details;
use App\company_info;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class driverModuleController extends Controller {

    public function driver_detail() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            $driver_detail = driver_detail::all();
            return view('view_drivers', compact('driver_detail'));
        } else {
            return redirect('/');
        }
    }
    public function view_driver_detail($driver_id) {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            //$driver_id=$request->input('driver_id');
            $driver_bank_detail = bank_detail::where('driver_id', $driver_id)->get();
            $driver_vehicle = driver_vehicle::where('driver_id', $driver_id)->get();
            $driver_licence = driver_licence::where('driver_id', $driver_id)->get();
            $passport_and_residence = passport_and_residence::where('driver_id', $driver_id)->get();
            $criminal_record_details = criminal_record_details::where('driver_id', $driver_id)->get();
            $company_info = company_info::where('driver_id', $driver_id)->get();
            return view('driverinfo', compact('driver_bank_detail', 'driver_vehicle', 'driver_licence', 'passport_and_residence', 'criminal_record_details', 'company_info'));
        } else {
            return redirect('/');
        }
    }
    public function Vechiclesimage_download($imageId) {
        $driver_vehicle = driver_vehicle::where('driver_id', $imageId)->firstOrFail();
        $path = public_path() . '/upload/' . $driver_vehicle->registration_certificate;
        return response()->download($path, $driver_vehicle->original_filename, ['Content-Type' => $driver_vehicle->mime]);
    }
    public function licence_image_download($imageId) {
        $driver_licence = driver_licence::where('driver_id', $imageId)->firstOrFail();
        $path = public_path() . '/upload/' . $driver_licence->licence_image;
        return response()->download($path, $driver_licence->original_filename, ['Content-Type' => $driver_licence->mime]);
    }
    public function cirminal_certificate_image_download($imageId) {
        $criminal_record_details = criminal_record_details::where('driver_id', $imageId)->firstOrFail();
        $path = public_path() . '/upload/' . $criminal_record_details->cirminal_certificate;
        return response()->download($path, $criminal_record_details->original_filename, ['Content-Type' => $criminal_record_details->mime]);
    }
    public function cardimage_download($imageId) {
        $company_info = company_info::where('driver_id', $imageId)->firstOrFail();
        $path = public_path() . '/upload/' . $company_info->id_card_image;
        return response()->download($path, $company_info->original_filename, ['Content-Type' => $company_info->mime]);
    }
    public function bankdetail_status(Request $request) {
        //return $request->all();
        $bank_staus = $request->input('bankdetail_status_selected');
        $driver_id = $request->input('driver_id');
        $update = DB::table('bank_detail')->where('driver_id', $driver_id)->update(['status' => $bank_staus]);
        if ($update) {
            return redirect()->back();
        }
    }
    public function drivervehicle_status(Request $request) {
        $vehicle_staus = $request->input('drivervehicle_status_selected');
        $driver_id = $request->input('driver_id');
        $update = DB::table('driver_vehicle')->where('driver_id', $driver_id)->update(['status' => $vehicle_staus]);
        if ($update) {
            return redirect()->back();
        }
    }
    public function driver_licence(Request $request) {
        $driverlicence_status = $request->input('driver_licence_selected');
        $driver_id = $request->input('driver_id');
        $update = DB::table('driver_licence')->where('driver_id', $driver_id)->update(['status' => $driverlicence_status]);
        if ($update) {
            return redirect()->back();
        }
    }
    public function residence_status(Request $request) {
        // return  $request->all();
        $pass_status = $request->input('residence_status_selected');
        $driver_id = $request->input('driver_id');
        $updatepassport = DB::table('passport_and_residence')->where('driver_id', $driver_id)->update(['status' => $pass_status]);
        if ($updatepassport) {
            return redirect()->back();
        }
    }
    public function criminal_status(Request $request) {
        $criminal_status = $request->input('criminal_status_selected');
        $driver_id = $request->input('driver_id');
        $updatecriminal = DB::table('criminal_record_details')->where('driver_id', $driver_id)->update(['status' => $criminal_status]);
        if ($updatecriminal) {
            return redirect()->back();
        }
    }
    public function company_status(Request $request) {
        //return $request->all();
        $company_status = $request->input('company_status_selected');
        $driver_id = $request->input('driver_id');
        $updatecompany = DB::table('company_info')->where('driver_id', $driver_id)->update(['status' => $company_status]);
        if ($updatecompany) {
            return redirect()->back();
        }
    }
    public function getstatus_count(Request $request) {
        $count = 0;
        $driver_id = $request->input('driver_id');
        $dbname = $request->input('dbname');
        $driver_id_get = DB::table('bank_detail')->where('driver_id', $driver_id)->value('status');
        if ($driver_id_get == 1) {
            $count++;
        }
        $driver_vehicle_get = DB::table('driver_vehicle')->where('driver_id', $driver_id)->value('status');
        if ($driver_vehicle_get == 1) {
            $count++;
        }
        $driver_licence_get = DB::table('driver_licence')->where('driver_id', $driver_id)->value('status');
        if ($driver_licence_get == 1) {
            $count++;
        }
        $passport = DB::table('passport_and_residence')->where('driver_id', $driver_id)->value('status');
        if ($passport == 1) {
            $count++;
        }
        $criminal_record_details_get = DB::table('criminal_record_details')->where('driver_id', $driver_id)->value('status');
        if ($criminal_record_details_get == 1) {
            $count++;
        }
        $company_info_get = DB::table('criminal_record_details')->where('driver_id', $driver_id)->value('status');
        if ($company_info_get == 1) {
            $count++;
        }
        if ($count >= 5) {
            $driver_status = 1;
            $dbname = $request->input('dbname');
            $selectedvalue = $request->input($dbname . '_selected');
            if ($selectedvalue == 1) {
                $update = DB::table('driver_detail')->where('driver_id', $driver_id)->update(['status' => 1]);
                $name = 'Raja';
                $status='active';
                Mail::to('rajakanmani18@gmail.com')->send(new SendMailable($name,$status));
            } else {
                $update = DB::table('driver_detail')->where('driver_id', $driver_id)->update(['status' => 2]);
                $name = 'Raja';
                $status='none';
                Mail::to('rajakanmani18@gmail.com')->send(new SendMailable($name,$status));
            }
            return $this->$dbname($request);
        } else if ($count <= 5) {
            $driver_status = 0;
            $dbname = $request->input('dbname');
            $update = DB::table('driver_detail')->where('driver_id', $driver_id)->update(['status' => 0]);
            return $this->$dbname($request);
        }
    }

    public function driver_login(Request $request) {
        $email_id = $request->input('email_id');
        $password = $request->input('password');
        $driver_login = DB::select('select * from driver_detail where email_id = ? and password =? and status=?', [$email_id, $password, 1]);
        $login = count($driver_login);
        if ($login == 1) {
            return response()->json(array('status' => true, 'response' => $login));
        } else {
            return response()->json(array('status' => false, 'response' => 0));
        }
    }
    public function mailsend(Request $request) {
        $email_id = $request->input('email_id');
        $text = $request->input('text');
        $name = $text;
        Mail::to($email_id)->send(new SendMailable($name)); 

        // $instance = driver_vehicle::select('created_at')->where('status', 1)->orderBy('created_at', 'desc')->first();


    }



}
