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
    <!-- Votre barre de navigation -->
</div>
<div class="container-differents-compte">
    @foreach($comptes as $compte)
        <div class="choix-infos">
            <div class="compte-infos">
                <h1 class="nom-du-compte">{{ $compte->nom }}</h1>
                <p class="info-sous-compte">numéro de carte : {{ $compte->numero_carte }}</p>
                <p class="info-sous-compte">date du solde : {{ $compte->date_solde }}</p>
                <p class="info-sous-compte">facilité de caisse : {{ $compte->facilite_caisse }}€</p>
            </div>
            <div class="montant-infos">
                <h1 class="montant">{{ $compte->montant }}€</h1>
                <p>Montant à venir</p>
            </div>
        </div>
    @endforeach
</div>

<div class="notification">
    @foreach($notifications as $notification)
        <div class="compte-notif">
            <div class="objet-notfi">
                <p>{{ $notification->objet }}</p>
            </div>
            <div class="contenu-notfi">
                <p>{{ $notification->contenu }}</p>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
