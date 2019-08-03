<?php

namespace SDA;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sd_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'contact_no', 'message', 'owner', 'last_updated_by'
    ];

    public function create($name, $email, $contact_no, $message_txt)
    {
    	$message = new Messages();
    	$message->name = $name;
    	$message->email = $email;
    	$message->contact_no = $contact_no;
    	$message->message = $message_txt;
    	$message->owner = $email;
    	$message->last_updated_by = $email;
    	$message->save();
    }
}
