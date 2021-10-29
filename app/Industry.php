<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    //
    use SoftDeletes;
    protected $table = 'industries';
    protected $fillable = ['name','image','description','data_img','page_title','meta_keywords','meta_description'];
    protected $dates = ['deleted_at'];
}
