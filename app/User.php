<?php

namespace SDA;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'oc_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'avatar', 'login_id', 'email','mobile', 'password', 'role', 'is_active', 'language', 
        'email_confirmed', 'email_confirmation_code', 'first_login', 'owner', 'last_updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function create($name, $email, $mobile, $password, $role)
    {
        $user = new User();
        $user->full_name = $name;
        $user->mobile = $mobile;
        $user->login_id = $user->email = $email;
        $user->password = bcrypt($password);
        $user->role = $role;
        $user->owner = $email;
        $user->last_updated_by = $email;
        $user->save();

        return $user->id;
    }

    public function generateOTP()
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
}
