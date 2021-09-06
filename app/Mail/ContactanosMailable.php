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
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    //re recibe la informacion que se manda para el envio del correo
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
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
