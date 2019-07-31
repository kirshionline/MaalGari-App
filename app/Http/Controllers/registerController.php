<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\register;
use App\driver_location;
use Redirect, Response;


class registerController extends Controller {


    public function register(Request $request) {
        //return $request->all();
        $member = $request->input('member');
        $usersession_id = $request->input('usersession_id');
        $username = $member['username'];
        $firstname = $member['firstname'];
        $lastname = $member['lastname'];
        $email_id = $member['email_id'];
        $mobilenumber = $member['mobilenumber'];
        $dob = $member['dob'];
        $gender = $member['gender'];
        $address = $member['address'];
        $password = $member['password'];
        $request['username']=$username;
        $request['firstname']=$firstname;
        $request['lastname']=$lastname;
        $request['email_id']=$email_id;
        $request['mobilenumber']=$mobilenumber;
        $request['dob']=$dob;
        $request['gender']=$gender;
        $request['address']=$address;
        $request['password']=$password;
   
        $email_id_get = register::where('email_id', $email_id)->get();
        $mobilenumber_get = register::where('mobilenumber', $mobilenumber)->get();
        $usersession_id_get = register::where('usersession_id', $usersession_id)->get();
        $count_email = count($email_id_get);
        $count_mobilenumber = count($mobilenumber_get);
        $count_usersession_id = count($usersession_id_get);
        $email_count = 0;
        $mobilenumber_count = 0;
        $usersession_id_count = 0;
        $message = "";
        if ($count_email == 0) {
            $email_count = 2;
            $message = "email id already exist";
        } else {
            $email_count = 0;
        }
        if ($count_mobilenumber == 0) {
            $mobilenumber_count = 2;
            $message = "mobilenumber id already exist";
        } else {
            $mobilenumber_count = 0;
        }
        if ($count_usersession_id == 0) {
            $usersession_id_count = 2;
            $message = "usersession id id already exist";
        } else {
            $usersession_id_count = 0;
        }
        if ($email_count == 2 && $mobilenumber_count == 2 && $usersession_id_count == 2) {
            $email_count = 1;
            $mobilenumber_count = 1;
            $usersession_id_count = 1;
            $addregister=register::create($request->all());
            if ($addregister) {

               return response()->json(array('status' =>0,'user_id'=>$addregister->id, 'message' => "register successful"));

            }
        } else {
            return response()->json(array('status' => 0, 'message' => "User already exist"));
        }
    }

    
    public function login_user(Request $request) {
        $email_id = $request->input('email_id');
        $password = $request->input('password');
        $results = DB::select('select * from register where email_id = ? and password =?', [$email_id, $password]);
        if (count($results)){
            foreach ($results as  $value) {
               

                $res['id'] = $value->id;;
                $res['username'] = $value->username;
                $res['firstname'] =  $value->firstname;
                $res['lastname'] =  $value->lastname;
                $res['mobilenumber'] = $value->mobilenumber;
                $res['email_id'] =  $value->email_id;
                $res['dob'] =  $value->dob;
                $res['gender'] = $value->gender;
                $res['address'] =  $value->address;
                $res['password'] =  $value->password;
                $res['usersession_id'] =  $value->usersession_id;
                $data['status']=true;
                $data['response']=$res;
            
            }
            
            return $data;

        } else {
            return response()->json(array('status' => 0, 'message' => "incorrect username password"));
        }
    }
    public function numberlogin(Request $request) {
        $mobilenumber = $request->input('mobilenumber');
        $numberlogin = register::where('mobilenumber', $mobilenumber)->get();
        $numberlogin_count = count($numberlogin);
        if ($numberlogin_count == 1) {
            return response()->json(array('status' => 'success', 'message' => "login successful", 'data' => $numberlogin));
        } else {
            return response()->json(array('status' => false, 'message' => "mobilenumber not found"));
        }
    }
    public function facebooklogin(Request $request) {
        $email_id = $request->input('email_id');
        $email_id_get = register::where('email_id', $email_id)->get();
        $count_email = count($email_id_get);
        if ($count_email == 0) {
            $register = new register;
            $register->email_id = $email_id;
            if ($register->save()) {
                return response()->json(array('status' => 'success', 'message' => "register successful"));
            }
        } else {
            return response()->json(array('status' => 0, 'message' => "User already exist"));
        }
    }
    public function fb_sec(Request $request) {
        $usersession_id = $request->input('usersession_id');
        $email_id = $request->input('email_id');
        $email_id_get = register::where('email_id', $email_id)->get();
        $usersession_id_get = register::where('usersession_id', $usersession_id)->get();
        $count_email = count($email_id_get);
        $count_usersession = count($usersession_id_get);
        $email_count = 0;
        $usersession_count = 0;
        if ($count_email == 0) {
            $email_count = 2;
        } else {
            $email_count = 0;
        }
        if ($count_usersession == 0) {
            $usersession_count = 2;
        } else {
            $usersession_count = 0;
        }
        if ($email_count == 2 && $usersession_count == 2) {
            $register = new register;
            $register->email_id = $email_id;
            $register->usersession_id = $usersession_id;
            if ($register->save()) {
                return response()->json(array('status' => 'success', 'message' => "register successful"));
            }
        } else {
            return response()->json(array('status' => 0, 'message' => "User already exist"));
        }
    }
    public function profile_update(Request $request) {
        $member = $request->input('member');
        $username = $member['username'];
        $firstname = $member['firstname'];
        $lastname = $member['lastname'];
        $email_id = $member['email_id'];
        $mobilenumber = $member['mobilenumber'];
        $dob = $member['dob'];
        $gender = $member['gender'];
        $address = $member['address'];
        $password = $member['password'];
        $usersession_id = $request->input('usersession_id');
        $email_id_get = register::where('email_id', $email_id)->get();
        $mobilenumber_get = register::where('mobilenumber', $mobilenumber)->get();
        $count_email = count($email_id_get);
        $count_mobilenumber = count($mobilenumber_get);
        $email_count = 0;
        $mobilenumber_count = 0;
        $message = "";
        if ($count_email == 0) {
            $email_count = 2;
            $message = "email  already exist";
        } else {
            $email_count = 0;
        }
        if ($count_mobilenumber == 0) {
            $mobilenumber_count = 2;
            $message = "mobilenumber  already exist";
        } else {
            $mobilenumber_count = 0;
        }
        if ($email_count == 2 && $mobilenumber_count == 2) {
            $email_count = 1;
            $mobilenumber_count = 1;
            // $update = DB::table('register')->where('usersession_id', $usersession_id)->update(['username' => $username, 'firstname' => $firstname, 'lastname' => $lastname, 'email_id' => $email_id, 'mobilenumber' => $mobilenumber, 'dob' => $dob, 'gender' => $gender, 'address' => $address, 'password' => $password]);

           $update=register::where('usersession_id', '=', $usersession_id)->update(['username' => $username, 'firstname' => $firstname, 'lastname' => $lastname, 'email_id' => $email_id, 'mobilenumber' => $mobilenumber, 'dob' => $dob, 'gender' => $gender, 'address' => $address, 'password' => $password]);

           // $update_count = count($update);
    
            if ($update==1) {
                return response()->json(array('status' => 1, 'message' => "update successful"));
            } else {
                return response()->json(array('status' => 0));
            }
        } else {
            return response()->json(array('status' => 0, 'message' => "User already exist"));
        }
    }
    public function getaddress() {
        $latitude = '13.088962';
        $longitude = '80.250466';
        $geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($latitude) . ',' . trim($longitude) . '&sensor=false&key=AIzaSyBf5n1byqs9ePTJ3xJA3UuO0490tYFZ7qE');
        $output = json_decode($geocodeFromLatLong);
        //print_r($output);
        return response()->json($output);
    }
}
