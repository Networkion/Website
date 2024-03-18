<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
    
Route::get('creation', function () {
    return view('creation-compte');
});
    
Route::get('compte', function () {
    return view('compte');
});

Route::get('compte-admin', function () {
    return view('compte-admin');
});