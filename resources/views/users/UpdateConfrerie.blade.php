@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/update-confrerie.css') }}">
</head>

@section('content')
    <main>
        <h1 class="update-confrerie">Choisissez votre confrérie :</h1>
        <form method="POST" action="/modifier-confrerie" class="form-update-confrerie">
            @csrf

            @foreach ($confreries as $confrerie)
                <div class="confrerie">
                    <div>
                        <img src="{{ $confrerie->img }}" alt="" class="img-confreries">
                    </div>

                    <div>
                        <p>Chef actuel : {{ $confrerie->chef }}</p>
                    </div>
                    <div>
                        <p>{{ $confrerie->description }}</p>
                    </div>
                    <div>
                        <label for="confrerie">Choisir : {{ $confrerie->nom }}</label>
                        <input type="radio" name="confrerie" value="{{ $confrerie->confrerie }}">
                    </div>

                </div>
            @endforeach

            <div class="validate">
                <button class="btn" type="submit">Validation</button>
            </div>

        </form>
    </main>
@endsection
