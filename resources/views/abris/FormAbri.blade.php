@extends('template')

@section('content')

    <form action="/FormCreate" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Abri</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="abri" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Rgfsgwsgs</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="resume"></textarea>
        </div>
        <input type="file" class="form-control" name="image" />

        <div>
            <input type="submit" class="btn btn-primary">
        </div>

    </form>

@endsection