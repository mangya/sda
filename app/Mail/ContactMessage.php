<?php

namespace SDA\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;

    protected $email;

    protected $contact_no;

    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->contact_no = $data['contact_no'];
        $this->message = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_message')
                                                ->subject('SDA Website Contact')
                                                ->with(['name' => $this->name,
                                                            'email' => $this->email,
                                                            'contact_no' => $this->contact_no,
                                                            'message_txt' => $this->message]);
    }
}
