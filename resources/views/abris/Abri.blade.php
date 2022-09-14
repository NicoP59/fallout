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
            @endforeach

        </body>

    </main>
@endsection
