<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Salarie;



class profileMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private  Salarie $salarie)
    {
       
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Profile Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
       
        $date=$this->salarie->created_at;
        $id=$this->salarie->id_salarie;
        $href= url('').'/verify_email/'.base64_encode($date.'///'.$id);
        return new Content(
            view: 'emails.inscription',
            with:[
                'email' =>$this->salarie->email,
                'nom'=>$this->salarie->nom,
                'href'=>$href
            ]
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
