<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable = ['nom', 'numero_carte', 'date_solde', 'facilite_caisse', 'montant'];

    // Vous pouvez définir d'autres relations ou méthodes ici si nécessaire
}
