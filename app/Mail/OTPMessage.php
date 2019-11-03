<?php

namespace SDA\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OTPMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $otp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->otp = $data['otp'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.otp_message')
                                                ->subject('Verify your email')
                                                ->with(['otp' => $this->otp]);
    }
}
