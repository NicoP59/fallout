@extends('template')

@section('content')

<h1>Create Abri</h1>

    <form action="/FormCreate" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="abri" class="form-label">Abri</label>
            <input type="text" class="form-control" id="abri" name="abri" >
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Localisation</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>

        <div class="mb-3">

            <label for="maxplace" class="form-label">Nombre de place</label>
            <input type="number" class="form-control" id="maxplace" name="maxplace">
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">description</label>
            <textarea class="form-control" id="resume" rows="3" name="resume"></textarea>
        </div>
        <input type="file" class="form-control" name="img1" />

        <div>
            <input type="submit" class="btn btn-primary">
        </div>

    </form>

@endsection