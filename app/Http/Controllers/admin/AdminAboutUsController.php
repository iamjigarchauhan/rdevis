<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Management;
use App\Certification;

class AdminAboutUsController extends Controller
{
    //
    public function management()
    {
    	$data=Management::all();
    	return view('admin.about_us.admin_management',compact('data'));
    }

    public function addManagement(Request $request)
    {
    	$this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\.]+$/u|required', 
            'designation' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required',
            'image'=>'mimes:jpeg,bmp,png|max:2048|required',
            'description'=> 'required',
        ]);


        $img=request()->image->getClientOriginalName();
        $img_path="managements/".$img;
        
    //    $path=$request->image->storeAs('public/managements',$img);
     $path=$request->image->storeAs('managements',$img);

        $request_arr=$request->toArray();
        $request_arr['image']=$img_path;
        $request_arr['status']="on";
        
        $flag=Management::create($request_arr);
        if(isset($flag->id))
        {
            return redirect('/admin/management')->with('addManagement_success_msg','Person Added Successfully!');
        }
        else
        {
             return redirect('/admin/management')->with('addManagement_error_msg','Something Went Wrong!');
        } 

    }

    public function updateManagement($id, Request $request)
    {
    	$this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\.]+$/u|required', 
            'designation' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required',
            'image'=>'mimes:jpeg,bmp,png|max:2048',
            'description'=> 'required',
        ]);


        $management=Management::find($id);
        $old_img_path=$management->image;

        if($request->image)
        {
          //  Storage::delete('public/'.$management->image);
          Storage::delete($management->image);

            $img=request()->image->getClientOriginalName();
            $img_path="managements/".$img;
            
         //   $path=$request->image->storeAs('public/managements',$img);
            $path=$request->image->storeAs('managements',$img);

            $request=$request->toArray();
            $request['image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['image']=$old_img_path;
            
       }
        $management->fill($request);
        $flag=$management->save();
        if(isset($flag))
        {
            return redirect('/admin/management')->with('updateManagement_success_msg','Person Update Successfully!');
        }
        else
        {
            return redirect('/admin/management')->with('updateManagement_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteManagement($id)
    {
    	if($id)
    	{
    		$data=Management::find($id);
    		$flag= $data->delete();
	        if(isset($flag))
	        {
	            return redirect('/admin/management')->with('deleteManagement_success_msg','Person Delete Successfully!');
	        }
	        else
	        {
	            return redirect('/admin/management')->with('deleteManagement_error_msg','Something Went Wrong!');
	        }    
    	}

	    return redirect('/admin/management');
    }




    public function managementStatus($id)
    {
    	$status= $_REQUEST['status'];

       $data=Management::find($id);
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


    public function managementForm($id='')
    {
    	$data=[];
    	if($id)
    	{
    		$data=Management::find($id);
    	}

    	return view('admin.about_us.management_form',compact('data'));
    }

     
     public function certification()
    {
    	$data=Certification::all();
        return view('admin.about_us.admin_certification',compact('data'));
    }

    public function addCertification(Request $request)
    {
        $this->validate($request, [
            'description' => 'required', //only allow this type extension file.
        ]);
        
       /* $img=request()->image->getClientOriginalName();
        $img_path="certifications/".$img;
    
        $dublicate=Certification::where('image',$img_path)->get();
        
        if(count($dublicate->toArray())!=0)
        {
            return back()->with('dup_err_msg','Certificate Already Available!');
        }
       
        $path=$request->image->storeAs('public/certifications',$img);*/
        $request=$request->toArray();
        $request['status']="on";
        $flag=Certification::create($request);

        if(isset($flag->id))
        {
            return redirect('/admin/certification')->with('addCertification_success_msg','Certification Added Successfully!');
        }
        else
        {
             return redirect('/admin/certification')->with('addCertification_error_msg','Something Went Wrong!');
        } 

    }

     public function updateCertification(Request $request,$id)
    {
        $this->validate($request, [
            'description' => 'required', //only allow this type extension file.
        ]);
        
       /* $img=request()->image->getClientOriginalName();
        $img_path="certifications/".$img;
    
        $dublicate=Certification::where('image',$img_path)->get();
        
        if(count($dublicate->toArray())!=0)
        {
            return back()->with('dup_err_msg','Certificate Already Available!');
        }
       
        $path=$request->image->storeAs('public/certifications',$img);*/
        $data=Certification::find($id);
        $request=$request->toArray();
        $data->fill($request);
        $flag=$data->save();
        /*$flag=Certification::create($request);*/

        if($flag)
        {
            return redirect('/admin/certification')->with('addCertification_success_msg','Certification Updated Successfully!');
        }
        else
        {
             return redirect('/admin/certification')->with('addCertification_error_msg','Something Went Wrong!');
        } 

    }

    public function deleteCertification($id)
    {
        if($id)
        {
            $data=Certification::find($id);
          //  Storage::delete('public/'.$data->image);
           Storage::delete($data->image);

            $flag=Certification::destroy($id);
            if($flag)
            {
                return redirect('/admin/certification')->with('deleteCertification_success_msg','Certification Deleted Successfully!');
            }
            else
            {
               return redirect('/admin/certification')->with('deleteCertification_error_msg','Something Went Wrong!');
            }
        }
        return redirect('/admin/certification');

    }


    public function certificationStatus($id)
    {
        $status= $_REQUEST['status'];

       $data=Certification::find($id);
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

    public function certificationForm($id='')
    {
        $data=[];
        if($id)
        {
            $data=Certification::find($id);
        }

        return view('admin.about_us.certification_form',compact('data'));
    }
}
