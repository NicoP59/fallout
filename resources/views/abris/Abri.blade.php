@extends('template')

@section('content')
    <main>

        <body>

            @foreach ($abris as $abri)
                <h1>MON ABRI {{ $abri->abri }}</h1>
                <img src="{{ asset('storage/' . $abri->img1) }}" alt="Produit" class="img-produit" />
                <p>Emplacement: {{ $abri->location }}</p>
                <p>Nombre de place disponible: {{ $abri->maxplace }}</p>
                <p>{{ $abri->resume }}</p>

                @if ($abri->maxplace == 0)
                    <p class="red-text"><strong>Abris complet</strong></p>
                @else
                    @if (session('iduser') && !session('idabri'))
                        <form action="/UpdateUserAbri/{{ $abri->idabri }}" method="post">
                            @csrf

                            <div>
                                <label for="idabri">Choisir cette abri </label>
                                <button type="submit" name="idabri" id="select-abri"
                                    value="{{ $abri->idabri }}">S'inscrire</button>
                            </div>

                        </form>
                    @endif
                @endif
            @endforeach

            <h2>Les habitants inscrits :</h2>

            <ul>
                @if ($users->isEmpty())
                    <p>Aucun habitant...</p>
                @else
                    @foreach ($users as $user)
                        <li> {{ $user->nom }} {{ $user->prenom }}</li>
                    @endforeach
                @endif

            </ul>
        </body>

    </main>
@endsection




{{-- Afficher les utilisateurs de CET abri --}}
