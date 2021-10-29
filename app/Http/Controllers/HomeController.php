<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Event;
use App\MetaInformation;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {

        $mdata = MetaInformation::where('page', 'home_page')->get();
        $mdata = $mdata->toArray();
        $banners = Banner::where('status', "on")->get();
        $events = Event::orderBy('date', 'DESC')->select(['name', 'location', 'date', 'image'])->limit(5)->get();
        $events = $events->toArray();

        /*$services=Service::inRandomOrder()->select(['id','name','image'])->limit(3)->get();*/
        $services = Service::select(['id', 'name', 'image'])->get();
        $services = $services->toArray();

        return view('home', compact('banners', 'mdata', 'events', 'services'));
    }

    public function services()
    {
        return view('services');
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function termCondition()
    {
        return view('term_condition');
    }

}
