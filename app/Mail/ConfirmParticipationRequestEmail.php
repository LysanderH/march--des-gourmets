<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmParticipationRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $exhibitor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($exhibitor)
    {
        $this->exhibitor = $exhibitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.become-exhibitor', ['exhibitor' => $this->exhibitor]);
    }
}
