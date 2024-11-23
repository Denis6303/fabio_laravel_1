<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    // Nom de la table, si elle n'est pas plurielle ou si elle diffère du nom du modèle
    protected $table = 'channels';

    // Les champs qui peuvent être remplis via une insertion de données massive (mass assignment)
    protected $fillable = ['name'];

    // Si vous n'utilisez pas les timestamps, désactivez-les comme suit :
    // public $timestamps = false;
}
