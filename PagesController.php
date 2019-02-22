<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$product=new \App\course;
    	$list=$product::all();
    	return view("product",["list"=>$list]);
    }
}
