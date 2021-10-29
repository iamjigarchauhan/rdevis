<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;
use App\Address;
use App\OtherBranch;

class AdminContactUsController extends Controller
{
    //
    public function ContactUs()
    {
    	$data=ContactUs::all();
    	return view('admin.contact_us.admin_contact_us', compact('data'));
    }

    public function deleteContactUs($id)
    {
    	if($id)
    	{
    		$data=ContactUs::find($id);
    		$flag=$data->delete();
    		if($flag)
    		{
    			return redirect('/admin/contact-us')->with('delete-contactus-succsees','Contact Deleted Successfully!');
    		}
    		else
    		{
    			return redirect('/admin/contact-us')->with('delete-contactus-error','Something Went Wrong!');
    		}

    	}

    	return redirect('/admin/contact-us');
    }

    public function Address()
    {
    	$data=Address::first();
    	/*echo "<pre>";
    	print_r($data->toArray());
    	die();*/
    	return view('admin.contact_us.admin_address',compact('data'));   
    }


    public function addAddress(Request $request)
    {

    	$this->validate($request,[
    		'support_email'=>'email',
    		'sales_email'=>'email',
    		'director_email'=>'email',
    		'support_phone'=> 'regex:/^[\pL\s\-\,\+\.\&\w-]+$/u', 
 	        'sales_phone'=>'regex:/^[\pL\s\-\,\+\.\&\w-]+$/u',
  	        'director_phone'=>'regex:/^[\pL\s\-\,\+\.\&\w-]+$/u',
    		'location'=>'required',
    	]);

    	/*echo "<pre>";
    	print_r($request->toArray());
    	die();*/
    	$request=$request->toArray();
    	$data=Address::first();
        if(isset($data->id))
        {
            $data->fill($request);
            $flag=$data->save();
            /*$flag=Address::create($request);*/
            if(isset($flag))
            {
                return redirect('/admin/address')->with('addAddress_success_msg','Address Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/address')->with('addAddress_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
            $flag=Address::create($request);
            if(isset($flag->id))
            {
                return redirect('/admin/address')->with('addAddress_success_msg','Address Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/address')->with('addAddress_error_msg','Something Went Wrong!');
            } 
        }
    	/*$data->fill($request);
    	$flag=$data->save();
    	if(isset($flag))
        {
            return redirect('/admin/address')->with('addAddress_success_msg','Address Updated Successfully!');
        }
        else
        {
             return redirect('/admin/address')->with('addAddress_error_msg','Something Went Wrong!');
        } */
    }

    public function otherBranches()
    {
        $data=OtherBranch::all();
        return view('admin.contact_us.admin_other_branches',compact('data'));
    }

    public function addOtherBranch(Request $request)
    {
        $this->validate($request, [
            'branch_name' => 'regex:/^[\pL\s\-\.\,\&\w-]+$/u|required|', 
             'address' => 'regex:/^[\pL\s\-\.\,\&\w-]+$/u|required',
        ]);

        $request=$request->toArray();
        $flag=OtherBranch::create($request);
        if(isset($flag->id))
        {
            return redirect('/admin/other-branches')->with('addOtherBranch_success_msg','Branch Added Successfully!');
        }
        else
        {
             return redirect('/admin/other-branches')->with('addOtherBranch_error_msg','Something Went Wrong!');
        } 
    }


    public function updateOtherBranch(Request $request, $id)
    {
        $this->validate($request, [
            'branch_name' => 'regex:/^[\pL\s\-\.\,\&\w-]+$/u|required|', 
             'address' => 'regex:/^[\pL\s\-\.\,\&\w-]+$/u|required',
        ]);

        $data=OtherBranch::find($id);
        $data->branch_name=$request->branch_name;
        $data->address=$request->address;
        $flag=$data->save();
        if(isset($flag))
        {
            return redirect('/admin/other-branches')->with('updateOtherBranch_success_msg','Branch Update Successfully!');
        }
        else
        {
            return redirect('/admin/other-branches')->with('updateOtherBranch_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteOtherBranch($id)
    {
        $data=OtherBranch::find($id);
        $flag=$data->delete();

        if(isset($flag))
        {
            return redirect('/admin/other-branches')->with('deleteOtherBranch_success_msg','Branch Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/other-branches')->with('deleteOtherBranch_error_msg','Something Went Wrong!');
        }
    }

    public function otherBranchesForm($id='')
    {
      
        $data=[];
        if($id)
        {
            $data=OtherBranch::find($id);
        }
        return view('admin.contact_us.other_branches_form',compact('data'));
    }
}

