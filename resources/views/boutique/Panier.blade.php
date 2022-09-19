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
            <h1>MON PANIER</h1>
            <article class="produits">
                @if (!session('iduser'))
                    <p>Tu dois te connecter !</p>
                    <a href="/connexion">Se connecter</a>
                @else
                    @if ($paniers->isEmpty())
                        <h2>Aucun produit</h2>
                    @elseif ($paniers)
                        @foreach ($paniers as $panier)
                            <section class="produit">
                                <img src="{{ asset('storage/' . $panier->img) }}" alt="Produit" class="img-produit" />
                                <p>ID PRODUIT : {{ $panier->idproduit }}</p>
                                <p>NOM DU PRODUIT : {{ $panier->nom }}</p>
                                <p>PRIX DU PRODUIT : {{ $panier->prix }}</p>
                                {{-- TABLE PANIERS --}}
                                <p>QUANTITÉ CHOISIE : {{ $panier->pquantité }}</p>
                                <p>QUANTITÉ RESTANTE DANS LA BOUTIQUE : {{ $panier->quantité }}</p>
                                <p>TOTAL DES ARTICLES : {{ $panier->prix * $panier->pquantité }}</p>
                                <div>
                                    <a class="text-danger"
                                        href="/delete-article-panier/{{ $panier->idpanier }}">Supprimer</a>
                                </div>
                                <form action="/update-article-panier/{{ $panier->idpanier }}" method="POST">
                                    @csrf
                                    <div>
                                        <input type="number" name="pquantité" value="0" min="1"
                                            max={{ $panier->quantité }} placeholder="Quantité ?">
                                    </div>
                                    <div>
                                        <input type="submit" value="Mettre à jour">
                                    </div>
                                </form>
                            </section>
                        @endforeach
                    @else
                        <p>Une erreur est survenue...</p>
                    @endif
                @endif
            </article>

            <article>
                <p>TOTAL : {{ $panier = $panier->prix * $panier->pquantité }} </p>
                <button>Passer la commande</button>
            </article>

        </body>

    </main>
@endsection
