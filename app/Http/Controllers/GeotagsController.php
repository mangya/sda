<?php

namespace SDA\Http\Controllers;

use SDA\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SDA\Tree;

class GeotagsController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => Str::slug(Tree::getTreeName($request->get('tree_id')),'-')]);
        }
    }
}
