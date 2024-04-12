<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NotificationController;

// Route pour afficher le formulaire de connexion
Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion.index');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/connexion', [ConnexionController::class, 'authenticate'])->name('connexion.authenticate');

// Route pour afficher le formulaire de création de compte
Route::get('/creation-compte', [AccountController::class, 'create'])->name('creation-compte.create');
Route::post('/creation-compte', [AccountController::class, 'store'])->name('creation-compte.store');

// Route pour afficher le formulaire de création de notification
Route::get('/creer-notification', [NotificationController::class, 'create'])->name('notification.create');
Route::post('/creer-notification', [NotificationController::class, 'createNotification'])->name('notification.store');

// Route pour afficher la page d'accueil en utilisant VotreController
Route::get('/', [NotificationController::class, 'index'])->name('accueil');

// Route pour afficher la page de contact
Route::get('contact', function () {
    return view('contact');
});

// Route pour afficher la page de connexion
Route::get('connexion', function () {
    return view('connexion-compte');
});

// Route pour afficher la page du compte
Route::get('/compte', function () {
    return view('compte');
})->name('compte');

// Route pour afficher la page du compte admin
Route::get('compte-admin', function () {
    return view('compte-admin');
});
