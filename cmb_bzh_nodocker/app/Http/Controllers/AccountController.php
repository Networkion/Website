<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    // Méthode pour afficher le formulaire de création de compte
    public function create()
    {
        return view('creation-compte');
    }

    // Méthode pour stocker un nouveau compte
    public function store(Request $request)
    {
        // Valider les données du formulaire
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

        // Créer un nouvel utilisateur avec les données du formulaire
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

        // Rediriger directement l'utilisateur vers la vue "compte.blade.php" après avoir enregistré le compte
        return view('compte')->with('success', 'Account created successfully!');
    }

    // Méthode pour vérifier l'existence d'un compte
    public function check(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        // Récupérer l'email depuis la requête
        $email = $request->email;

        // Vérifier si un utilisateur avec cet email existe dans la base de données
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }

    // Méthode pour authentifier un utilisateur
    public function authenticate(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion avec les informations fournies
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Connexion réussie, vérifier si l'utilisateur a un compte
            $user = Auth::user();
            if ($user) {
                // Rediriger l'utilisateur vers la vue compte.blade.php
                return view('compte');
            } else {
                // L'utilisateur n'a pas de compte, déconnectez-le et redirigez-le vers la page de connexion avec un message d'erreur
                Auth::logout();
                return redirect()->back()->with('error', 'Vous n\'avez pas de compte.');
            }
        } else {
            // Connexion échouée, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Adresse e-mail ou mot de passe incorrect.');
        }
    }
}

