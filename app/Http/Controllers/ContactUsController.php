<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use App\Address;
use App\MetaInformation;
use App\OtherBranch;

class ContactUsController extends Controller
{
    //
    public function contactUs()
    {
    	
        $data=Address::first();
        $mdata=MetaInformation::where('page','contactus_page')->get();
        $mdata=$mdata->toArray();
        $branch_data=OtherBranch::all();
        return view('contact-us',compact('data','mdata','branch_data'));
    }

    public function quickContact(Request $request)
    {
    	$this->validate($request,[
    		'name'=>'regex:/^[\pL\s\-]+$/u|required',
    		'email'=>'email|required',
    		'phone'=>'regex:/[0-9]/|numeric',
    		],
    		
    		[	'name.regex'=>'Format is not valid',
    			'name.required'=>'Please enter name',
    			'email.email'=>'Enter valid email',
    			'email.required'=>'Please enter email',
    			/*'phone.size'=>'Enter ten digits only',*/
    			'phone.regex'=>'Enter only digits',
    			'phone.numeric'=>'Enter digits only',
    		]	
    	);

    	$request=$request->toArray();

    	$flag=ContactUs::create($request);
    	if(isset($flag->id))
    	{
    		return redirect('/contact-us')->with('success_msg','Submitted!!');
    	}
    	else
    	{
    		return redirect('/contact-us')->with('error_msg','Something Went Wrong!');
    	}

    	/*print_r($request->toArray());
    	die();*/
    }

}
