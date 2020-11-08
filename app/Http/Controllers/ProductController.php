<?php

namespace SDA\Http\Controllers;

use SDA\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => str_slug($request->get('title'),'-')]);
        }
    }

    public function showProducts()
    {
        $products = Product::where('is_active',1)->orderBy('created_at','desc')->paginate(6);;
        return view('website.eco_friendly_products',compact('products'));
    }
}
