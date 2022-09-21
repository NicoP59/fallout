@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/abris/update.css') }}">
</head>

@section('content')
    <main>
        @foreach ($abris as $abri)
            <h1 class="update-abri">MODIFIER ABRI</h1>
            <form action="/FormUpdate/{{ $abri['idabri'] }}" method="POST" class="form-update-abri">

                @csrf

                <div class="image">
                    <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="img-create">
                </div>

                <div class="form-infos">
                    <div class="create-first">
                        <div class="label">
                            <label for="abri">Abri</label>
                        </div>
                        <div>
                            <input type="text" id="abri" name="abri" value={{ $abri->abri }} />
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="location">Localisation</label>
                        </div>
                        <div>
                            <input type="text" id="location" name="location" value={{ $abri->location }} />
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">

                            <label for="maxplace">Nombre de place</label>
                        </div>
                        <div>
                            <input type="number" id="maxplace" name="maxplace" value={{ $abri->maxplace }} />
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="resume">description</label>
                        </div>
                        <div>
                            <textarea id="resume" rows="3" name="resume">{{ $abri->resume }}</textarea>
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit"><i class="bi bi-send-plus"></i></button>
                    </div>
                </div>

            </form>
        @endforeach
    </main>
@endsection
