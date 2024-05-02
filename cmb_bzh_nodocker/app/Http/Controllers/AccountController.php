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
        $comptes = User::all();

        // Retourner la vue avec les données des utilisateurs
        return view('compte', compact('comptes'));
    }

    // Méthode pour afficher le formulaire de création de compte
    public function create()
    {
        return view('creation-compte');
    }

    // Méthode pour stocker un nouveau compte
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'numCarte' => 'required|string|max:16|unique:users',
            'facilite_caisse' => 'required|numeric',
            'montant' => 'required|numeric',
        ]);

        // Créer un nouvel utilisateur avec les données validées
        $user = new User();
        $user->login = $request->login; // Modifier les attributs selon le nom des champs
        $user->name = $request->name;
        $user->firstName = $request->firstName;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->birthdate = $request->birthdate;
        $user->password = $request->password;
        $user->numCarte = $request->numCarte;
        $user->facilite_caisse = $request->facilite_caisse;
        $user->montant = $request->montant;
        // Ajouter les autres attributs manquants

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Rediriger l'utilisateur vers la vue "compte.blade.php" avec un message de succès
        return redirect()->route('compte')->with('success', 'Compte créé avec succès !');
    }
}

