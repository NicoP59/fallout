@extends('template')

@section('content')
    <h1>ABRIS</h1>

    @if (session('type') == 'Administrateur')
        <div class="link">
            <a href="/FormCreate" class="linky">Create Abri</a>
        </div>
    @endif


    @foreach ($abris as $abri)
        <div class="col-8 bg-dark text-white p-3 m-auto mt-5">
            <div>Abri : {{ $abri->abri }}</div>
            <div><img src="{{ asset('storage/' . $abri->img1) }}" alt=""></div>
            <p><a href="/abri/{{ $abri->idabri }}">En savoir plus sur cet abri</a></p>
            @if (session('type') == 'Administrateur')
                <div>
                    <a class="text-danger" href="/delete/{{ $abri->idabri }}">Supprimer</a>
                    <a class="text-primary" href="/FormUpdate/{{ $abri->idabri }}">Modifier</a>
                </div>
            @endif
        </div>
    @endforeach
@endsection
