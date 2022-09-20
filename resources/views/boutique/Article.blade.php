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
                <h1 class="article">{{ $boutique->nom }}</h1>
                <article class="article-on-sale">
                    <section class="img-article">
                        <img src="{{ asset('storage/' . $boutique->img) }}" alt="Produit" class="img-produit" />
                    </section>
                    <section class="infps-article">
                        <p>{{ $boutique->prix }}</p>
                        <p>{{ $boutique->description }}</p>
                        <p>{{ $boutique->quantité }}</p>

                        @foreach ($users as $user)
                            <p>Vendu par : {{ $user->prenom }} {{ $user->nom }} {{ $user->email }}</p>
                        @endforeach
                        {{-- Si l'item est supérieur à 0 --}}
                        @if ($boutique->quantité > 0)
                            {{-- Si l'item est vendu par quelqu'un d'autre que la personne connecté --}}
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
                                {{-- Sinon c'est votre article --}}
                                <p>C'est votre article</p>
                            @endif
                        @else
                            {{-- Sinon sold out --}}
                            <p>SOLD OUT</p>
                        @endif
                    </section>
            @endforeach
            </article>


        </body>

    </main>
@endsection
