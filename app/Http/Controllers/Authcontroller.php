<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use Auth;
use Session;

class Authcontroller extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function Postlogin(Request $request){
        $input = $request->all();
        // return $input;
        $request->validate([
            'email' => 'required',
            'password' => 'required',            
        ]);
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $credentials = $request->only('email', 'password');
        }else{
            $credentials = ['mobile_no' => $request->get('email'), 'password'=>$request->get('password')];
        }
        $credentials['role_id'] = '1';
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }else{
            return Redirect()->back()->withErrors('Invalid credentials!');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard(){
        $dashboard = Booking::count();        
        return view('admin.dashboard',compact('dashboard'));
    }

    public function logout() {
        
        Session::flush();
        Auth::logout();
        return Redirect('owner');
    }
}
