<?php

namespace App\Helpers;

use App\Address;
use App\Industry;
use App\Product;
use App\ProductCategory;
use App\Service;

class HeaderMenuData
{

    public static function getServiceData()
    {
        return Service::select('id', 'name')->get();
    }

    public static function getIndustryData()
    {
        return Industry::select('id', 'name')->get();
    }

    public static function getProductCategoryData()
    {
        return ProductCategory::with('product')->get();

    }

    public static function fetchAddress()
    {
        $data = Address::first()->location;
        if ($data != null) {
            return $data;
        } else {
            return "B- 96, 2nd, 3rd Floor, Lajpat Nagar- I, Lajpat Nagar 1,	New Delhi-110024, Delhi, India";
        }

    }

}
