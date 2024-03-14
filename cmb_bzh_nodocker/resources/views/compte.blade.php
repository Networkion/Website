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
<div class="container-differents-compte">
    <div class="choix-infos">
        <div class="compte-infos">
            <h1 class="nom-du-compte">Nom du compte 
            </h1>
            <p class="info-sous-compte">numéro de carte :  xxx xxxx xxxx xxx 01 </p>
            <p class="info-sous-compte">date du solde : 10/03/2024</p>
            <p class="info-sous-compte">facilité de caisse : 300€</p>
        </div>
        <div class="montant-infos">
        <h1 class="montant">10 000€</h1>
        <p>Montant a venir</p>
        </div>
    </div>
    <div class="choix-infos">
        <div class="compte-infos">
            <h1 class="nom-du-compte">Nom du compte 
            </h1>
            <p class="info-sous-compte">numéro de carte :  xxx xxxx xxxx xxx 01 </p>
            <p class="info-sous-compte">date du solde : 10/03/2024</p>
            <p class="info-sous-compte">facilité de caisse : 300€</p>
        </div>
        <div class="montant-infos">
        <h1 class="montant">10 000€</h1>
        <p>Montant a venir</p>
        </div>
    </div>
    <div class="choix-infos">
        <div class="compte-infos">
            <h1 class="nom-du-compte">Nom du compte 
            </h1>
            <p class="info-sous-compte">numéro de carte :  xxx xxxx xxxx xxx 01 </p>
            <p class="info-sous-compte">date du solde : 10/03/2024</p>
            <p class="info-sous-compte">facilité de caisse : 300€</p>
        </div>
        <div class="montant-infos">
        <h1 class="montant">10 000€</h1>
        <p>Montant a venir</p>
        </div>
    </div>
    <div class="choix-infos">
        <div class="compte-infos">
            <h1 class="nom-du-compte">Nom du compte 
            </h1>
            <p class="info-sous-compte">numéro de carte :  xxx xxxx xxxx xxx 01 </p>
            <p class="info-sous-compte">date du solde : 10/03/2024</p>
            <p class="info-sous-compte">facilité de caisse : 300€</p>
        </div>
        <div class="montant-infos">
        <h1 class="montant">10 000€</h1>
        <p>Montant a venir</p>
        </div>
    </div>
    <div class="notification">
        <div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div>
        <div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div><div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div><div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div><div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div><div class="compte-notif">
            <div class="objet-notfi">
                <p>Objet de la notication</p>
            </div>
            <div class="contenu-notfi">
                <p>cotenu de la notif</p>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>