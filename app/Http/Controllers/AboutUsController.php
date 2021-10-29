<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Management;
use App\Certification;
use App\MetaInformation;

class AboutUsController extends Controller
{
    //
    public function AboutUs()
    {
       $management=Management::where('status',"on")->get();
       $certification=Certification::where('status',"on")->get();
        $mdata=MetaInformation::where('page','aboutus_page')->get();
        $mdata=$mdata->toArray();
       return view('about_us',compact('management','certification','mdata'));
    }

    public function showPortfolio($id)
    {
    	$data=Management::find($id);
    	/*echo "<pre>";
    	print_r($data->toArray());
    	die();*/
    	return view('portfolio',compact('data'));
    }
}
