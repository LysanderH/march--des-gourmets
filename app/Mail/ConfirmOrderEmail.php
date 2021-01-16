<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmOrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $selling;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($selling)
    {
        $this->selling = $selling;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirm-order', ['selling' => $this->selling])->subject('Confirmation achat de tickets');
    }
}
