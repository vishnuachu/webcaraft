<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusMail extends Mailable
{
    use Queueable, SerializesModels;
    public $status;
    public $username;
    public $orderid;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status, $username, $orderid)
    {
        $this->status = $status;
        $this->username = $username;
        $this->orderid = $orderid;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('vishnuachu.cp@gmail.com')
        ->view('emails.OderStatus');
    }
}
