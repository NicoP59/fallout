@extends('template')

<head>
    {{-- <link rel="stylesheet" href="{{ asset('css/authentification/update-avatar.css') }}"> --}}
</head>

@section('content')
    <h2>Choisissez votre confrérie :</h2>
    <form method="POST" action="/modifier-avatar">
        @csrf

        @foreach ($confreries as $confrerie)
            <div class="confrerie">
                <img src="{{ $confrerie->img }}" class="img-confreries" alt="">
                <p>{{ $confrerie->nom }}</p>
                <p>{{ $confrerie->chef }}</p>
                <p>{{ $confrerie->description }}</p>
            </div>
        @endforeach

    </form>
@endsection
