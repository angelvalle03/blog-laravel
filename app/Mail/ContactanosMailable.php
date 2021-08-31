<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    //Este sera el asunto que lleve el correo
    public $subject = "Informacion de contacto";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // este metodo se encarga de traer una vista en esa vista debe estar el contenido del correo
    public function build()
    {
        return $this->view('emails.contactanos');
    }
}
