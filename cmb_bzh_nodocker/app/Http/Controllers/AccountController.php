<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    // Méthode pour afficher la liste des comptes
    public function index()
    {
        // Récupérer tous les utilisateurs depuis le modèle User
        $comptes  = User::all();

        // Retourner la vue avec les données des utilisateurs
        return view('compte', ['comptes' => $comptes]);
    }

    // Méthode pour afficher le formulaire de création de compte
    public function create()
    {
        return view('creation-compte');
    }

    // Méthode pour stocker un nouveau compte
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'numCarte' => 'required|string|max:16|unique:users',
            'facilite_caisse' => 'required|numeric',
            'montant' => 'required|numeric',
        ]);

        // Créez un nouvel utilisateur avec les données du formulaire
        $user = new User();
        $user->email = $request->email;
        $user->numCarte = $request->numCarte;
        $user->facilite_caisse = $request->facilite_caisse;
        $user->montant = $request->montant;
        $user->save();

        // Redirigez directement l'utilisateur vers la vue "compte.blade.php" après avoir enregistré le compte
        return view('compte')->with('success', 'Account created successfully!');
    }
}
