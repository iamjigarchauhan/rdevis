<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    //
    use SoftDeletes;
    protected $table='managements';
    protected $fillable=['name', 'designation','description','image','status','page_title','meta_keywords','meta_description'];
}
