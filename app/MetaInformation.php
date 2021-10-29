<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaInformation extends Model
{
    //
    protected $table='meta_information';
    protected $fillable=['page', 'page_title','meta_keywords','meta_description'];
}
