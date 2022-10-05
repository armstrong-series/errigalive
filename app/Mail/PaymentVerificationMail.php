<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\TicketModel;

class PaymentVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, TicketModel $ticket)
    {
        $this->user = $user;
        $this->ticketModel = $ticket;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('Email.payment', ["user" =>$this->user, "ticket" =>$this->ticketModel]);
    }
}
