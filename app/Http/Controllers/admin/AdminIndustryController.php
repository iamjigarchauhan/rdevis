<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Industry;
use DB;


class AdminIndustryController extends Controller
{
    //
    public function industries()
    {
    	
    	$data=Industry::all();
    	return view('admin.industries.admin_industries', compact('data'));
    }


    public function addIndustries(Request $request)
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
      
        $dublicate=Industry::where('name',$request->name)->get();

        if(count($dublicate->toArray())!=0)
        {
            return back()->with('industry_dup_err_msg','Industry Already Available!');
        }

        $img=request()->image->getClientOriginalName();
        $img_path="industries/".$img;

    
        
    //    $path=$request->image->storeAs('public/industries',$img);
        $path=$request->image->storeAs('industries',$img);

        $request=$request->toArray();
        $request['image']=$img_path;
        
        foreach ($request['data_img'] as $key => $value) {
           $data_img_path[$key]="industries/".time().request()->data_img[$key]->getClientOriginalName();
           $img_name = time().request()->data_img[$key]->getClientOriginalName();
           $path=$request['data_img'][$key]->storeAs('industries',$img_name);
        }
        $request['data_img'] = json_encode($data_img_path);
        
        $flag=Industry::create($request);
        if(isset($flag->id))
        {
            return redirect('/admin/industries')->with('addIndustry_success_msg','Industry Added Successfully!');
        }
        else
        {
             return redirect('/admin/industries')->with('addIndustry_error_msg','Something Went Wrong!');
        } 
    }


    public function updateIndustries($id,Request $request )
    {
    	$this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
             'image'=>'mimes:jpeg,bmp,png|max:2048',
             'description'=> 'required'
            ]);

        $data=Industry::find($id);
        $old_img_path=$data->image;

       if($request->image)
       {
	       /* $industries_img_path=storage_path('app/public/'.$data->image);
	        $industries_img_path=str_replace("/","\\",$industries_img_path);
	        unlink($industries_img_path);*/
       //     Storage::delete('public/'.$data->image);
            Storage::delete($data->image);

	        $img=request()->image->getClientOriginalName();
	        $img_path="industries/".$img;
	        
	    //    $path=$request->image->storeAs('public/industries',$img);
	    $path=$request->image->storeAs('industries',$img);

	        $request=$request->toArray();
	        $request['image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['image']=$old_img_path;
            
       }
       
        if(isset($request['data_img']))
       {
            foreach ($request['data_img'] as $key => $value) {
               $data_img_path[$key]="industries/".time().request()->data_img[$key]->getClientOriginalName();
               $img_name = time().request()->data_img[$key]->getClientOriginalName();
               $path=$request['data_img'][$key]->storeAs('industries',$img_name);
            }
            $request['data_img'] = json_encode($data_img_path);
       }
       else
       {
             $request['data_img'] =$data->data_img;
       }

        $data->fill($request);
        $flag=$data->save();
        if(isset($flag))
        {
            return redirect('/admin/industries')->with('updateIndustry_success_msg','Industry Update Successfully!');
        }
        else
        {
            return redirect('/admin/industries')->with('updateIndustry_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteIndustries($id)
    {
    	
        $data=Industry::find($id);
      //  Storage::delete('public/'.$data->image);
      Storage::delete($data->image);
        $flag=$data->delete();
        if(isset($flag))
        {
            return redirect('/admin/industries')->with('deleteIndustry_success_msg','Industry Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/industries')->with('deleteIndustry_error_msg','Something Went Wrong!');
        }
    }


    public function industryForm($id='')
    {
    	
    	$data=[];
    	if($id)
    	{
    		$data=Industry::find($id);
    	}

    	return view('admin.industries.industries_form', compact('data'));
    }




}
