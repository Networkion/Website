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
<div class="container-contact">
        <div class="card-gris-droite">
            <h2><strong>Nous contacter</strong></h2>
            <p>
            Pour certains sujets nous avons besoin d’écoute et de prendre le temps d’échanger. Une question, un problème à signaler, ou même une candidature à déposer, nous sommes là pour vous écouter et vous accompagner.
            </p>
        </div>
        

    </div>

    <div class="footer-contact">
        <img class="logo-contact" src="https://img.freepik.com/vecteurs-libre/aide-support-web-fond-point-interrogation_1017-25234.jpg?t=st=1709648092~exp=1709651692~hmac=b9a307ca676eed8cf135bfe400c7be46dff1156e6a059909550f618e1e925217&w=740"/>
            <h1>Une Question ?</h1>

            <input class="input-recherche" placeholder="ex : j'ai perdu ma carte bancaire"/>
            <p><i>Exemple : <u>Perte de carte bancaire</u> / <u>Prendre rendez-vous</u> / <u>Déclarer un sinistre</u></i></p>

        </div>

</body>
</html>