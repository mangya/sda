<?php

namespace SDA\Http\Controllers;


use Illuminate\Support\Str;
use SDA\Geotag;
use SDA\Tree;
use SDA\Http\Controllers\QRCodeController;

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

    public function printList(){
        $tagList = Geotag::getGeotagDetails();
        return view('layouts.modules.print_geotag_list_view')->with('tagList',$tagList);
    }

    public function printQRCode($geotagPk){
        $details = Geotag::getGeotagDetails($geotagPk);
        $qrData = url("/geotags/$geotagPk");
        $qrcode = QRCodeController::generate($qrData);
        return view('layouts.modules.printQR',compact('details','qrcode'));
    }
}
