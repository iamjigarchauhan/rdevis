<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    //
    public function services($id)
    {
        $data=Service::find($id);
        return view('services.services_details',compact('data'));
    }
    
    public function service()
    {
        $data=Service::all();
        $data= $data->toArray();
    	return view('services.service_types',compact('data'));
    }
}
