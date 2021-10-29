<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    //
    use SoftDeletes;
    protected $table = 'job_applications';
    protected $fillable = ['date','fname','lname','email','job_id','resume'];
    protected $dates = ['deleted_at'];
}
