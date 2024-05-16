<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

use Session;
use Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booking::join('users', 'bookings.user_id', '=', 'users.id')
        ->join('services', 'bookings.service_id', '=', 'services.id')
        ->select('bookings.*', 'users.name as user_name', 'services.title as service_name')
        ->get();
        // return $data;
        return view('admin.booking',compact('data'));
    }

    public function updatestatus(Request $request) {
        // return $request;
        $id = $request->id;

        $data = Booking::find($id);

        $user_id = $data->user_id;

        $user = User::find($user_id);       

        $data->status = $request->status;

        $data->save();       

        $email = $user->email;
        $passing_data['name'] = $user->name;
        $passing_data['mobile'] = $user->mobile;
        $passing_data['subject'] = "Ready to deliver";
        $passing_data['message'] = "your bikr read to deliver with bike number $request->bike_reg_no and the model is $request->bike_model please pick as soon as possible";
        Mail::send('contactmail',$passing_data, function($message) use ($email){
            $message->to($email, 'Customer')->subject('Ready to Deleiver');
            $message->bcc('rajeshrsquare2@gmail.com','R2 Tech');
        });

        Session::flash('message', 'Booking Updated');
        return redirect('booking');
    }
}
