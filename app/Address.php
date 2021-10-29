<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'address';
    protected $fillable = ['support_email','sales_email','director_email','support_phone','sales_phone','director_phone','location'];
}
