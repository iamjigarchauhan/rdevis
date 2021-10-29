<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Album;
use App\Photo;
use App\Event;
use DB;
use App\Video;

class AdminMediaController extends Controller
{
    //
    public function albums()
    {
    	$data=Album::all();

      
        
        /*$udate=date("d-m-Y", strtotime($data['date']) );
        $data['date']=$udate;*/
        /*echo "<pre>";
        print_r($data);
        die();*/

        return view('admin.media.admin_album',compact('data'));
    }

    public function addAlbums(Request $request)
    {
         

         $this->validate($request, [
            'name' => 'regex:/^[\pL\s\-]+$/u|required', //only allow this type extension file.
            'date'=>'required',
        ]);
        $request_arr= $request->toArray();
        $request_arr['date']=date("Y-m-d", strtotime($request_arr['date']) );
    
        $flage=Album::create($request_arr);
        if(isset($flage))
        {
            return redirect('/admin/albums')->with('addAlbums_success_msg','Album Added Successfully!');
        }
        else
        {
            return redirect('/admin/albums')->with('addAlbums_error_msg','Something Went Wrong!');
        }
    }


    public function updateAlbums($id, Request $request)
    {
           $this->validate($request, [
            'name' => 'regex:/^[\pL\s\-]+$/u|required', //only allow this type extension file.
            'date'=>'required',
        ]);
        $request_arr= $request->toArray();
        $request_arr['date']=date("Y-m-d", strtotime($request_arr['date']) );
        $data=Album::find($id);
        $data->fill($request_arr);
        $data->save();
        $flag=$data->save();
        if(isset($flag))
        {
            return redirect('/admin/albums')->with('updateAlbums_success_msg','Album Update Successfully!');
        }
        else
        {
            return redirect('/admin/albums')->with('updateAlbums_error_msg','Something Went Wrong!');
        }    

    }


    public function deleteAlbums($id)
    {
        $data=Album::find($id);
        $photos=Photo::where('album_id',$id)->get();
        $photos_arr=$photos->toArray();
       /* echo "<pre>";
        print_r($photos_arr);
        die();*/

        $photo_ids= array_column($photos_arr, 'id');
        $photos= array_column($photos_arr, 'photo');
       /* echo "<pre>";
        print_r($photo_ids);
        die();*/
        Photo::destroy($photo_ids);

        $cnt=count($photo_ids);
        $img=[];
        for($i=0; $i<$cnt; $i++)
        {
            $img[$i]='public/'.$photos[$i];
        }

        /*Storage::delete('public/'.$photos->photo);*/
        Storage::delete($img);



     
        $flag=$data->delete();
        /*die();*/

        if(isset($flag))
        {
            return redirect('/admin/albums')->with('deleteAlbums_success_msg','Album Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/albums')->with('deleteAlbums_error_msg','Something Went Wrong!');
        }
    }

    public function albumsForm($id='')
    {
        $data=[];
        if($id)
        {
            $data=Album::find($id);
        }
        return view('admin.media.albums_form', compact('data'));
    }



/*########################### Photo section ######################*/



    public function photos()
    {
    	
          $data=DB::table('photos')->leftJoin('albums','photos.album_id','=','albums.id' )->select('photos.id','photos.photo','photos.album_id','albums.name','photos.status')->whereNull('photos.deleted_at')->get();
        
        $data=  $data->toArray();
        /*echo "<pre>";
        print_r($data);
        die();*/
        return view('admin.media.admin_photo',compact('data'));
    }

    public function addPhotos(Request $request)
    {
            
       $this->validate($request, [
           'album_id'=> 'required',
           'photos'=> 'required',
           'photos.*'=>'mimes:jpeg,bmp,png|max:2048|required',
            ]);
       


        $request_arr=$request->toArray(); 
       /* $cnt=count($request);*/
        /*echo "<pre>";
        print_r($request_arr);
        die();*/

    
        $photos=$request_arr['photos'];
        $photos_cnt=count($request_arr['photos']);
    

        $all_data=[];

       for($i=0; $i<$photos_cnt; $i++)
       {
            $data=[];
            $data['album_id'] = $request['album_id'];
            
            $img=request()->photos[$i]->getClientOriginalName();
            $img_path="photos/".$img;
       //     $request->photos[$i]->storeAs('public/photos',$img);
            $request->photos[$i]->storeAs('photos',$img);
            
            $data['photo']=$img_path;
            $data['status']="on";
            $data['created_at']= date('Y-m-d H:i:s');
            $data['updated_at']= date('Y-m-d H:i:s');
            $all_data[$i]=$data;
       }
       
        $flag=Photo::insert($all_data);
        if(isset($flag))
        {
            return redirect('/admin/photos')->with('addPhotos_success_msg','Photos Added Successfully!');
        }
        else
        {
            return redirect('/admin/photos')->with('addPhotos_error_msg','Something Went Wrong!');
        }    
       
    }


    public function deletePhoto($id)
    {
        $data=Photo::find($id);
      //  Storage::delete('public/'.$data->photo);
        Storage::delete($data->photo);

        $delete_flag=Photo::destroy($id);
        if($delete_flag)
        {
            return redirect('/admin/photos')->with('deletePhoto_success_msg','Photo Deleted Successfully!');
        }
        else
        {
           return redirect('/admin/photos')->with('deletePhoto_error_msg','Something Went Wrong!');
        }

        
    }


