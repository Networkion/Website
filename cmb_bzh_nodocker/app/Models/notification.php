<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['objet', 'contenu'];

    // Vous pouvez définir d'autres relations ou méthodes ici si nécessaire
}
