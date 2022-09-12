@extends('template')

@section('content')

    <form action="/FormUpdate/{{ $abri["idabri"]}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Abri</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="abri" placeholder="example" value="{{ $abri["abri"]}}"">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Résumé</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire">{{ $abri["resume"] }}</textarea>
        </div>

        <div>
            <input type="submit" class="btn btn-primary">
        </div>

    </form>

@endsection