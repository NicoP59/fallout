@extends('template')


<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/account.css') }}">
</head>

@section('content')

    <main>

        <body>

            <section class="verified">
                @if (Session::get('isVerified') == null)
                    <div class="verification-notok">
                        <p class="verify-icon-notok"><i class="bi bi-x-lg"></i></p>
                        <a href="/envoie-mail-btn" class="verification-link">
                            Attention, tu dois vérifier ton compte <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                @else
                    <div class="verification-ok">
                        <p class="verify-icon-ok"><i class="bi bi-check2"></i></p>
                        <p>Bravo, ton compte a bien été vérifié !</p>
                    </div>
                @endif
            </section>

            <h1 class="account-page">MON PROFIL</h1>
            <div class="pipboy">
                <h2 class="pipboy-page">Mon PipBoy</h2>
                <a href="/pip-boy" class="pipboy-link"><i class="bi bi-box-arrow-up-right"></i></a>
            </div>

            <div class="avatar">
                <img src="{{ Session::get('avatar') }}" alt="" class="img-avatar">
            </div>

            <p class="bienvenue">Bienvenue à toi <span class="span">cher(e) ou futur(e) résident(e)</span> ! Tu peux
                retrouver ici toutes tes
                informations concernant ton dossier, organisation, abri, identité et tu as également droit à un <span
                    class="span">kit de
                    bienvenue </span>! Je te laisse le soin de l'ouvrir et de découvrir tes cadeaux offerts par <span
                    class="span">Vault-Tec</span> !
            </p>

            @if ($items == null)
                {{-- ENTÊTE DU PROFIL --}}
                <article class="section-items">
                    <form class="lunchbox-div" method="POST" action="/items">
                        @csrf
                        {{-- Là où sera tous nos emojis -> slot --}}
                        <div class="slot"></div>
                        <img src="img/profile/lunchbox.png" class="lunchbox" id="id-lunchbox"
                            onclick="openLunch() && fiesta()">
                        <div class="items-div" id="items-div">
                            <h2 class="titre-kit">MON KIT DE BIENVENUE</h2>
                            <section class="base-items">
                                <div class="item">
                                    <a href="pdf/COOKBOOK.pdf" download="COOKBOOK.pdf" class="item-title">
                                        <figure>
                                            <img src="img/profile/welcome-kit/cookbook.jpg" alt="Welcome Kit"
                                                class="item-welcome-kit" />
                                        </figure>
                                        <figcaption>
                                            Livre de
                                            cuisine
                                        </figcaption>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="pdf/GUIDE.pdf" download="GUIDE.pdf" class="item-title">
                                        <figure>
                                            <img src="img/profile/welcome-kit/guide.jpg" alt="Welcome Kit"
                                                class="item-welcome-kit" />
                                        </figure>
                                        <figcaption>
                                            Guide du
                                            survivant
                                        </figcaption>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="pdf/S.P.E.C.I.A.L.pdf" download="S.P.E.C.I.A.L.pdf" class="item-title">
                                        <figure>
                                            <img src="img/profile/welcome-kit/special.jpg" alt="Welcome Kit"
                                                class="item-welcome-kit" />
                                        </figure>
                                        <figcaption>
                                            Prospectus
                                            S.P.E.C.I.A.L
                                        </figcaption>
                                    </a>
                                </div>
                            </section>
                            <section id="items-generate" class="items-generate"></section>
                        </div>
                    </form>
                </article>
            @else
                <article class="section-items-generate">
                    <h2 class="titre-kit">MON KIT DE BIENVENUE</h2>
                    {{-- SI ITEMS IL Y A, MONTREZ LES --}}
                    <section class="base-items-ok">
                        <div class="item">
                            <a href="pdf/COOKBOOK.pdf" download="COOKBOOK.pdf" class="item-title">
                                <figure>
                                    <img src="img/profile/welcome-kit/cookbook.jpg" alt="Welcome Kit"
                                        class="item-welcome-kit" />
                                </figure>
                                <figcaption>
                                    Livre de cuisine
                                </figcaption>
                            </a>
                        </div>
                        <div class="item">
                            <a href="pdf/GUIDE.pdf" download="GUIDE.pdf" class="item-title">
                                <figure>
                                    <img src="img/profile/welcome-kit/guide.jpg" alt="Welcome Kit"
                                        class="item-welcome-kit" />
                                </figure>
                                <figcaption>
                                    Guide du survivant
                                </figcaption>
                            </a>
                        </div>
                        <div class="item">
                            <a href="pdf/S.P.E.C.I.A.L.pdf" download="S.P.E.C.I.A.L.pdf" class="item-title">
                                <figure>
                                    <img src="img/profile/welcome-kit/special.jpg" alt="Welcome Kit"
                                        class="item-welcome-kit" />
                                </figure>
                                <figcaption>
                                    Prospectus
                                    S.P.E.C.I.A.L
                                </figcaption>
                            </a>
                        </div>
                    </section>
                    <section class="items-generate-ok">
                        @foreach ($items as $item)
                            <div class="item">
                                <img src="{{ $item->img }}" class="img-items" alt="">
                                <p class="item-title">{{ $item->item }}</p>
                            </div>
                        @endforeach
                    </section>
                </article>
            @endif

            {{-- INFORMATIONS DU PROFIL --}}
            <article class="identity">

                <h2 class="title-identity">INFORMATIONS DU DOSSIER :
                    {{ Session::get('nom') }}.VT{{ Session::get('iduser') }}{{ Session::get('idabri') }}</h2>

                <div class="img-vault-tec">
                    <img src="img/templates/LOGO.png" alt="Vault-Tec" class="img-vault-tec" />
                </div>

                <section class="identity">
                    <p class="bienvenue">Bonjour, <span class="span">{{ Session::get('prenom') }}
                            {{ Session::get('nom') }}</span> ! Sur cette page tu as l'occasion de
                        visualier et de modifier les informations de ton dossier Vault-Tec. Nous vous souhaitons donc de
                        passer un agréable moment en notre compagnie, en espérant vous revoir sain et sauf dans l'un de nos
                        abris avant l'explosion nucléaire !</p>
                </section>

                {{-- ORGANISATION --}}
                <section class="confreries">
                    @if ($confreries->isEmpty())
                        <h2 class="choose">Choisissez une organisation afin de vous investir dans une cause qui
                            vous ressemble :</h2>
                        <p class="no-organisation">Aucune organisation choisie pour le moment...</p>
                        <p><a href='modifier-confrerie' class="choose-organisation">Choisir mon organisation <i
                                    class="bi bi-arrow-right-short"></i></a></p>
                    @else
                        {{-- Comme nous avons une collection nous utilisons cette méthode --}}
                        @foreach ($confreries as $confrerie)
                            <h2 class="title">MON ORGANISATION : {{ $confrerie->nom }}</h2>
                            <p class="chef">Chef d'organisation : {{ $confrerie->chef }}</p>
                            <img src="{{ $confrerie->img }}" alt="" class="img-confrerie">
                        @endforeach
                        <a href='modifier-confrerie' class="link-modify-confrerie"><i class="bi bi-info-circle"></i></a>
                    @endif
                </section>

                {{-- ABRI --}}

                <section class="choisir-abri">
                    @if ($abris->isEmpty())
                        <h2 class="choose">Afin d'être à l'abri d'une attaque nucléaire, Vault-Tec vous propose une
                            multitude d'abris !
                            Choissisez en un à votre image :</h2>
                        <p><a href='/abris' class="choose-organisation">Nos abris anti-nucléaire <i
                                    class="bi bi-arrow-right-short"></i></a></p>
                    @else
                        <h2 class="title">MON ABRI ANTI-NUCLÉAIRE</h2>
                        <div class="abri-map">
                            <div>
                                <img src="img/profile/map.jpg" alt="Abri" class="map-abri">
                            </div>
                            <div>
                                {{-- Comme nous avons une collection nous utilisons cette méthode --}}
                                @foreach ($abris as $abri)
                                    <div class="infos-abris">
                                        <p class="abri"><i class="bi bi-gear-fill"></i></p>
                                        <p class="info-abri"><i class="bi bi-info-circle"></i> Abri n°{{ $abri->abri }}
                                        </p>
                                        <p class="info-abri"><i class="bi bi-geo-alt"></i> Localisation :
                                            {{ $abri->location }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </section>

                <form method="POST" action="/mon-profil" enctype="multipart/form-data" class="form">
                    @csrf

                    <h2 class="title-identity-2">CARTE D'IDENTITÉ VAULT-TEC</h2>
                    <section class="form-update">
                        <div>
                            <div class="avatar-form">
                                <img src="{{ Session::get('avatar') }}" alt="" class="img-avatar-form">
                            </div>
                            <div class="form-group">
                                <p class="link-avatar">
                                    <a href="/modifier-avatar" class="link-avatar">Changer mon avatar</a>
                                </p>
                            </div>
                        </div>

                        <div class="infos-user">
                            <div class="form-group">
                                <label for="nom">Nom de famille</label>
                                <input type="text" name="nom" class="nom" value="{{ Session::get('nom') }}">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" class="prenom"
                                    value="{{ Session::get('prenom') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="email"
                                    value="{{ Session::get('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="mdp">Nouveau mot de passe</label>
                                <input type="password" name="mdp" class="mdp">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmer le mot de passe</label>
                                <input type="password" name="password_confirmation" class="password_confirmation">
                            </div>
                            <div class="update-btn">
                                <input type="submit" value="Modifier mon profil" class="button-update">
                            </div>
                        </div>
                    </section>
                </form>

                <section class="delete-account">
                    <p class="trash">
                        <a class="text-danger-account" href="/delete-compte/{{ Session::get('iduser') }}"
                            onclick="return confirm('Toutes vos données seront perdues. Êtes vous sûr(e) de vouloir supprimer votre compte ? CONFIRMER ?')">
                            <i class="bi bi-trash3"></i>
                    </p>
                    <p>Supprimer mon compte</a></p>
                </section>

            </article>

            <div id="top-btn-section">
                <img src="img/icons/quantum.webp" alt="" id="top-btn">
            </div>

        </body>

    </main>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="/js/lunchbox.js"></script>
    <script src="/js/items.js"></script>
    {{-- <script src="/js/delete-confirmation/delete-account.js"></script> --}}

@endsection
