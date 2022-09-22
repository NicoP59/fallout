@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/update-confrerie.css') }}">
</head>

@section('content')
    <main>

        <body>
            <p class="retour"><a href="/mon-profil" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            <h1 class="update-confrerie">Choisissez votre organisation :</h1>
            <form method="POST" action="/modifier-confrerie" class="form-update-confrerie">
                @csrf

                @foreach ($confreries as $confrerie)
                    <div class="confrerie">
                        <div>
                            <img src="{{ $confrerie->img }}" alt="" class="img-confreries">
                        </div>

                        <div>
                            <p class="chef">Chef actuel : <span class="span">{{ $confrerie->chef }}</span></p>
                        </div>
                        <div class="chef">
                            <p>{{ $confrerie->description }}</p>
                        </div>
                        <div class="chef">
                            <span class="bold"><label for="confrerie">Choisir : <span
                                        class="span">{{ $confrerie->nom }}</span></label>
                                <input type="radio" name="confrerie" value="{{ $confrerie->confrerie }}"></span>
                        </div>

                    </div>
                @endforeach

                <div class="validate">
                    <button class="btn" type="submit">Validation</button>
                </div>
            </form>

        </body>

    </main>
@endsection
