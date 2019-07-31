<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\package;
use Illuminate\Support\Str;





class packageController extends Controller
{
    
    
    public function addpackage(Request $req)
    {
  
        $addpackage               = new package;
        $addpackage->number_hours = $req->input('number_hours');
        $addpackage->price        = $req->input('price');
        $addpackage->distance     = $req->input('distance');
        $addpackage->service_type = $req->input('service_type');
        
        if ($addpackage->save()) {
            
            return redirect('addpackage')->with('status', 'add new addpackage Details');
        }
        
        
    }
    
    
    
    public function viewpackage()
    {
        
        
        $session_get = session()->get('username');
        if ($session_get !== null) {
             
            // $viewpackage = DB::table('package')->get();
            $viewpackage = package::all();
            
            return view('packageview', compact('viewpackage'));
            
        } else {
            
            return redirect('/');
        }
        
        
    }
    
    
    public function package_delete($delete_id)
    {
        
        
        $session_get = session()->get('username');
        if ($session_get !== null) {
            
            
            $delete_user = package::where('id', $delete_id)->first();
            
            if ($delete_user != null) {
                
                $delete_user->delete();
                
                return back()->with('message', 'Successfully deleted!!');
                
                
            }
            
            return back()->with('message', 'Wrong ID!!');
            
        } else {
            
            return redirect('/');
        }
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
}

