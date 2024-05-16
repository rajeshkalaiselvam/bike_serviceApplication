<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index',compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $post_data = array(
            'title' => $request->title,
            'description' => $request->description,
        );
        $data = Service::create($post_data);
        if($data){
            Session::flash('message', 'Service Created');
            return redirect('service');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return $id;
        $data = Service::find($id);
        // return $data;
        return view('admin.services.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // return $request;
        $id = $request->id;

        $service = Service::find($id);
       

        $service->title = $request->title;
        $service->description = $request->description;


        $service->save();

        Session::flash('message', 'Service Updated');
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        
        $service->delete();

        Session::flash('message', 'Successfully Service Deleted!');
        return redirect('service');
    }
}
