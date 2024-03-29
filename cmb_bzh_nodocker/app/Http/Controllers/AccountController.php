<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    // Méthode pour afficher le formulaire de création de compte
    public function create()
    {
        return view('accounts.create');
    }

    // Méthode pour stocker un nouveau compte
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'login' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'numCarte' => 'required|string|max:16|unique:users',
        ]);

        // Créez un nouvel utilisateur avec les données du formulaire
        $user = new User();
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
        $user->numCarte = $request->numCarte;
        $user->save();

        // Redirigez l'utilisateur vers une autre page après avoir enregistré le compte
        return redirect()->route('home')->with('success', 'Account created successfully!');
    }

    // Méthode pour vérifier l'existence d'un compte
    public function check(Request $request)
    {
        // Validez les données de la requête
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        // Récupérez l'email depuis la requête
        $email = $request->email;

        // Vérifiez si un utilisateur avec cet email existe dans la base de données
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}
