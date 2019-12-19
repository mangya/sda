<?php

namespace SDA\Http\Controllers;

use Mail;
use Auth;
use SDA\OTP;
use SDA\User;
use SDA\Team;
use SDA\Blog;
use Validator;
use SDA\Quotes;
use SDA\Messages;
use SDA\Testimonials;
use SDA\Mail\ContactMessage;
use SDA\Mail\OTPMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        if (Auth::check()) {
            if(auth()->user()->role == "System Administrator" || auth()->user()->role == "Administrator") {
                return redirect()->route('show.app.modules');
            } else if(auth()->user()->role == "Author") {
                return redirect()->route('show.blog_list');
            }
        }

        $blogs = Blog::where('is_active',1)->with('author')->orderBy('created_at','desc')->limit(2)->get();
        $quotes = Quotes::where('is_active',1)->get();

        return view('website.home', compact('quotes','blogs'));
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

    public function showTerms()
    {
        return view('website.terms');
    }

    public function showPrivacyPolicy()
    {
        return view('website.privacy_policy');
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

    public function showRegistrationSuccess()
    {
        return view('website.registration_success');
    }

    public function sendContactMessage(Request $request)
    {

        $messages = ['captcha.captcha'=>'Invalid captcha code.']; 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required|numeric|min:10',
            'captcha' => 'required|captcha'
        ],$messages);

        $email = $data['email'] = trim($request->get('email'));
        $name = $data['name'] = trim($request->get('name'));
        $contact_no = $data['contact_no'] = trim($request->get('contact_no'));
        $message_txt = $data['message'] = trim($request->get('message'));

        Mail::to('swachhadombivli@gmail.com')
             ->send(new ContactMessage($data));

        $message = new Messages();
        $message->create($name, $email, $contact_no, $message_txt);
        return response()->json(['success'=>'Record is successfully added']);

        //return redirect()->back();
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }

    public function showWebLogin()
    {
        if (Auth::check()) {
            if(auth()->user()->role == "Author") {
                return redirect()->route('show.user_blogs');
            }
        }

        $quotes = Quotes::where('is_active',1)->get();
        return view('website.login', compact('quotes'));
    }

    public function showWebRegister()
    {
        $quotes = Quotes::where('is_active',1)->get();
        return view('website.register', compact('quotes'));
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:oc_users',
            'name' => 'required',
            'mobile' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();
        $user_id = $user->create($request->get('name'), $request->get('email'), $request->get('mobile'), $request->get('password'), 'Member');

        if(!empty($user_id)) {

            $data['otp'] = $this->generateOTP();

            $otp = new OTP();
            $otp->otp_for = $request->get('email');
            $otp->otp = $data['otp'];
            $otp->is_active = 1;
            $otp->save();

            Mail::to($request->get('email'))
                ->send(new OTPMessage($data));

            return redirect()->route('otp.form');
            //return response()->json(['status'=>'success','msg'=>'User is successfully registered']);
        }

        return redirect()->back();
        
    }

    public function showVerifyOTP()
    {
        if (!Auth::check()) {
            $quotes = Quotes::where('is_active',1)->get();
            return view('website.verify_otp', compact('quotes'));
        }
        
        return redirect()->route('show.website');         
    }

    public function verifyOTP(Request $request)
    {
        $email = OTP::where(['otp' => $request->get('otp'), 'is_active' => 1])->pluck('otp_for')->first();
        if($email) {
            $user = User::where('login_id', $email)->first();
            Auth::login($user);
            OTP::where(['otp' => $request->get('otp'), 'is_active' => 1])->update(['is_active' => 0]);
            return redirect()->route('show.website');
        } else {
            return redirect()->back()->withInput()->withErrors(['error'=>'OTP is not valid']);
        }
    }

    protected function generateOTP()
    {
        $otp = '';
        while(empty($otp)) {
            $otp = generate_password(4, true);
            $otp_exists = OTP::where(['otp' => $otp,'is_active' => 0])->pluck('otp')->first();
            if(!empty($otp_exists)) {
                $otp = '';
            }
        }
        return $otp;
    }

    public function showKdmcDownloads()
    {
        return view('website.kdmc_downloads');
    }
}
