<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;


    public $messageData;  // لتخزين البيانات القادمة من النموذج
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
         $this->messageData = $data;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Message Mail',
        );
    }

    /**
     * بناء رسالة البريد الإلكتروني.
     *
     * @return $this
     */public function build()
{
    return $this->subject('New Contact Message')
                ->view('emails.contact');
}
}
