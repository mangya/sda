<?php

namespace SDA\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => Str::slug($request->get('title'),'-')]);
        }
    }
}
