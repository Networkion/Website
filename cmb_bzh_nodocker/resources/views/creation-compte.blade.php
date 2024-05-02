<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>
<div class="nav-bar">
        <img class="logo-entreprise"
            src="https://imgs.search.brave.com/tLpUue3mbK731PtxYec2n7IrpDn3pgkM_JefB7hTkbk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9sb2dv/cy1tYXJxdWVzLmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/MC8wMS9sb2dvLUNy/JUMzJUE5ZGl0LU11/dHVlbC02NTB4MzY2/LmpwZw" />
        <div class="button-nav-bar">
            <form action="{{ route('connexion') }}" method="GET">
                @csrf
                <button  type="submit" class="button-connexion-nav-bar">Connexion</button>
            </form>
            <form action="{{ route('contact') }}" method="GET">
                @csrf
                <button  type="submit" class="button-connexion-nav-bar">Contact</button>
            </form>
        </div>
    </div>
    <div class="container-connexion">
        <div class="card-gris-center">
            <h2>ACCÈS À VOTRE ESPACE CLIENT</h2>
            <!-- Formulaire de création de compte -->
            <form action="{{ route('creation-compte.store') }}" method="POST">

                @csrf 

                <div>
                    <label for="login">Login:</label><br>
                    <input class="input-form" type="text" id="login" name="login" required>
                    @error('login')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="name">Nom:</label><br>
                    <input class="input-form" type="text" id="name" name="name" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="firstName">Prénom:</label><br>
                    <input class="input-form" type="text" id="firstName" name="firstName" required>
                    @error('firstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="email">Email:</label><br>
                    <input class="input-form" type="email" id="email" name="email" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="birthdate">Date de naissance:</label><br>
                    <input class="input-form" type="date" id="birthdate" name="birthdate">
                    @error('birthdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password">Mot de passe:</label><br>
                    <input class="input-form" type="password" id="password" name="password" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="numCarte">Numéro de carte:</label><br>
                    <input class="input-form" type="text" id="numCarte" name="numCarte" required>
                    @error('numCarte')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>

                <button type="submit">Connexion</button>
            </form>

            @if (session('success'))
                <div class="

alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
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