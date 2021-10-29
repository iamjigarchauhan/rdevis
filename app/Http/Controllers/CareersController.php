<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobApplication;
use App\MetaInformation;

class CareersController extends Controller
{
    //
    public function careers()
    {
    	$jobs=Job::where('status',"on")->get();
    	$jobs=$jobs->toArray();
    	/*echo "<pre>";
    	print_r($jobs->toArray());
    	die();*/
        $mdata=MetaInformation::where('page','careers_page')->get();
        $mdata=$mdata->toArray();
    	return view('careers', compact('jobs','mdata'));
    }

    public function jobApplication( Request $request)
    {
    	
    	 $this->validate($request, [
            'fname' => 'regex:/^[\pL\s\-]+$/u|required', 
            'lname' => 'regex:/^[\pL\s\-]+$/u|required', 
            'email' => 'email|required',
            'resume'=>'mimes:doc,docx,pdf|max:5000|required',
        ]);


    	$file=request()->resume->getClientOriginalName();
        $file_path="resumes/".$file;
        
        $path=$request->resume->storeAs('resumes',$file);

        $request=$request->toArray();
        $request['resume']=$file_path;
        $request['date']=date('Y-m-d');
        
        $flag=JobApplication::create($request);
        if(isset($flag->id))
        {
            return redirect('/careers')->with('job_msg','Application submitted Successfully!');
        }
        else
        {
             return redirect('/careers')->with('job_msg','Something Went Wrong!');
        } 



    /*	echo "<pre>";
    	print_r($request->toArray());
    	die();*/



    }
}
