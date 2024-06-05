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
            <button class="button-connexion-nav-bar"><strong><a
                        href="{{ url('/connexion') }}">Connexion</a><strong></button>

            <button class="button-connexion-nav-bar"><strong><a href="{{ url('ListOffre') }}">Liste des
                        offres</a><strong></button>
            <button class="button-contact"><strong><a href="{{ url('/contact') }}">Contact</a></strong></button>
        </div>
    </div>
    <div class="container-differents-compte">
        @if(isset($account))
            <div class="choix-infos">
                <div class="compte-infos">
                    <h1 class="nom-du-compte">Compte courant</h1>
                    <p class="info-sous-compte">Numéro de carte : {{ $account->creditcard }}</p>
                    <p class="info-sous-compte">Date du solde : {{ now()->format('d/m/Y') }}</p>
                    <p class="info-sous-compte">Facilité de caisse : 300€</p>
                </div>
                <div class="montant-infos">
                    <h1 class="montant">{{ $account->balance }}€</h1>
                    <p>Montant à venir</p>
                </div>
            </div>
        @else
            <p>Aucun compte trouvé pour l'utilisateur connecté.</p>
        @endif



    </div>
</body>

</html>