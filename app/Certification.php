<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certification extends Model
{
    //
    use SoftDeletes;
    protected $table='certifications';
    protected $fillable=['description', 'status'];
   /* protected $dates=['deleted_at'];*/
}
