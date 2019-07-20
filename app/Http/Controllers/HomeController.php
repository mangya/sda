<?php

namespace SDA\Http\Controllers;

use Mail;
use SDA\Mail\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
    	return view('website.home');
    }

    public function showAbout()
    {
    	return view('website.about');
    }

    public function showEvents()
    {
    	return view('website.events');
    }

    public function showNews()
    {
    	return view('website.news');
    }

    public function showContactUs()
    {
        return view('website.contact_us');
    }

    public function showWasteManagementAwareness()
    {
    	return view('website.waste_management_awareness');
    }

    public function showWasteManagementCampaign()
    {
        return view('website.waste_management_campaigns');
    }

    public function showWasteManagementActivities()
    {
        return view('website.waste_management_activities');
    }

    public function showForestation()
    {
    	return view('website.forestation');
    }

    public function sendContactMessage(Request $request)
    {
        $data['email'] = $request->get('email');
        $data['name'] = $request->get('name');
        $data['subject'] = $request->get('subject');
        $data['message'] = $request->get('message');

        Mail::to('mangesh.ghadigaonkar@gmail.com')
            ->send(new ContactMessage($data));

        return redirect()->back();
    }
}
