<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/templates/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nukamode/nukamode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates/footer.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}" />
    <title>Vault Tec Corporation</title>
</head>

<body>

    {{-- NUKA MODE --}}

    <div id="nuka-mode">
        <img id="nuka" src="{{ asset('img/nukamode/vaultmode.svg') }}" />
    </div>

    {{-- HEADER --}}
    <header>
        <div class="button-burger" id="button-burger">
            <button class="burger" id="button-burger">
                <img src="/img/icons/burger.png" alt="" class="burger" id="burger">
            </button>
        </div>
        <div class="bloc-logo">
            <img src="{{ asset('img/templates/logo.png') }}" alt="Fallout" class="bigger-logo">
        </div>
        <div class="bloc-links" id="bloc-links">
            <div class="link">
                <a href="{{ asset('/') }}" class="linky">Accueil</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Abris</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Boutique</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Gestion d'utilisateur</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Contact</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Se connecter</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Mon profil</a>
            </div>
            <div class="link">
                <a href="#" class="linky">Déconnexion</a>
            </div>
        </div>
    </header>

    <div class="custom-shape-divider-top-1654685571">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
        </svg>
    </div>

    @yield('content')

    {{-- FOOTER --}}
    <footer>
        <div class="custom-shape-divider-top-1654680663">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="footer">
            <p>
                Les images utilisées ne sont pas libres de droits. Pour toute demande de
                suppression d'une image qui vous appartient, merci de nous contacter.
            </p>
            <p>
                Ceci est un projet scolaire qui a juste pour but de m'exercer sur le framework
                Laravel.
            </p>
            <p>
                © Copyright / Caroline Dorchies - Bethesda / 2022
            </p>
        </div>
    </footer>

</body>

</html>

<script src="/js/burger.js"></script>
<script src="/js/nukamode/nukamode.js"></script>
