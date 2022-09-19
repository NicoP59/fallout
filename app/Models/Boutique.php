<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    protected $fillable  = [
        "iduser",
        "idproduit",
        "nom",
        "description",
        "prix",
        "img",
        "quantité",
    ];
    
    use HasFactory;
}
