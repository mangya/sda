<?php

namespace SDA\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => str_slug($request->get('name'))]);
        }
    }
}
