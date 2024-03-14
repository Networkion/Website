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
            <button class="button-contact" ><strong><a href="{{ url('/contact') }}">Contact</a></strong></button>
        </div>
</div>
<div class="container-connexion">
        <div class="card-gris-center">
            <h2>ACCÈS À VOTRE ESPACE CLIENT</h2>
            <i class="text-discret">identifiant</i>
            <input class="input-recherche" placeholder="Saisissez votre identifiant"/>
            <i class="text-discret">mot de passe</i>
            <input class="input-recherche" placeholder="Saisissez votre mot de passe"/>
            <p><input type="checkbox"/> Se Souvenir De Moi</p>
<h3><i>Première connexion ?</i></h3>
            <a href="{{ url('/creation') }}">Creation de compte</a>
            <div class="bouton-suivant-center">
                <button class="button-suivant" ><strong><a href="{{ url('/compte') }}">Suivant</a></strong></button><br/>
                <u><i>Code d'accès oubliés / Accès bloqué </i></u>
            </div>
        </div>
</div>
<div class="footer-contact">
    <div class="card-footer-gris-center">
        <h2 class="titre-footer">Ces sujets pouvaient vous intéresser</h2> 
        <div class="choix-infos">
            <p>Ou trouver mon identifiant de connexion ?</p>
            <img href=""/>
        </div>
        <div class="choix-infos">
            <p>Identifiant oublié ?</p>
            <img href=""/>
        </div>
        <div class="choix-infos">
            <p>Mot de passe oublié ?</p>
            <img href=""/>
        </div>
    </div>
</div>
</body>
</html>
