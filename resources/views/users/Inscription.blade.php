@extends('template')

@section('content')
    <form class="col-md-5 col-lg-4 p-5 m-2 bg-dark text-white m-auto" method="POST" action="/inscription">

        <h2>INSCRIPTION</h2>

        @csrf

        <div class="form-group">
            <label for="nom">Nom *</label>
            <input class="form-control" type="text" name="nom" id="nom">

        </div>

        <div class="form-group">
            <label for="prenom">Prénom *</label>
            <input class="form-control" type="text" name="prenom" id="prenom">

        </div>

        <div class="form-group">
            <label for="email">Email *</label>
            <input class="form-control" type="email" name="email" id="email">

        </div>

        <div class="form-group">
            <label for="mdp">Mot de passe *</label>
            <input class="form-control " type="password" name="mdp" id="mdp">
        </div>

        <div class="form-group mb-0 pb-0">
            <label for="password_confirmation">Confirmer le Mot de passe *</label>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <a href="/connexion">Connexion</a>

        <div class="form-group mt-3">
            <input type="submit" class="btn btn-primary" value="Inscription" id="btn-valid-form">
        </div>

    </form>
@endsection
