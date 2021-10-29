<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherBranch extends Model
{
    //
    use SoftDeletes;
    protected $table='other_branches';
    protected $fillable=['branch_name','address'];
}
