<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;
use App\Event;
use App\MetaInformation;
use App\Video;
use DB;

class MediaController extends Controller
{
    //
    public function mediaList(){
        return view('mediaList');
    }
    
    public function media()
    {
    	
    /*	$albums=Album::all();
    	$photos=Photo::where('status',"on")->get();*/
    	/*echo "<pre>";
    	print_r($photos->toArray());
    	die();*/
    	
    	$data=Album::leftJoin('photos','albums.id','=','photos.album_id')->select('albums.id','albums.name','photos.photo')->whereNull('photos.deleted_at')->whereNull('albums.deleted_at')->where('status','on')->groupBy('albums.name')->paginate(12);
        // $data=$data->toArray();
      
    	
        $mdata=MetaInformation::where('page','img_page')->get();
        $mdata=$mdata->toArray();

       

    	return view('media',compact('data','mdata'));
    }

    public function showAlbumPhotos($id)
    {
    	$photos=Photo::where('album_id',$id)->where('status',"on")->paginate(9);
    // 	$photos=$photos->toArray();
    	$album=Album::find($id);
    	$album_name=$album->name;
    	/*echo "<pre>";
    	print_r($photos);
    	die();*/
         $mdata=MetaInformation::where('page','img_page')->get();
        $mdata=$mdata->toArray();
    	return view('album_photo',compact('album_name','photos','mdata'));
    }

    public function showEvents()
    {
    	$events=Event::orderBy('date','DESC')->get();
    	/*echo "<pre>";
    	print_r($events->toArray());
    	die();*/
         $mdata=MetaInformation::where('page','event_page')->get();
        $mdata=$mdata->toArray();
    	return view('events',compact('events','mdata'));
    }
    
    public function showVideos()
    {

        $vdata=Video::paginate(12);
        // $vdata=$vdata->toArray();

        return view('video',compact('vdata'));
    }


}
