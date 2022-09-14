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
                @if (Session::has('idproduit'))
                    @foreach ($paniers as $panier)
                        <section class="produit">
                            <img src="{{ asset('storage/' . $panier->img) }}" alt="Produit" class="img-produit" />
                            <p>{{ $panier->nom }}</p>
                            {{-- <div>
                                <a class="text-danger"
                                    href="/delete-article-panier/{{ Session::get('idproduit') }}">Supprimer</a>
                                <a class="text-primary" href="/update-article-panier/{{ Session::get('idproduit') }}">Mettre
                                    à
                                    jour</a>
                            </div> --}}
                        </section>
                    @endforeach
                @else
                    <h1>Aucun produit</h1>
                @endif

            </article>

        </body>

    </main>
@endsection
