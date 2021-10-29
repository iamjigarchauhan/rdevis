<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inquiry;
use App\InquiryPageDetail;
use Illuminate\Support\Facades\Storage;
use File;

class AdminInquiryController extends Controller
{
    //
    public function inquiry()
    {
    	/*$json_data= Inquiry::all();
      
        $data=$json_data->toArray();
       foreach ($data as $key => $value) {
                 $dec_data =json_decode($data[$key]['details']);
                 $data[$key]['details']=$dec_data;
       }*/

       /* echo "<pre>";
        print_r( $data);
        die();*/

        /*echo "<br>";
        echo $data[0]['details']->name;
        die();*/
        
        
        $data= Inquiry::all();
        $inquiry_page_data=InquiryPageDetail::first();
    	return view('admin.inquiry.admin_inquiry',compact('data','inquiry_page_data'));
    }

   /* public function inquiryDetails($id)
    {
    	$json_data=Inquiry::find($id);
        $data=$json_data->toArray();
        $dec_data =json_decode($data['details']);
        $data['details']=$dec_data;
      
        return view('admin.inquiry.admin_inquiry_form',compact('data'));
    }*/
    
    
    public function addInquiryDetails(Request $request)
    {
        $this->validate($request, [
            'inquiry_form_msg' => 'required', 
             'inquiry_form'=>'mimes:doc,docx,xls,xlsx,pdf|max:2048',
        ]);

        $data=InquiryPageDetail::first();
       /* echo "<pre>";
        print_r($data->toArray());
        die();*/
        if(isset($data->id))
        {
            if($request->inquiry_form)
            {
                File::delete('public/storage/'.$data->inquiry_form);
        /*        Storage::delete($data->image);*/
                $file_name=request()->inquiry_form->getClientOriginalName();
                $file_path="inquiries/".$file_name;  
                $path=$request->inquiry_form->storeAs('inquiries',$file_name);
            
                $request=$request->toArray();
                $request['inquiry_form']=$file_path;
            }
            else
            {
                $request=$request->toArray();
                $request['inquiry_form']=$data->inquiry_form;
            }
            $data->fill($request);
            $flag=$data->save();
            if(isset($flag))
            {
                return redirect('/admin/inquiry')->with('addInquiry_detail_success_msg','Details Update Successfully!');
            }
            else
            {
                return redirect('/admin/inquiry')->with('addInquiry_detail_error_msg','Something Went Wrong!');
            }           
        } 
        else
        {
            $file_name=request()->inquiry_form->getClientOriginalName();
            $file_path="inquiries/".$file_name;  
            $path=$request->inquiry_form->storeAs('inquiries',$file_name);

            $request=$request->toArray();
            $request['inquiry_form']=$file_path;

            $flag=InquiryPageDetail::create($request);
            if(isset($flag->id))
            {
                return redirect('/admin/inquiry')->with('addInquiry_detail_success_msg','Details Added Successfully!');
            }
            else
            {
                 return redirect('/admin/inquiry')->with('addInquiry_detail_error_msg','Something Went Wrong!');
            }
        }

       
    }

    public function inquiryDelete($id)
    {
        if($id)
        {
            $data=Inquiry::find($id);
            $flag=$data->delete();
            if(isset($flag))
            {
                return redirect('/admin/inquiry')->with('inquiryDelete_success_msg','Inquiry Deleted Successfully!');
            }
            else
            {
                 return redirect('/admin/inquiry')->with('inquiryDelete_error_msg','Something Went Wrong!');
            }
        }

        return redirect('/admin/inquiry');
    }
}
