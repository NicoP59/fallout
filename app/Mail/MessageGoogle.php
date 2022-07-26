<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageGoogle extends Mailable
{
    use Queueable, SerializesModels;
      public $data; // Données pour la vue

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
         $this->data = $data;
        //pas oublier de remettre le $data dans le construct au dessus
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->data['message']);
        
        return $this->from("testfoadsofip@gmail.com") // L'expéditeur
                    ->subject("Message via le SMTP Google") // Le sujet
                    ->view("emails.template-mail-exemple",['data'=>$this->data]); // La vue
    }
}

