<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confrerie extends Model
{

    protected $fillable  = [
        "img",
        "nom",
        "chef",
        "description"
    ];
    use HasFactory;
}
