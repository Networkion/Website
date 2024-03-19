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
        <!-- Votre barre de navigation ici -->
    </div>
    <div class="container-connexion">
        <div class="card-gris-center">
            <h2>ACCÈS À VOTRE ESPACE CLIENT</h2>
            <!-- Formulaire de connexion -->
            <form action="{{ route('creation-compte.store') }}" method="POST">

                @csrf <!-- Génère un jeton CSRF pour la protection des formulaires -->

                <!-- Champs de formulaire pour le login, l'email, le mot de passe et le numéro de carte -->
                <div>
                    <label for="login">Login:</label><br>
                    <input type="text" id="login" name="login" required>
                </div>
                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Mot de passe:</label><br>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="numCarte">Numéro de carte:</label><br>
                    <input type="text" id="numCarte" name="numCarte" required>
                </div>

                <!-- Checkbox pour se souvenir de l'utilisateur -->
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>

                <!-- Bouton de soumission du formulaire -->
                <button type="submit">Connexion</button>
            </form>

            <!-- Affichage du message de succès ou d'erreur -->
            @if (session('success'))
                <div class="alert alert-success">
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
        <!-- Votre pied de page ici -->
    </div>
</body>

</html>
