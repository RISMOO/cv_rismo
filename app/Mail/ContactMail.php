<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data; // je pourrai utilisé mes données dans ma vue

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)//je recois un tableau de données
    {
        $this->data=$data; // je creer un attribut qui contiendra nos données
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact.contact-form', $this->data);
        //retourn la vue contact qui se trouve dans le dossier view/email/contact
    }
}
