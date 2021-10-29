<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;


class ProductsController extends Controller
{
    //


    public function products($prod_cat_id,$prod_id)
    {
    	
    
       
    	/* $product_category_arr = array('paint-application' => "Paint Application",
    	 								'planning-consulting' => "Planning Consulting",
    	 								'none'=>"#",
    								);


    	 $product_arr = array(	'pretreatment' =>"Pretreatment", 
								'spray-booth'=>"Spray Booth",
								'ovens'=>"Ovens",
								'paint-robots-reprocators-antone' =>"Paint Robots & Reprocators/Antone",
								'ced-electro-cathod'=>"CED/Electro Cathod",
								'HVAC-paint-room'=>"HVAC/Paint room",
													
    							'passenger-cars' =>"Passengers Cars", 
								'commercial-vehicle'=>"Commercial Vehicle",
								'two-three-wheelers'=>"Two & Three Wheelers",
								'railway' =>"Railway",
								'construction-equipments'=>"Construction Equipments",
								'agricultures'=>"Agricultures",
								'environment-Pollution'=>"Environment & Pollution",
													
    							'conveyor-technology'=>"Conveyor Technology",
    							'digitization-software-controls'=>"Digitalization and software Controls", 
						);

    	$product_category_name=$product_category_arr[$product_category];
    		
    	
    	$product_name=$product_arr[$product];*/
        $pdata=Product::find($prod_id);
        $cdata=ProductCategory::find($prod_cat_id);

    	
    	/*die();*/
    
  
    	return view('products.product_details',compact('pdata','cdata'));
    }



    public function showProductCategories()
    {
        $data=ProductCategory::all();
        $data= $data->toArray();
        return view('products.product_categories',compact('data'));
    }

    public function showProducts($id)
    {
       /* echo "string";
        die();*/
        $product_category=ProductCategory::find($id);
        $data=Product::where('product_category_id',$id)->get();
        $data= $data->toArray();
        /*echo "<pre>";
        print_r($data);
        die();*/
        return view('products.products',compact('data','product_category'));
    }

}
