@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/boutique/boutique.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>

            {{-- PANIER --}}
            <div class="icon-wrapper">
                <a href="/panier">
                    <figure class="figure-relative">
                        <img src="/img/icons/bell_icon.svg" alt="" class="bell-icon">
                        <figcaption class="nombre-article">
                            <p class="nbr">{{ $nbr }}</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <h1 class="boutique-page">BOUTIQUE</h1>
            {{-- CREER UN ARTICLE --}}

            @if (session('iduser'))
                <h2 class="titre-shop">Tu ne l'utilises plus ?</h2>
                <h2 class="titre-shop">Vends le sur Vault-Tec Shop !</h2>
                <div class="vendre-article">
                    <div>
                        <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="vault-tec-logo">
                    </div>
                    <div>
                        <a href="/create-article" class="create-annonce-a">Créer une annonce</a>
                    </div>
                </div>
            @endif

            {{-- ARTICLES --}}
            <article class="articles">
                {{-- ARTICLE --}}
                @foreach ($users as $user)
                    <section class="article">
                        {{-- IMAGE SECTION --}}
                        <div class="img-div">
                            <div class="image-article">
                                <figure class="figure-img-produit">
                                    <figcaption class="nom-produit">
                                        <a href="/boutique/article/{{ $user->idproduit }}" class="prod">
                                            {{ $user->nom }}
                                        </a>
                                    </figcaption>
                                    <img src="{{ asset('storage/' . $user->img) }}" alt="Produit" class="img-produit" />
                                </figure>
                            </div>
                        </div>

                        {{-- INFORMATIONS DU PRODUIT SECTION --}}
                        <div class="bloc-infos">
                            <div class="info-article">
                                @if ($user->quantité > 0)
                                    <p class="bi-cart-check"><i class="bi"></i> En stock</p>
                                    <p class="p-prix"><i class="bi bi-tag"></i> {{ $user->prix }} capsules</p>
                                @else
                                    <p class="bi-cart-x"><i class="bi"></i> Hors stock</p>
                                @endif
                                @if (session('iduser') == $user->iduser)
                                    <div class="user-actions">
                                        <a href="/delete-article/{{ $user->idproduit }}" class="icon-trash"><i
                                                class="bi bi-trash3"></i></a>
                                        <a href="/update-article/{{ $user->idproduit }}" class="icon-edit"><i
                                                class="bi bi-pencil"></i></a>
                                    </div>
                                @endif
                            </div>
                            <div class="info-vendeur">
                                <img src="{{ $user->avatar }}" alt="Avatar du vendeur" class="img-vendeur" />
                                <p>Vendu par : {{ $user->prenom }}</p>
                            </div>
                        </div>

                    </section>
                @endforeach
            </article>

            <div id="top-btn-section">
                <img src="img/icons/quantum.webp" alt="" id="top-btn">
            </div>

        </body>

    </main>
@endsection
