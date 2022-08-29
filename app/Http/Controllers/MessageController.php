<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importation des classes pour le mail
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

use App\Mail\MessageGoogle;

class MessageController extends Controller
{
    
    // Le formulaire du message
    public function formMessageGoogle()
    {
        return view("emails.message-google");
    }

    // Envoi du mail aux utilisateurs
    public function sendMessageGoogle()
    {

        #1. Validation de la requête
        // En laravel request est déjà une function de laravel
        // Plus besoin de mettre Request $request ça c'est du Symfony
        $this->validate(request(), ['message' => 'bail|required']);

        #2. Récupération des utilisateurs
        // $users = User::all();

        $tabData = [
            'message' => request('message'), 
            'email' => request('email'), 
            'subject' => request('subject')
        ];

        // dd($tabData);

        #3. Envoi du mail
        Mail::to('testfoadsofip@gmail.com')->send(new MessageGoogle($tabData));
        return back()->withText("Message envoyé");
    }
}

