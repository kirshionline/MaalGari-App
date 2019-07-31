<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use App\passenger;
use App\register;


class PassengerController extends Controller {
    public function addpassenger(Request $request) {


        return $request->all();

       die();

        if ($request->hasfile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path() . '/upload/', $filename);
        }
        $request['profile'] = $filename;

        $passengerData = register::create($request->all());


        if ($passengerData) {
            return redirect('user')->with('status', 'add new passenger Details');
        } else {
            return redirect('user')->with('status', 'Not insert');
        }

    }
    public function viewpassenger() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            $viewpassenger = DB::table('passenger')->get();
            return view('viewpassenger_list', compact('viewpassenger'));
        } else {
            return redirect('/');
        }
    }
    public function viewuser($id) {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            $viewuser = passenger::findOrFail($id);
            return view('user_details', compact('viewuser'));
        } else {
            return redirect('/');
        }
    }
    public function delete_user($delete_id) {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            $delete_user = passenger::where('id', $delete_id)->first();
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
