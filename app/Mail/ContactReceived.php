<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Mail\Mailable;

class ContactReceived extends Mailable
{
    /**
     * The subject of the message.
     *
     * @var string
     */
    public $subject = '[Gertech] Novo contato recebido.';

    /**
     * The contact message.
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-received');
    }
}
