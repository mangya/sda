<?php

namespace SDA\Http\Controllers;


use Illuminate\Support\Str;
use SDA\Geotag;
use SDA\Tree;
use SDA\Http\Controllers\QRCodeController;
use Illuminate\Http\Request;

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

    public function printBulkQRCode($geotagIds){
        //dd($geotagIds);
        $idsArray = explode(',', $geotagIds); // Split the string into an array
        $details = [];
        $qrCodes = [];

        // Fetch details and generate QR codes for each ID
        foreach ($idsArray as $id) {
            $geotagDetail = Geotag::getGeotagDetails(trim($id)); // Get details for each ID
            if ($geotagDetail) { // Ensure there is a record found
                $details[] = $geotagDetail;
                $qrData = url("/geotags/" . trim($id));
                $qrCodes[] = QRCodeController::generate($qrData); // Generate QR code
            }
        }

        return view('layouts.modules.printBulkQR', compact('details', 'qrCodes'));

    }

    public function filterGeotags(Request $request)
    {
        //dd($request->all());
        $driveId = $request->input('treePlantationDriveId');

        if ($driveId) {
            
        } else {
            $tagList = Geotag::getGeotagDetails();
        }
        
        //return view('layouts.modules.geotagListRender', compact('tagList'))->render();
        return response(view('layouts.modules.geotagListRender', compact('tagList')))->header('Content-Type', 'text/html');
        //return response()->view('layouts.modules.geotagListRender', compact('tagList'))->render();
    }

    public function printQRCode($geotagPk){
        $details = Geotag::getGeotagDetails($geotagPk);
        $qrData = url("/geotags/$geotagPk");
        $qrcode = QRCodeController::generate($qrData);
        return view('layouts.modules.printQR',compact('details','qrcode'));
    }
}
