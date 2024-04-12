<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account; // Importez le modèle approprié pour les comptes
use App\Models\Notification; // Assurez-vous d'importer le modèle approprié pour les notifications

class NotificationController extends Controller
{
    public function index()
    {
        // Récupérez les données des comptes depuis le modèle
        $comptes = account::all();

        // Récupérez les notifications depuis le modèle
        $notifications = Notification::all();

        // Passez les données des comptes et des notifications à la vue et retournez la vue
        return view('votre_vue', compact('comptes', 'notifications'));
    }

    public function createNotification(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'objet' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        // Créez une nouvelle notification
        Notification::create([
            'objet' => $request->objet,
            'contenu' => $request->contenu,
        ]);

        // Redirigez avec un message de succès ou faites tout autre traitement nécessaire
        return redirect()->back()->with('success', 'Notification créée avec succès !');
    }
}
