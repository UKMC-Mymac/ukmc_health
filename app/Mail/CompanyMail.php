<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompanyMail extends Mailable
{


    public $details;


    public function __construct($details)
    {
        $this->details = $details;
    }




    public function build()
    {
        return $this
            ->subject('Thank You for Your Enquiry – UKMC Health')
            ->view('emails.company');
    }

    // public function build()
    // {
    //     return $this
    //         ->subject('New Contact Enquiry – UKMC Health')
    //         ->view('emails.contactpage');
    // }
}
