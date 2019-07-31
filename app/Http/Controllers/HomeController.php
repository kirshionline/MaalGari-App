<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller {
    public function index() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return redirect('dashboard');
        } else {
            return view('index');
        }
    }
    public function mapview() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('mapview');
        } else {
            return redirect('/');
        }
    }
    public function availability() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('availability_map');
        } else {
            return redirect('/availability');
        }
    }
    public function driver() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('driver');
        } else {
            return redirect('/');
        }
    }
    public function addpassenger() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('user');
        } else {
            return redirect('/');
        }
    }
    public function addpackage() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('add_package');
        } else {
            return redirect('/');
        }
    }
    public function transactions() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('transactions');
        } else {
            return redirect('/');
        }
    }
    public function add_vehicle() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('add_vehicle');
        } else {
            return redirect('/');
        }
    }
    public function dashboard() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }
    public function view_drivers() {
        $session_get = session()->get('username');
        if ($session_get !== null) {
            return view('view_drivers');
        } else {
            return redirect('/');
        }
    }
}
