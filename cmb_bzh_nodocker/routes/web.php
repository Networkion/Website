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

Route::get('creation-compte', function () {
    return view('creation-compte');
});

// Assigner le UserController aux routes de création de compte
Route::get('creation-compte', 'UserController@create')->name('creation-compte.create');
Route::post('creation-compte', 'UserController@store')->name('creation-compte.store');

Route::get('compte', function () {
    return view('compte');
});

Route::get('compte-admin', function () {
    return view('compte-admin');
});
