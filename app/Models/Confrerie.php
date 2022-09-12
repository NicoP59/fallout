<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confrerie extends Model
{

    protected $fillable  = [
        "confrerie",
        "img",
        "nom",
        "chef",
        "description",
    ];

    use HasFactory;
}
