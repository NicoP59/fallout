@extends('template')

@section('content')
    <main>

        <body>

            @foreach ($abris as $abri)
                <h1>MON ABRI {{ $abri->abri }}</h1>
                <img src="{{ asset('storage/' . $abri->img1) }}" alt="Produit" class="img-produit" />
                <p>{{ $abri->location }}</p>
                <p>{{ $abri->maxplace }}</p>
                <p>{{ $abri->resume }}</p>
            @endforeach

        </body>

    </main>
@endsection
