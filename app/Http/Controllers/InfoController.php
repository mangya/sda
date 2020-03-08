<?php

namespace SDA\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showWasteClassification()
    {
    	return view('website.info.waste_classification');
    }
}
