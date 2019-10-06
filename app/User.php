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
        'full_name', 'avatar', 'login_id', 'email', 'password', 'role', 'is_active', 'language', 
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

    public function create($name, $email, $password, $role)
    {
        $user = new User();
        $user->full_name = $name;
        $user->login_id = $user->email = $email;
        $user->password = bcrypt($password);
        $user->role = $role;
        $user->owner = $email;
        $user->last_updated_by = $email;
        $user->save();
    }
}
