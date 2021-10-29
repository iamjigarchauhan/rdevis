<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\File ;
use Illuminate\Support\Facades\Storage;
use App\Banner;
use Crypt;
use URL;



class AdminBannerController extends Controller
{
    //
    public function banners()
    {
    	
        $banners=Banner::all();
    	return view('admin.banner.admin_banner',compact('banners'));
    }


    public function add_banner(Request $request)
    {
    	
    	$this->validate($request, [
	    	'banner' => 'mimes:jpeg,bmp,png|max:2048', //only allow this type extension file.
		]);
    	
    	$img=request()->banner->getClientOriginalName();
    	$img_path="banners/".$img;
    
    	$dublicate=Banner::where('image',$img_path)->get();
        
    	if(count($dublicate->toArray())!=0)
    	{
            return back()->with('dup_err_msg','Banner Already Available!');
    	}
       
    //	$path=$request->banner->storeAs('public/banners',$img);
        $path=$request->banner->storeAs('banners',$img);
    	$status="on";
    	$banner=['image'=>$img_path,'status'=>$status];
    	Banner::create($banner);
    	return redirect('/admin/banner')->with('success_msg','Banner Added Successfully!');
    }


    public function delete_banner($id)
    {
        $banner=Banner::find($id);
        Storage::delete($banner->image);

        $delete_flag=Banner::destroy($id);
        if($delete_flag)
        {
            return redirect('/admin/banner')->with('Banner_delete_success_msg','Banner Deleted Successfully!');
        }
        else
        {
           return redirect('/admin/banner')->with('Banner_delete_error_msg','Something Went Wrong!');
        }

        
    }

    public function banner_status($id)
    {
       
       $status= $_REQUEST['status'];

       $data=Banner::find($id);
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




}