     public function photoStatus($id)
    {
       
       $status= $_REQUEST['status'];

       $data=Photo::find($id);
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

    public function photosForm()
    {
      /* echo "string";
       die();*/
        $albums=Album::all();
        $albums=$albums->toArray();
        return view('admin.media.photos_form', compact('albums'));
    }



    /*###################### event section ################################*/


    public function events()
    {
        $data=Event::orderBy('date', 'DESC')->get();
        /*echo "<pre>";
        print_r($data->toArray());
        die();*/
    	return view('admin.media.admin_event', compact('data'));
    }

    public function addEvent(Request $request)
    {
        /*echo "<pre>";
        print_r($request->toArray());
        die();*/
        $this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'location' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required',
            'date'=>'required|date|date_format:d-m-Y',
            'image'=>'mimes:jpeg,bmp,png|max:2048|required',
            'description'=> 'required'
        ]);


        $img=request()->image->getClientOriginalName();
        $img_path="events/".$img;
        
     //   $path=$request->image->storeAs('public/events',$img);
         $path=$request->image->storeAs('events',$img);

        $request_arr=$request->toArray();
        $request_arr['image']=$img_path;
        $request_arr['date']=date("Y-m-d", strtotime($request_arr['date']) );
        
        $flag=Event::create($request_arr);
        if(isset($flag->id))
        {
            return redirect('/admin/events')->with('addEvent_success_msg','Event Added Successfully!');
        }
        else
        {
             return redirect('/admin/events')->with('addEvent_error_msg','Something Went Wrong!');
        } 

    }

    public function updateEvent($id, Request $request)
    {
         $this->validate($request, [
            'name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'location' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required',
            'date'=>'required|date|date_format:d-m-Y',
            'image'=>'mimes:jpeg,bmp,png|max:2048',
            'description'=> 'required'
        ]);


        $event=Event::find($id);
        $old_event_img_path=$event->image;

        if($request->image)
        {
         //   Storage::delete('public/'.$event->image);
             Storage::delete($event->image);

            $img=request()->image->getClientOriginalName();
            $img_path="events/".$img;
            
        //    $path=$request->image->storeAs('public/events',$img);
        $path=$request->image->storeAs('events',$img);

            $request=$request->toArray();
            $request['image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['image']=$old_event_img_path;
            
       }
        $request['date']=date("Y-m-d", strtotime($request['date']) );
        $event->fill($request);
        $flag=$event->save();
        if(isset($flag))
        {
            return redirect('/admin/events')->with('updateEvent_success_msg','Event Update Successfully!');
        }
        else
        {
            return redirect('/admin/events')->with('updateEvent_error_msg','Something Went Wrong!');
        }    
    }

    public function deleteEvent($id)
    {
        $data=Event::find($id);
        $flag= $data->delete();
        if(isset($flag))
        {
            return redirect('/admin/events')->with('deleteEvent_success_msg','Event Delete Successfully!');
        }
        else
        {
            return redirect('/admin/events')->with('deleteEvent_error_msg','Something Went Wrong!');
        }    

    }

    public function eventForm($id = '')
    {
        $data = [];
        if ($id) {
            $data=Event::find($id);
   
        }

        return view('admin.media.event_form', compact('data'));
    }


    public function video()
    {
        $data=Video::all();
        return view('admin.media.admin_video',compact('data'));
    }

    public function videoForm($id='')
    {
        $data=[];
        if($id)
        {
            $data=Video::find($id);
        }
        return view('admin.media.video_form',compact('data'));
    }

    public function addVideo(Request $request)
    {
        $this->validate($request, [
            'title' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'link' => 'regex:/^[\pL\s\-\,\.\&\w-\>\<\:\;\"\/\=]+$/u|required',
        ]);
        $request=$request->toArray();
        $flag=Video::create($request);
        if(isset($flag->id))
        {
            return redirect('/admin/video')->with('addvideo_success_msg','Video Added Successfully!');
        }
        else
        {
             return redirect('/admin/video')->with('addvideo_error_msg','Something Went Wrong!');
        } 
    }

    public function updateVideo($id,Request $request)
    {
        $this->validate($request, [
            'title' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'link' => 'regex:/^[\pL\s\-\,\.\&\w-\>\<\:\;\"\/\=]+$/u|required',
        ]);
        $request=$request->toArray();
        $data=Video::find($id);
        $data->fill($request);
        $flag=$data->save();
        if($flag)
        {
            return redirect('/admin/video')->with('updateVideo_success_msg','Video Updated Successfully!');
        }   
        else
        {
             return redirect('/admin/video')->with('updateVideo_error_msg','Something Went Wrong!');
        } 
    }

    public function deleteVideo($id)
    {
        if($id)
        {
            $data=Video::find($id);
            $flag=$data->delete();
            if($flag)
            {
                return redirect('/admin/video')->with('deleteVideo_success_msg','Video Deleted Successfully!');
            }   
            else
            {
                 return redirect('/admin/video')->with('deleteVideo_error_msg','Something Went Wrong!');
            } 
        }

        return redirect('/admin/video');
    }






}
