<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConnexionController;

// Route pour afficher le formulaire de connexion
Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion.index');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/connexion', [ConnexionController::class, 'authenticate'])->name('connexion.authenticate');


/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('connexion', function () {
    return view('connexion-compte');
});

// Route pour afficher le formulaire de création de compte
Route::get('nouveau-compte', 'UserController@create')->name('nouveau-compte.create');

// Route pour stocker un nouveau compte
Route::post('enregistrer-compte', 'UserController@store')->name('enregistrer-compte.store');

// Route pour afficher la vue de création de compte
Route::get('creation-compte', function () {
    return view('creation-compte');
})->name('creation-compte.view');

Route::get('compte', function () {
    return view('compte');
});

Route::get('compte-admin', function () {
    return view('compte-admin');
});
