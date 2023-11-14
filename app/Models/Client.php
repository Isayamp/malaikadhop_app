<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom_client',
        'nom_client',
        'adresse_client',
        'email_client',
        'telephone_client',
        
    ];
}