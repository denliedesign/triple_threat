<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrialMail extends Mailable
{
    use Queueable, SerializesModels;
    public $trial;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($trial)
    {
        $this->trial = $trial;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.trial-form');
    }
}
