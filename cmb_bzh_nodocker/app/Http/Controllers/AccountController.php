<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    // Méthode pour afficher le formulaire de création de compte
    public function create()
    {
        return view('creation-compte');
    }


    // Méthode pour stocker un nouveau compte
   // Méthode pour stocker un nouveau compte
// Méthode pour stocker un nouveau compte
public function store(Request $request)
{
    // Validez les données du formulaire
    $request->validate([
        'login' => 'required|string|max:255|unique:users',
        'name' => 'required|string|max:255',
        'firstName' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'role' => 'required|string|max:255',
        'birthdate' => 'nullable|date',
        'password' => 'required|string|min:8',
        'numCarte' => 'required|string|max:16|unique:users',
    ]);

    // Créez un nouvel utilisateur avec les données du formulaire
    $user = new User();
    $user->login = $request->login;
    $user->name = $request->name;
    $user->firstName = $request->firstName;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->birthdate = $request->birthdate;
    $user->password = bcrypt($request->password); // Assurez-vous de hasher le mot de passe
    $user->numCarte = $request->numCarte;
    $user->save();

    // Redirigez directement l'utilisateur vers la vue "compte.blade.php" après avoir enregistré le compte
    return view('compte')->with('success', 'Account created successfully!');
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
