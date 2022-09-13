@extends('template')

@section('content')
    @foreach ($abris as $abri)
        <form action="/FormUpdate/{{ $abri['idabri'] }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="abri" class="form-label">Abri</label>
                <input type="text" class="form-control" id="abri" name="abri" value={{ $abri->abri }}>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Localisation</label>
                <input type="text" class="form-control" id="location" name="location" value={{ $abri->location }}>
            </div>

            <div class="mb-3">

                <label for="maxplace" class="form-label">Nombre de place</label>
                <input type="number" class="form-control" id="maxplace" name="maxplace" value={{ $abri->maxplace }}>
            </div>

            <div class="mb-3">
                <label for="resume" class="form-label">description</label>
                <textarea class="form-control" id="resume" rows="3" name="resume">{{ $abri->resume }}</textarea>
            </div>

            <div>
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    @endforeach
@endsection
