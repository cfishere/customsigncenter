<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;


class ContactUs extends Mailable
{
   use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $data)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: "New Contact from Custom Sign Center Website",
            replyTo: 
            [
                new Address($this->data['email'], $this->data['name']),
            ]
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.contactus',
            with: [
                'content' => $this->data['body'],
            ],     
        );
    }

   /**
     * Get the attachments for the message.
     * array<int, \Illuminate\Mail\Mailables\Attachment>
     */
   /* public function attachments(): array
    {
        if(null !== $this->data['file'])
        return [
            Attachment::fromData(fn () => $this->data['file'], 'document.pdf')
                    ->withMime('application/pdf'),
        ];
    }*/
}
