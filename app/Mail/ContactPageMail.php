<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactPageMail extends Mailable
{
    // use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Contact Page Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }

    public $newdetails;
    public $recipientType;

    public function __construct($newdetails, string $recipientType)
    {
        $this->newdetails = $newdetails;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subject = $this->recipientType === 'company' ? 'New Contact Enquiry – UKMC Health - By : ' . $this->newdetails['name'] : 'Thank You for Your Enquiry – UKMC Health';


        return $this
            ->subject($subject)
            ->view('emails.contactpage');
    }
}
