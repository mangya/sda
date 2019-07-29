<?php

namespace SDA\Http\Controllers;

use SDA\Directory;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function showDirectory()
    {
    	$directory_items = Directory::where('is_active',1)->where('is_approved',1)->get();

    	return view('website.directory', compact('directory_items'));
    }
}
