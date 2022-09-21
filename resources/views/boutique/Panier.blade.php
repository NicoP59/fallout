@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/boutique/panier.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>
            <p class="retour"><a href="/boutique" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            <h1 class="panier-titre">MON PANIER</h1>
            @if (!session('iduser'))
                <div class="connect-before">
                    <div class="icons">
                        <i class="bi bi-person-x"></i>
                    </div>
                    <p>Tu dois te connecter !</p>
                    <div class="co">
                        <a href="/connexion" class="co">Se connecter</a>
                    </div>
                </div>
            @else
                @if ($paniers->isEmpty())
                    <div class="no-produit">
                        <p class="produit-vide">Votre panier est vide...</p>
                    </div>
                @elseif ($paniers)
                    <article class="produits">
                        @foreach ($paniers as $panier)
                            <section class="produit">
                                <span class="icons"><i class="bi bi-tag"></i></span>
                                <div class="img-produit-div">
                                    <img src="{{ asset('storage/' . $panier->img) }}" alt="Produit" class="img-produit" />
                                </div>
                                <div class="info-article">
                                    <p class="p-title-produit">{{ $panier->pquantité }} {{ $panier->nom }}</p>
                                    <p class="p-produit"><span class="bold">Prix :</span>
                                        {{ $panier->prix }} capsules</p>
                                    <p class="p-produit"><span class="bold">Total :</span>
                                        {{ $panier->prix * $panier->pquantité }} capsules</p>
                                    <div class="delete-div">
                                        <a class="text-danger" href="/delete-article-panier/{{ $panier->idpanier }}"
                                            class="delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </div>
                            </section>
                        @endforeach
                    </article>

                    <article class="commande-confirmation">
                        @php
                            $totalPrix = 0;
                        @endphp
                        @foreach ($paniers as $panier)
                            @php
                                $totalPrix += $panier['prix'] * $panier['pquantité'];
                            @endphp
                        @endforeach
                        <p class="total-p">Total de votre commande : <span class="prix">{{ $totalPrix }}
                                capsules</span></p>
                        <div class="a-confirmation-div">
                            <a href="/delete-commande" class="a-confirmation">Confirmer votre commande</a>
                            <div class="caddy">
                                <i class="bi bi-cart4"></i>
                            </div>
                        </div>
                    </article>
                @else
                    <div class="no-produit">
                        <p class="produit-vide">Une erreur est survenue...</p>
                    </div>
                @endif
            @endif

            <div id="top-btn-section">
                <img src="img/icons/quantum.webp" alt="" id="top-btn">
            </div>

        </body>

    </main>
@endsection
