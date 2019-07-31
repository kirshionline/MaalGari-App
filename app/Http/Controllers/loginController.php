<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\adminlogin;





class loginController extends Controller
{
    


    public function adminlogin(Request $request){

    	//return $request->all();
    	$email_id=$request->input('email_id');
	    $password=$request->input('password');


		$login=DB::select('select * from adminlogin where email_id = ? and password =?' ,[$email_id ,$password]);

		$count_login=count($login);

		if ($count_login==1) {

            foreach ($login as $value) {
                 $email_id = $value->email_id;
                 $username=$value->username;

             }

             session(['email_id' => $email_id]);
             session(['username' => $username]);
        
            return redirect('/dashboard');


		}
		 else{

		       return redirect('/')->with('status', 'incorrect username password');

		     }




    }
   

   public function logout(Request $res){


    	$res->session()->flush();

    	if ($res) {
    		
    		    return redirect('/')->with('status', 'Logged out Successfully');
    	}
    
    }	



}
