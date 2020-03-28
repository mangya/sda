<?php

namespace SDA\Http\Controllers;

use SDA\Page;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showWasteClassification()
    {
    	$content = Page::where('slug','waste-classification')->first();
    	return view('website.info.page_view', compact('content'));
    }

    public function showPage($slug)
    {
    	$content = Page::where('slug',$slug)->first();
    	return view('website.info.page_view', compact('content'));
    }
}
