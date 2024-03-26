<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    // Méthode pour afficher le formulaire de connexion
    public function index()
    {
        return view('connexion');
    }
    
    // Méthode pour gérer la tentative de connexion
    public function authenticate(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion avec les informations fournies
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Connexion réussie, rediriger l'utilisateur vers une autre page
            return redirect()->route('dashboard');
        } else {
            // Connexion échouée, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Adresse e-mail ou mot de passe incorrect.');
        }
    }
}
