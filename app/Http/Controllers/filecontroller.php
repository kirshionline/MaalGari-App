<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\passenger;


class filecontroller extends Controller
{
    

    public  function addpassenger(Request $request){

    	$passenger= new passenger;
        $passenger->firstname=$request->input('firstname');
       	$passenger->lastname=$request->input('lastname');
    	$passenger->Gender=$request->input('Gender');
    	$passenger->email=$request->input('email');
    	$passenger->contactnumber=$request->input('contactnumber');
    	$passenger->pickup_location=$request->input('pickup_location');
        $passenger->Picture=$request->input('Picture');
    	if($request->hasfile('Picture')) 
			{ 
			  $file = $request->file('Picture');
			  $extension = $file->getClientOriginalExtension(); // getting image extension
			  $filename =time().'.'.$extension;
			  $file->move(public_path().'/upload/', $filename);
			}
	    $passenger->Picture=$filename;	
	    $passenger->save();

        //  if($request->hasfile('Picture'))
        //  {

        //     foreach($request->file('Picture') as $image)
        //     {
        //         $name=$image->getClientOriginalName();
        //         $image->move(public_path().'/upload/', $name);  
        //         $data[] = $name;  
        //     }
        //  }

  
        // $passenger->Picture= implode("|",$data);

         if ($passenger->save()) {
         	
         	 return redirect('user')->with('status','add new passenger Details');
         }

         else{

         	 return redirect('user')->with('status','Not insert');
         }
        //  print_r($data);
       
         	//  $user = passenger::findOrFail(1);

         	//   foreach (explode('|', $user->Picture) as $info) {
         	  	
         	//   	echo $info."<br>";
         	//   }
         	
         	// echo  json_encode($info);
        
        }




	 public function viewpassenger (){


	 		  $viewpassenger = DB::table('passenger')->get();


	 		  print_r($viewpassenger);


	 }


























}
