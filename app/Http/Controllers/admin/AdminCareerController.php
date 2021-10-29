<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Job;
use App\JobApplication;
use DB;


class AdminCareerController extends Controller
{
    //
    public function jobs()
    {
    	
    	$data=Job::all();
    	return view('admin.careers.admin_jobs',compact('data'));
    }

    public function addJob(Request $request)
    {
    	$this->validate($request, [
            'title' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'image'=>'mimes:jpeg,bmp,png|max:2048|required',
            'description'=> 'required'
        ]);

        $img=request()->image->getClientOriginalName();
        $img_path="jobs/".$img;
        
     //   $path=$request->image->storeAs('public/jobs',$img);
        $path=$request->image->storeAs('jobs',$img);

        $request_arr=$request->toArray();
        $request_arr['image']=$img_path;
        $request_arr['status']="on";
      
        
        $flag=Job::create($request_arr);
        if(isset($flag->id))
        {
            return redirect('/admin/jobs')->with('addJob_success_msg','Job Added Successfully!');
        }
        else
        {
             return redirect('/admin/jobs')->with('addJob_error_msg','Something Went Wrong!');
        } 
    }


    public function updateJob($id, Request $request)
    {
    	$this->validate($request, [
            'title' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'image'=>'mimes:jpeg,bmp,png|max:2048',
            'description'=> 'required'
        ]);


        $job=Job::find($id);
        $old_job_img_path=$job->image;

        if($request->image)
        {
          //  Storage::delete('public/'.$job->image);
          Storage::delete($job->image);

            $img=request()->image->getClientOriginalName();
            $img_path="jobs/".$img;
            
        //    $path=$request->image->storeAs('public/jobs',$img);
          $path=$request->image->storeAs('jobs',$img);

            $request=$request->toArray();
            $request['image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['image']=$old_job_img_path;
            
       }
        
        $job->fill($request);
        $flag=$job->save();
        if(isset($flag))
        {
            return redirect('/admin/jobs')->with('updateJob_success_msg','Event Update Successfully!');
        }
        else
        {
            return redirect('/admin/jobs')->with('updateJob_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteJob($id)
    {

    	$data=Job::find($id);
    	$flag=$data->delete();
    	if($flag)
    	{
    		return redirect('/admin/jobs')->with('deleteJob_success_msg','Job Deleted Successfully!');
    	}
    	else
    	{
    		return redirect('/admin/jobs')->with('deleteJob_error_msg','Something Went Wrong!');
    	}
    }


      public function jobStatus($id)
    {
       
       $status= $_REQUEST['status'];

       $data=Job::find($id);
       $data_arr=$data->toArray();
       $data_arr['status']=$status;

       $data->fill($data_arr);
       
       // $Response = array('msg' => 'Updated Successfully');
        if ($data->save()) {
            $response['status'] = true;
            $response['msg'] = 'Status Updated Successfully !';
        }else{
            $response['status'] = false;
            $response['msg'] = 'Something went wrong !';
        }
       
        echo json_encode($response);
      
    }


    public function jobForm($id='')
    {
    	if($id)
    	{
    		$data=Job::find($id);
    	}

    	return view('admin.careers.job_form', compact('data'));
    }



    public function candidateList()
    {
    	
        $data=JobApplication::all();
        $data=DB::table('job_applications')->leftJoin('jobs','job_applications.job_id','=','jobs.id' )->select('job_applications.id','job_applications.date','job_applications.fname','job_applications.lname','job_applications.job_id','jobs.title','job_applications.email','job_applications.resume')->whereNull('job_applications.deleted_at')->get();
       /* echo "<pre>";
        print_r($data->toArray());
        die();*/

        return view('admin.careers.admin_candidate_list',compact('data'));
    }

    public function deleteCandidate($id)
    {
        $data=JobApplication::find($id);
        $flag=$data->delete();

        if(isset($flag))
        {
            return redirect('/admin/candidate-list')->with('deleteCandidate_success_msg','Candidate Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/candidate-list')->with('deleteCandidate_error_msg','Something Went Wrong!');
        }

    }
}


