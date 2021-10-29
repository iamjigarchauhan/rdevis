<?php 

namespace App\Helpers;
use App\Service;
use App\Industry;
use App\ProductCategory;
use App\Product;


class HeaderMenuData
{
	
	   static function getServiceData() 
	   {
	      return Service::select('id','name')->get();
	   }   

	   static function getIndustryData() 
	   {
	      return Industry::select('id','name')->get();
	   }   

	   static function getProductCategoryData() 
	   {
	     
	      return ProductCategory::with('product')->get();
	     	 	
	   }   
	
}

 ?>