<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquiryPageDetail extends Model
{
    //
    protected $table='inquiry_page_details';
    protected $fillable=['inquiry_form_msg','inquiry_form'];
}
