@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/abris/abri.css') }}">
</head>

@section('content')
    <main>

        <body>


            <p class="retour"><a href="/abris" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            @foreach ($abris as $abri)
                <h1 class="titre-abri">ABRI n° <span class="span">{{ $abri->abri }}</span></h1>

                <article class="abri">
                    <div class="img-abri">
                        <img src="{{ asset('storage/' . $abri->img1) }}" alt="Produit" class="img" />
                    </div>
                    <div class="info-abri">
                        <p class="info"><i class="bi bi-geo"></i> Localisation : {{ $abri->location }}</p>
                        <p class="info"><i class="bi bi-hourglass-split"></i> Nombre de place disponible:
                            {{ $abri->maxplace }}</p>
                        <p class="description">{{ $abri->resume }}</p>
                        <div class="inscription">
                            @if ($abri->maxplace == 0)
                                <div class="complet">
                                    <p><i class="bi bi-exclamation-octagon-fill"></i></p>
                                    <p class="red-text">Abri complet...</p>
                                </div>
                            @else
                                @if (session('iduser') && !session('idabri'))
                                    <form action="/UpdateUserAbri/{{ $abri->idabri }}" method="post" class="form">
                                        @csrf
                                        <div>
                                            <label for="idabri" class="label">Choisir cet abri :</label>
                                        </div>
                                        <div class="select-abri">
                                            <button type="submit" name="idabri" id="select-abri"
                                                value="{{ $abri->idabri }}"><i class="bi bi-plus-circle"></i></button>
                                        </div>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach


            <article class="liste-habitants">
                <h2 class="habitants-titre">Les habitants inscrits :</h2>
                @if ($users->isEmpty())
                    <p class="no-habitant">Aucun habitant...</p>
                @else
                    <ul class="habitant">
                        @foreach ($users as $user)
                            <li class="habitant-li"><i class="bi bi-star"></i> {{ $user->prenom }} {{ $user->nom }}</li>
                        @endforeach
                    </ul>
                @endif
            </article>

        </body>

    </main>
@endsection




{{-- Afficher les utilisateurs de CET abri --}}
