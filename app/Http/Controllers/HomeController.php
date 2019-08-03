<?php

namespace SDA\Http\Controllers;

use Mail;
use Auth;
use SDA\Team;
use SDA\Quotes;
use SDA\Messages;
use SDA\Mail\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        if (Auth::check()) {
            if(auth()->user()->role == "System Administrator" || auth()->user()->role == "Administrator") {
                return redirect()->route('show.app.modules');
            }
        }

        $quotes = Quotes::where('is_active',1)->get();

        return view('website.home', compact('quotes'));
    }

    public function showAbout()
    {
        $team = Team::where('is_active',1)->get();

    	return view('website.about', compact('team'));
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
        $email = $data['email'] = trim($request->get('email'));
        $name = $data['name'] = trim($request->get('name'));
        $contact_no = $data['contact_no'] = trim($request->get('contact_no'));
        $message_txt = $data['message'] = trim($request->get('message'));

        Mail::to('mangesh.ghadigaonkar@gmail.com')
            ->send(new ContactMessage($data));

        $message = new Messages();
        $message->create($name, $email, $contact_no, $message_txt);

        return redirect()->back();
    }
}
