<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['product_name','product_category_id','product_image','product_description','page_title','meta_keywords','meta_description'];
    protected $dates = ['deleted_at'];
    
    public function product_category()
    {
    	return $this->belongsTo('App\ProductCategory','id','product_category_id');
    }

    
}
