<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;


class IndustriesController extends Controller
{
    //
	public function industries($id)
    {
		$data=Industry::find($id);
		return view('industries.industry_details',compact('data'));
    }
    
	public function index()
    {
		$data=Industry::all();
		return view('industries.industry_list',compact('data'));
    }
}
