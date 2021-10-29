<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    //
    use SoftDeletes;
    protected $table='inquiries';
    /*protected $fillable= ['details'];*/
     protected $fillable= ['name','email','phone','company','comment'];
}
