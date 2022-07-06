@extends('template')

@section('content')
    <form class="col-md-4 p-5 bg-dark text-white m-auto" method="POST" action="/connexion">

        @csrf

        <h2>CONNEXION</h2>

        <div class="form-group">
            <label for="email">Email *</label>
            <input class="form-control" type="email" name="email" id="email">

        </div>

        <div class="form-group">
            <label for="mdp">Mot de passe *</label>
            <input class="form-control" type="password" name="mdp" id="mdp">
        </div>

        <div>
            <a href="/inscription">S'inscrire</a>
        </div>

        <div class="form-group mt-3">
            <input type="submit" class="btn btn-primary" value="Connexion">
        </div>

    </form>
@endsection
