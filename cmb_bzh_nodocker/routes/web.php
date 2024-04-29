<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AccountController;

// Route pour afficher le formulaire de connexion
Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion.index');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/connexion', [ConnexionController::class, 'authenticate'])->name('connexion.authenticate');

// Route pour afficher le formulaire de création de compte
Route::get('/creation-compte', [AccountController::class, 'create'])->name('creation-compte.create');
Route::post('/creation-compte', [AccountController::class, 'store'])->name('creation-compte.store');

Route::get('/', function () {
    return view('home');
});

// Route pour afficher la page de contact
Route::get('contact', function () {
    return view('contact');
})->name('contact');

// Route pour afficher la page de connexion
Route::get('connexion', function () {
    return view('connexion-compte');
})->name('connexion');

// Route pour afficher la page du compte
Route::get('/compte', function () {
    return view('compte');
})->name('compte');

// Route pour afficher la page du compte admin
Route::get('compte-admin', function () {
    return view('compte-admin');
});
