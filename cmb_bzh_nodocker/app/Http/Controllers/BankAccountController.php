<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankAccountController extends Controller
{
    // Méthode pour créer un nouveau compte bancaire
    public function create()
    {
        // Générer un montant aléatoire entre 0 et 1000
        $randomAmount = rand(0, 1000);

        // Récupérer l'ID de l'utilisateur connecté
        $userId = Auth::id();

        // Créer un nouveau compte bancaire avec le montant aléatoire et l'ID de l'utilisateur connecté
   

        // Rediriger l'utilisateur vers une vue ou un message de succès
        return redirect()->route('compte')->with('success', 'Compte bancaire créé avec succès !');
    }
}

