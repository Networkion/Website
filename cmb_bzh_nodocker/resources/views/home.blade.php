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
    <div class="container">
        <div class="card-gris-droite">
            <h2>En un clin d'oeil</h2>
            <ul>
                <li>Créer vos cartes virtuelles avec Virtualis</li>
                <li>Garder la main sur votre budget avec Bud'Jet</li>
                <li>Gérer vos cartes bancaires</li>
                <li>Recevoir de l'argent en achetant chez les commerçants partenaires grâce au service Cashback</li>
            </ul>
        </div>
        <div class="card-rouge-gauche">
            <h2>Espace Client mon.cmb.fr</h2>
            Avec votre espace client mon.cmb.fr vous gardez une vision claire de vos comptes au quotidien.
            Et vous gagnez du temps en accédant directement aux raccourcis vers les services que vous utilisez le plus.<br/>
            <button class="button-connexion"><a href="{{ url('/connexion') }}">Je Me Connecte</a></button>
        </div>
    </div>
    <div class="partie-grise-home">
        <div class="card-blanche-home">
            
            <div class="card-blanche-gauche">
                <h1>
                    LE GROUPE
                </h1>
                <ul>
                    <li>Recrutement Crédit Mutuel ARKEA</li>
                    <li>Crédit Mutuel ARKEA</li>
                    <li>Les Dispositifs de Solidarités</li>
                    <li>La déclaration de performance extra-financière</li>
                    <li>Bilan des émissions de gaz à effet de serre</li>
                    <li>Communiqués de presse</li>
                </ul>
            </div>
            <div class="card-blanche-centre">
                <h1>
                     AIDE
                </h1>
                <ul>
                    <li>Virtualis</li>
                    <li>Réflexes Sécurité</li>
                    <li>Tutoriels</li>
                    <li>Trouver une agence</li>
                    <li>FAQ</li>
                    <li>Nous contacter</li>
                    <li>Résilier un contrat</li>
            </ul>
            </div>
            <div class="card-blanche-droite">
                <h1>
                LES PRODUITS
                </h1>
                <ul>                
                    <li>Comptes et cartes</li>
                    <li>Épargne et placements</li>
                    <li>Prêts</li>
                    <li>Assurances</li>
                </ul>
            </div>
        </div>
        <div class="card-grise-photo">
            <div class="container-gris-text">
                <h1>Toutes nos solutions pour piloter vos comptes</h1>
                <ul>
                <li>Espace client mon.cmb.fr</li>
                <li>Application CMB</li>
                <li>Gestion de budget en ligne avec Bud'Jet</li>
                <li>Appareil de confiance</li>
                </ul>
            </div>
        </div>
        <div class="card-recherche-agence">
            <div class="container-rouge-text">
            <p>Et si on se rencontrait ? Trouvez l'agence la plus proche de vous<p>
                <input  class="input-recherche"  placeholder="Entrez le nom d'une ville ...."/>
                <img class="image-recherche" src="https://img.freepik.com/vecteurs-libre/illustration-icone-loupe_53876-5613.jpg?t=st=1709644264~exp=1709647864~hmac=3f40773c9ab1314ac59e5853f6f62e8ad9602293f5733cf4bbab92675f8f9d09&w=740" alt="image de recherche"/>
            </div>
        </div>  
    </div>
    <div class="footer">
    <p><i><a href="https://www.cmb.fr/reseau-bancaire-cooperatif/web/reglementaire/mentions-legales">Mentions légales</a> / <a href="https://www.cmb.fr/reseau-bancaire-cooperatif/web/reglementaire/mentions-legales">Politique de confidentialité</a> / <a href="{{ url('/contact') }}">Contact Archives</a> / <a href="https://www.cmb.fr/reseau-bancaire-cooperatif/web/reglementaire/accessibilite">Accessibilité</a> /  <a href="https://www.creditmutuel.fr/fr/gestion-des-cookies.html">Gestion des cookies</a></i></p>
    </div>
</body>
</html>