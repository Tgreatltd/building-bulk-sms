<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $subject, $details, $email;

    public function __construct($data)
    {
        $this->subject = $data['subject'];
        $this->details = $data['message'];
        $this->email = $data['email'];
        // $this->email = $data['email'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {


        return new Envelope(
            // subject: 'Send Email',
            // from: new Address('olamoyeguntimothy@gmail.com', 'SMSBULK'),
            from: new Address('olamoyegunoluwagreat@gmail.com', 'TEEGREATUNIVERSAL LTD'),
            // subject: 'Class Trial',
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'view.name',
            view: 'mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
