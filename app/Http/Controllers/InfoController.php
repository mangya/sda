<?php

namespace SDA\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showDryWaste()
    {
    	return view('website.info.dry_waste');
    }

    public function showWetWaste()
    {
    	return view('website.info.wet_waste');
    }

    public function showEWaste()
    {
    	return view('website.info.e_waste');
    }

    public function showDryHazardousWaste()
    {
    	return view('website.info.dry_hazardous');
    }

    public function showWetHazardousWaste()
    {
    	return view('website.info.wet_hazardous');
    }

    public function showBioMedicalWaste()
    {
    	return view('website.info.bio_medical_waste');
    }

    public function showOilWaste()
    {
    	return view('website.info.oil_waste');
    }

    public function showIndustrialWaste()
    {
    	return view('website.info.industrial_waste');
    }

    public function showHolisticWaste()
    {
    	return view('website.info.holistic_waste');
    }


}
