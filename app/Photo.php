<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class Photo extends Model
{
    //
 /*   use SoftDeletes;*/
    protected $table = 'photos';
    protected $fillable = ['photo','album_id','status'];
    protected $dates = ['deleted_at'];
    
    public function album()
    {
    	return $this->belongsTo('App\Album','id','album_id');
    }

}
