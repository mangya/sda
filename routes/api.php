<?php

use SDA\OTP;
use SDA\User;
use SDA\Mail\OTPMessage;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register',function (Request $request) {
	$validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:oc_users',
        'name' => 'required',
        'mobile' => 'required',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required',
    ]);

    if ($validator->fails()) {
    	return response()->json(['status' => 'error', 'errors' => $validator->errors()], 200);
    }

    $user = new User();
    $user_id = $user->create($request->get('name'), $request->get('email'), $request->get('mobile'), $request->get('password'), 'Member');

    if(!empty($user_id)) {

        $data['otp'] = $user->generateOTP();

        $otp = new OTP();
        $otp->otp_for = $request->get('email');
        $otp->otp = $data['otp'];
        $otp->is_active = 1;
        $otp->save();

        Mail::to($request->get('email'))
            ->send(new OTPMessage($data));

        return response()->json(['status'=>'success','msg'=>'OTP sent on user email'], 200);
    } else {
    	return response()->json(['status'=>'error','msg'=>'Something went wrong!'], 200);
    }
});

Route::post('verify-otp',function (Request $request) {
	$validator = Validator::make($request->all(), [
        'otp' => 'required',
    ]);

    if ($validator->fails()) {
    	return response()->json(['status' => 'error', 'errors' => $validator->errors()], 200);
    }
	$email = OTP::where(['otp' => $request->get('otp'), 'is_active' => 1])->pluck('otp_for')->first();
    if($email) {
        $user = User::where('login_id', $email)->first();
        $user->is_active = 1;
        $user->email_confirmed = 1;
        $user->save();
        Auth::login($user);
        OTP::where(['otp' => $request->get('otp'), 'is_active' => 1])->update(['is_active' => 0]);
        return response()->json(['status'=>'success','msg'=>'OTP verified'], 200);
    } else {
    	return response()->json(['status'=>'error','msg'=>'OTP is not valid'], 200);
    }
});
