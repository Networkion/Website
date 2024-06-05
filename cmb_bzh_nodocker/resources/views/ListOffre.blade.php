<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
   

    <title>Acceuil</title>
</head>

<body>
<div class="nav-bar">
        <img class="logo-entreprise"
            src="https://imgs.search.brave.com/tLpUue3mbK731PtxYec2n7IrpDn3pgkM_JefB7hTkbk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9sb2dv/cy1tYXJxdWVzLmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/MC8wMS9sb2dvLUNy/JUMzJUE5ZGl0LU11/dHVlbC02NTB4MzY2/LmpwZw" />
        <div class="button-nav-bar">
            <button class="button-connexion-nav-bar"><strong><a href="{{ url('/connexion') }}">Connexion</a><strong></button>
         
            <button class="button-connexion-nav-bar"><strong><a href="{{ url('ListOffre') }}">Liste des offres</a><strong></button>
            <button class="button-contact" ><strong><a href="{{ url('/contact') }}">Contact</a></strong></button>
        </div>
</div>
<div class="container-differents-compte">
    <h1>Offre par utilisateur</h1>
    <ul>
        @foreach ($users as $user)
            <li  class="choix-infos">{{ $user->name }} - {{ $user->nbr_offre }}</li>
        @endforeach
    </ul>
</div>

    </ul>
</div>