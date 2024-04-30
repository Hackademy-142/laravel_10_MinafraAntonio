<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BecomeLessonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $textMessage;
    /**
     * Create a new message instance.
     */
    public function __construct($_name, $_email, $_textMessage)
    {
        //
        $this->name = $_name;
        $this->email = $_email;
        $this->textMessage = $_textMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Become Lesson Mail',
            from : new Address('xyxujufuxy@mailinator.com', 'McKenzie Holmes')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.becomeLessorMail',
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
