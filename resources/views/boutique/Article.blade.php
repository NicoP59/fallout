@extends('template')

@section('content')
    <main>

        <body>

            @foreach ($boutiques as $boutique)
                <h1>MON ARTICLE {{ $boutique->nom }}</h1>
            @endforeach

        </body>

    </main>
@endsection
