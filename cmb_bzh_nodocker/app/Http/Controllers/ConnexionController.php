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
    // public function authenticate(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     // Tentative de connexion avec les informations fournies
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         // Connexion réussie, vérifier si l'utilisateur a un compte
    //         $user = Auth::user();
    //         if ($user) {
    //             // Rediriger l'utilisateur vers la vue compte.blade.php
    //             return view('compte');
    //         } else {
    //             // L'utilisateur n'a pas de compte, déconnectez-le et redirigez-le vers la page de connexion avec un message d'erreur
    //             Auth::logout();
    //             return redirect()->back()->with('error', 'Vous n\'avez pas de compte.');
    //         }
    //     } else {
    //         // Connexion échouée, rediriger avec un message d'erreur
    //         return redirect()->back()->with('error', 'Adresse e-mail ou mot de passe incorrect.');
    //     }
    // }
}
