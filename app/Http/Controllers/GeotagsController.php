<?php

namespace SDA\Http\Controllers;


use Illuminate\Support\Str;
use SDA\Geotag;
use SDA\Tree;

class GeotagsController extends Controller
{
    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => Str::slug(Tree::getTreeName($request->get('tree_id')),'-')]);
        }
    }

    public function showGeotagDetails($id){
        $data = Geotag::getGeotagDetails($id);

        return view('website.geotags')->with('details',$data);
    }
}
