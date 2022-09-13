@extends('template')

@section('content')
    <main>

        <body>

            @foreach ($boutiques as $boutique)
                <h1>MON ARTICLE {{ $boutique->nom }}</h1>
                <img src="{{ asset('storage/' . $boutique->img) }}" alt="Produit" class="img-produit" />
                <p>{{ $boutique->prix }}</p>
                <p>{{ $boutique->description }}</p>
                <p>{{ $boutique->quantité }}</p>
            @endforeach

        </body>

    </main>
@endsection
