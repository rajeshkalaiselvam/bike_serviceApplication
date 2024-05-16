<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\Service;

use Illuminate\Http\Request;

use Hash;
use Session;
use Auth;

class LoginController extends Controller
{
    public function index() {
        $service = Service::all();
        return view('index',compact('service'));
    }
    public function contact() {
        return view('contact');
    }
    public function login() {
        return view('owner/login');
    }
    public function register() {
        return view('owner/register');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $credentials = $request->only('email', 'password');
        }else{
            $credentials = ['mobile' => $request->get('email'), 'password'=>$request->get('password')];
        }
        $credentials['role_id'] = '2';
        if (Auth::attempt($credentials)) {
            return "ok";
        }else{
            return "Invalid credentials! Please try again";
        }
        return "Oppes! You have entered invalid credentials";
    }
    public function postregister(Request $request) {
        // return $request;

        $data = $request->all();
        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/',
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if ($validator->fails()) {
            $messages = $validator->messages();
            return json_encode($messages);
        } else {           
            $check = $this->create($data);
            return "ok";
        }
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,            
        ]);
    }

    public function logout() {
        
        Session::flush();
        Auth::logout();
        return Redirect('');
    }
}
