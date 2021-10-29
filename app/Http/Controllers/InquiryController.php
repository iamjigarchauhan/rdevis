<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MetaInformation;
use App\Inquiry;
use App\InquiryPageDetail;

class InquiryController extends Controller
{
    //
    public function inquiry()
    {
        $mdata=MetaInformation::where('page','inquiry_page')->get();
        $mdata=$mdata->toArray();
        $inquiry_msg=InquiryPageDetail::first();
        return view('inquiry',compact('mdata','inquiry_msg'));
    }

    public function addInquiry(Request $request)
    {
    	$this->validate($request,[
            'name'=>'regex:/^[\pL\s\-\w\,\&\.]+$/u|required',
            'email'=>'email|required',
            'phone'=>'regex:/^[\pL\s\-\w\,\&\.]+$/u|required',
            'company'=>'regex:/^[\pL\s\-\w\,\&\.]+$/u|required',
            ],
            
            [   'name.regex'=>'Format is not valid',
                'name.required'=>'Please enter name',
                'email.email'=>'Enter valid email',
                'email.required'=>'Please enter email',
                'phone.regex'=>'Format is not valid',
                'phone.required'=>'Please enter telephone',
                'company.regex'=>'Format is not valid',
                'company.required'=>'Please enter company name',
            ]   
        );

        $request=$request->toArray();

        $flag=Inquiry::create($request);
        if(isset($flag->id))
        {
            return redirect('/inquiry')->with('success_msg','Submitted!!');
        }
        else
        {
            return redirect('/inquiry')->with('error_msg','Something Went Wrong!');
        }
     
    }
}
