<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\vehicle_types;
use Redirect, Response;



class vehicle_typesController extends Controller {

    public  function add_vehicle(Request $request){
        // return $request->all();
        $vehicle_types = new vehicle_types;
        $vehicle_types->vehicle_type = $request->input('vehicle_type');
        $vehicle_types->capacity = $request->input('capacity');
        $vehicle_types->base_fare = $request->input('base_fare');
        $vehicle_types->minimum_fare = $request->input('minimum_fare');
        $vehicle_types->booking_fee = $request->input('booking_fee');
        $vehicle_types->tax_fee = $request->input('tax_fee');
        $vehicle_types->price_per_minute = $request->input('price_per_minute');
        $vehicle_types->price_per_mile_kms = $request->input('price_per_mile_kms');
        $vehicle_types->mile_or_kms = $request->input('mile_or_kms');
        if ($request->hasfile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path() . '/upload/', $filename);
        }
        $vehicle_types->picture = $filename;
        if ($vehicle_types->save()) {
            return redirect('vehicle')->with('status', 'add new vehicle type Details');
        }
    }
    public function viewvehicle() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            $viewvehicle = vehicle_types::all();
            return view('vehicle_view', compact('viewvehicle'));
        } else {
            return redirect('/');
        }
    }
    public function viewvehicle_type() {
        $viewvehicle = vehicle_types::all();
        foreach ($viewvehicle as $value) {
            $res['id'] = $value['id'];
            $res['vehicle_type'] = $value['vehicle_type'];
            $res['capacity'] = $value['capacity'];
            $res['base_fare'] = $value['base_fare'];
            $res['minimum_fare'] = $value['minimum_fare'];
            $res['booking_fee'] = $value['booking_fee'];
            $res['price_per_minute'] = $value['price_per_minute'];
            $res['price_per_mile_kms'] = $value['price_per_mile_kms'];
            $res['mile_or_kms'] = $value['mile_or_kms'];
            $res['picture'] = "http://delivery.preggnancy.com/upload/". $value['picture'];
            $data[] = $res;
        }
        return response()->json(array('status' => 'success', 'data' => $data));
    }
    public function vehicledelete($delete_id) {
        $delete = vehicle_types::where('id', $delete_id)->first();
        if ($delete != null) {
            $delete->delete();
            return back()->with('message', 'Successfully deleted!!');
        }
        return back()->with('message', 'Wrong ID!!');
    }


    
}
