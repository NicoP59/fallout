<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable  = [
        "idpanier",
        "iduser",
        "idproduit",
        "quantité",

    ];

    // public function add() {
    //     return $this->belongsTo(Boutique::class);
    // }

    use HasFactory;
}
