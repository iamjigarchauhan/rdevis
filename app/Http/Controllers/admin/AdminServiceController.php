<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Support\Facades\Storage;
use DB;


class AdminServiceController extends Controller
{
    //
    public function service()
    {
    
    	$data=Service::all();
    	
    	/*echo "<pre>";
    	print_r($data);
    	die();*/
    	return view('admin.services.admin_services', compact('data'));
    }

    public function addService(Request $request)
    {
    	/*echo "string";
    	die();*/
    	/*echo "<pre>";
    	print_r($request->name);
    	die();*/
    	$this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
             'image'=>'mimes:jpeg,bmp,png|max:2048|required',
             'description'=> 'required'
        ]);
      
        $dublicate=Service::where('name',$request->name)->get();

        if(count($dublicate->toArray())!=0)
        {
            return back()->with('service_dup_err_msg','Service Already Available!');
        }

        $img=request()->image->getClientOriginalName();
        $img_path="services/".$img;

    
        
    //    $path=$request->image->storeAs('public/services',$img);
        $path=$request->image->storeAs('services',$img);

        $request=$request->toArray();
        $request['image']=$img_path;
        
        $flag=Service::create($request);
        if(isset($flag->id))
        {
            return redirect('/admin/services')->with('addService_success_msg','Service Added Successfully!');
        }
        else
        {
             return redirect('/admin/services')->with('addService_error_msg','Something Went Wrong!');
        } 
    }


    public function updateService($id,Request $request )
    {
    	$this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
             'image'=>'mimes:jpeg,bmp,png|max:2048',
             'description'=> 'required'
            ]);

        $data=Service::find($id);
        $old_img_path=$data->image;

       if($request->image)
       {
	        /*$service_img_path=storage_path('app/public/'.$data->image);
	        $service_img_path=str_replace("/","\\",$service_img_path);
	        unlink($service_img_path);*/
        //    Storage::delete('public/'.$data->image);
            Storage::delete($data->image);


	        $img=request()->image->getClientOriginalName();
	        $img_path="services/".$img;
	        
	      //  $path=$request->image->storeAs('public/services',$img);
	      $path=$request->image->storeAs('services',$img);

	        $request=$request->toArray();
	        $request['image']=$img_path;
       }
       else
       {
            $request['image']=$old_img_path;
            $request=$request->toArray();
       }

        $data->fill($request);
        $flag=$data->save();
        if(isset($flag))
        {
            return redirect('/admin/services')->with('updateService_success_msg','Service Update Successfully!');
        }
        else
        {
            return redirect('/admin/services')->with('updateService_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteService($id)
    {
    	
        $data=Service::find($id);
      //  Storage::delete('public/'.$data->image);
        Storage::delete($data->image);
        $flag=$data->delete();
        if(isset($flag))
        {
            return redirect('/admin/services')->with('deleteService_success_msg','Service Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/services')->with('deleteService_error_msg','Something Went Wrong!');
        }
    }


    public function serviceForm($id='')
    {
    	$data=[];
    	if($id)
    	{
    		$data=Service::find($id);
    	}

    	return view('admin.services.service_form', compact('data'));
    }
}
