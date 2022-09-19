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
                <h1>MON ARTICLE {{ $boutique->nom }}</h1>
                <img src="{{ asset('storage/' . $boutique->img) }}" alt="Produit" class="img-produit" />
                <p>{{ $boutique->prix }}</p>
                <p>{{ $boutique->description }}</p>
                <p>{{ $boutique->quantité }}</p>
                <p>{{ $boutique->iduser }}</p>
                @if ($boutique->quantité > 0)
                    @if ($boutique->iduser != session('iduser'))
                        <form action="/panier/{{ $boutique->idproduit }}" method="POST">
                            @csrf
                            <div>
                                <input type="number" name="pquantité" value="1" min="1"
                                    max={{ $boutique->quantité }} placeholder="Quantité ?">
                            </div>
                            <div>
                                <input type="submit" value="Ajouter au panier">
                            </div>
                        </form>
                    @else
                        <p>C'est votre article</p>
                    @endif
                @else
                    <p>SOLD OUT</p>
                @endif
            @endforeach

        </body>

    </main>
@endsection
