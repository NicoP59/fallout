@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/boutique/article.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>

            @foreach ($boutiques as $boutique)
                <p class="retour"><a href="/boutique" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

                <h1 class="article">{{ $boutique->nom }}</h1>
                <article class="article-on-sale">
                    <section class="img-article">
                        <img src="{{ asset('storage/' . $boutique->img) }}" alt="Produit" class="img-produit" />
                    </section>
                    <section class="infos-article">
                        <h2 class="h2-boutique">Détails du produit</h2>
                        <h2 class="free-delivery">LIVRAISON GRATUITE</h2>
                        <p class="p-produit"><span class="icons"><i class="bi bi-tag"></i></span> {{ $boutique->prix }}
                            capsules</p>
                        <p class="p-produit-description"><span class="icons"><i class="bi bi-box-seam"></i></span>
                            {{ $boutique->description }}</p>
                        <p class="p-produit"><span class="icons"><i class="bi bi-basket2"></i></span>
                            {{ $boutique->quantité }} restant(s) dans
                            la boutique</p>

                        @foreach ($users as $user)
                            <p class="p-produit"><span class="icons"><i class="bi bi-person"></i></span> Vendu par :
                                <span class="p-produit-saler">{{ $user->prenom }}
                                    {{ $user->nom }}</span>
                            </p>
                            <p class="p-produit"><span class="icons"><i class="bi bi-mailbox"></i></span> Contacter le
                                vendeur : <a href="mailto:{{ $user->email }}"><span class="icons"><i
                                            class="bi bi-envelope"></i></span></a></p>
                        @endforeach
                    </section>
                </article>

                {{-- Si l'item est supérieur à 0 --}}
                @if ($boutique->quantité > 0)
                    {{-- Si l'item est vendu par quelqu'un d'autre que la personne connecté --}}
                    @if ($boutique->iduser != session('iduser'))
                        <form action="/panier/{{ $boutique->idproduit }}" method="POST">
                            @csrf
                            <div>
                                <label for="pquantité" class="p-produit">Quantité :</label>
                                <input type="number" name="pquantité" value="1" min="1"
                                    max={{ $boutique->quantité }} class="quantity" placeholder="Quantité ?">
                            </div>
                            <div>
                                <button type="submit"><span class="icons-panier"><i class="bi bi-plus"></i> <i
                                            class="bi bi-basket2"></i></span></button>
                            </div>
                        </form>
                    @endif
                @else
                    {{-- Sinon sold out --}}
                    <div class="sold-out">
                        <p class="sold">ARTICLE ÉPUISÉ</p>
                    </div>
                @endif
            @endforeach

        </body>

    </main>
@endsection
