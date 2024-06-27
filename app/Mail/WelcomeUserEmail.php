<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeUserEmail extends Mailable
{
   


    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        dd('dd');
        return new Envelope(
            subject: 'Welcome',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    { dd('dd');
        return new Content(
            view: 'emails.user-welcome',
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