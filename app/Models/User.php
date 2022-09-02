<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;


class User extends Model
{
    protected $hidden = [
        "mdp",
    ];
    
    protected $fillable  = [
        "nom",
        "prenom",
        "email",
        "mdp",
        "sexe",
        "age",
        "avatar",
        "type",
    ];

    use HasFactory;
}


// Modèles vous permet de récupérer, d'insérer et de mettre à jour des informations dans votre table de données.