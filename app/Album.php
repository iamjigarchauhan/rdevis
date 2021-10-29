<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    //
     use SoftDeletes;
    protected $table = 'albums';
    protected $fillable = ['name','date'];
    protected $dates = ['deleted_at'];
    
     public function photo()
    {
    	return $this->hasMany('App\Photo','album_id','id');
    }
}
