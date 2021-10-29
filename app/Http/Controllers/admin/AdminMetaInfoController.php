<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MetaInformation;

class AdminMetaInfoController extends Controller
{
    //

    public function homeMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','home_page')->get(); 
    	
    	return view('admin.meta_information.admin_home_meta_info',compact('data'));
    }

    public function posthomeMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','home_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/home-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/home-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/home-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/home-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }




     public function imgMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','img_page')->get(); 
    	
    	return view('admin.meta_information.admin_img_meta_info',compact('data'));
    }

    public function postimgMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','img_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/img-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/img-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/img-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/img-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }



     public function eventMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','event_page')->get(); 
    	
    	return view('admin.meta_information.admin_event_meta_info',compact('data'));
    }

    public function posteventMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','event_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/event-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/event-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/event-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/event-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }







      public function careersMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','careers_page')->get(); 
    	
    	return view('admin.meta_information.admin_careers_meta_info',compact('data'));
    }

    public function postcareersMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','careers_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/careers-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/careers-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/careers-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/careers-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }






     public function aboutusMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','aboutus_page')->get(); 
    	
    	return view('admin.meta_information.admin_aboutus_meta_info',compact('data'));
    }

    public function postaboutusMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','aboutus_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/aboutus-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/aboutus-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/aboutus-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/aboutus-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }


    public function contactusMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','contactus_page')->get(); 
    	
    	return view('admin.meta_information.admin_contactus_meta_info',compact('data'));
    }

    public function postcontactusMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','contactus_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/contactus-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/contactus-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/contactus-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/contactus-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }



    public function inquiryMetaInfo()
    {
    	
    	$data=MetaInformation::where('page','inquiry_page')->get(); 
    	
    	return view('admin.meta_information.admin_inquiry_meta_info',compact('data'));
    }

    public function postinquiryMetaInfo(Request $request)
    {
    	
    	$data=MetaInformation::where('page','inquiry_page')->get();  
    
    	if(isset($data[0]->id))
        {
            $request=$request->toArray();
            $data[0]->fill($request);
            $flag=$data[0]->save();
    
            if($flag)
            {
                return redirect('/admin/inquiry-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/inquiry-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
        else
        {
        	 $request=$request->toArray();
        	 $flag=MetaInformation::create($request);
        	 if(isset($flag->id))
            {
                return redirect('/admin/inquiry-meta-info')->with('addMeta_success_msg','Meta Information Updated Successfully!');
            }
            else
            {
                 return redirect('/admin/inquiry-meta-info')->with('addMeta_error_msg','Something Went Wrong!');
            }  
        }
    }






}
