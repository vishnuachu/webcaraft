<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignupMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $emailid;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $emailid, $phone)
    {
        $this->name = $name;
        $this->emailid = $emailid;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('vishnuachu.cp@gmail.com')
        ->view('emails.SignupMail');
    }
}
