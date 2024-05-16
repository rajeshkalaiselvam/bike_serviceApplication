<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Service;
use App\Models\Booking;

use Auth;
use Hash;
use Mail;

class Accountcontroller extends Controller
{
    public function index() {
        $id = Auth::id();
        $data = User::find($id);
        $service = Service::all();
        $booking = Booking::join('services', 'bookings.service_id', '=', 'services.id')
                   ->where('bookings.user_id', $id)
                   ->get(['bookings.*', 'services.title as service_name']);  
        return view('account',compact('data','service','booking'));
    }

    public function ProfileUpdate(Request $request)
    {
        // return $request;
        $id = Auth::id();
        $data = User::find($id);

        $password = $data->password;
        if(!empty($request->password)){
            $password = Hash::make($request->password);
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = $password;
        $data->role_id = 2;
       

        $data->save();

        return "ok";        
    }

    public function booking(Request $request)
    {
        // return $request;
        $id = Auth::id();
        $post_data = array(
            'user_id' =>$id,
            'service_id' =>$request->service_id,
            'booking_date' =>$request->booking_date,
            'bike_reg_no' =>$request->bike_reg_no,
            'bike_model' =>$request->bike_model,
            'status' => 0
        );

        $create = Booking::create($post_data);

        if($create){    
            $data = User::find($id);
            $email = 'rajeshrsquare2@gmail.com';
            $passing_data['name'] = $data->name;
            $passing_data['mobile'] = $data->mobile;
            $passing_data['subject'] = "Booked a service";
            $passing_data['message'] = "Booked a service please check in the bike number $request->bike_reg_no and the model is $request->bike_model";
            Mail::send('contactmail',$passing_data, function($message) use ($email){
                $message->to($email, 'Tutorials Point')->subject('Service Booked');
                $message->bcc('rajeshrsquare2@gmail.com','R2 Tech');
            });

            return "ok";
        }else{
            return "error";
        }
    }
}
