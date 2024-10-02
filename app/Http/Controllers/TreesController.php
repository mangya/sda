<?php

namespace SDA\Http\Controllers;

use SDA\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TreesController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => Str::slug($request->get('name'),'-')]);
        }
    }

    public function showProducts()
    {
        $products = Product::where('is_active',1)->orderBy('created_at','desc')->paginate(6);;
        return view('website.eco_friendly_products',compact('products'));
    }
}
