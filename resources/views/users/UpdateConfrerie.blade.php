@extends('template')

<head>
    {{-- <link rel="stylesheet" href="{{ asset('css/authentification/update-avatar.css') }}"> --}}
</head>

@section('content')
    <h2>Choisissez votre confrérie :</h2>
    <form method="POST" action="/modifier-confrerie">
        @csrf

        @foreach ($confreries as $confrerie)
            <div class="confrerie">
                <img src="{{ $confrerie->img }}" alt="" class="img-confreries">
                <p>{{ $confrerie->chef }}</p>
                <p>{{ $confrerie->description }}</p>
                <div>
                    <label for="confrerie">{{ $confrerie->nom }}</label>
                    <input type="radio" name="confrerie" value="{{ $confrerie->confrerie }}">
                </div>
            </div>
        @endforeach

        <div class="validate">
            <input type="submit" value="Modifier ma confrerie">
        </div>

    </form>
@endsection
