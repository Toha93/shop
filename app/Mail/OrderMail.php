<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $adr;
    public $sum;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $adr, $sum)
    {
        $this->name = $name;
        $this->adr = $adr;
        $this->sum = $sum;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order');
    }
}
