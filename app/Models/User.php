<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Events\Registered;



class User extends Authenticatable implements MustVerifyEmail
{
    protected $hidden = [
        "mdp",
    ];
    
    protected $fillable  = [
        "iduser",
        "nom",
        "prenom",
        "email",
        "mdp",
        "sexe",
        "age",
        "avatar",
        "type",
    ];

    use HasFactory, Notifiable;


    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'isVerified' => 'timestamp',
    ];

    
}


// Modèles vous permet de récupérer, d'insérer et de mettre à jour des informations dans votre table de données.