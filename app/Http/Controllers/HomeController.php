<?php

namespace SDA\Http\Controllers;

use Mail;
use Auth;
use SDA\Team;
use SDA\Quotes;
use SDA\Messages;
use SDA\Testimonials;
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
        $testimonials = Testimonials::where('is_active',1)->get();

    	return view('website.about', compact('team','testimonials'));
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

    public function showRecyclersAssociation()
    {
        return view('website.recyclers_association');
    }

    public function showTeachersAssociation()
    {
        return view('website.teachers_association');
    }

    public function showRoleModel()
    {
        return view('website.role_model');
    }

    public function showActivities()
    {
        return view('website.our_activities');
    }

    public function showMagicBucket()
    {
    	return view('website.magic_bucket');
    }

    public function sendContactMessage(Request $request)
    {
        $email = $data['email'] = trim($request->get('email'));
        $name = $data['name'] = trim($request->get('name'));
        $contact_no = $data['contact_no'] = trim($request->get('contact_no'));
        $message_txt = $data['message'] = trim($request->get('message'));

        // Mail::to('swachhadombivli@gmail.com')
        //     ->send(new ContactMessage($data));

        $message = new Messages();
        $message->create($name, $email, $contact_no, $message_txt);

        return redirect()->back();
    }

    public function showWebLogin()
    {
        $quotes = Quotes::where('is_active',1)->get();
        return view('website.login', compact('quotes'));
    }

    public function showWebRegister()
    {
        $quotes = Quotes::where('is_active',1)->get();
        return view('website.register', compact('quotes'));
    }
}
