@extends('template')
@section('content')
    <h2>Mon profil</h2>

    <form method="POST" action="/mon-profil" enctype="multipart/form-data">
        @csrf

        {{-- <div class="avatar">
            <img src="" alt="" class="img-avatar">
        </div>
        <div class="form-group">
            <label for="form-Avatar">Changer mon avatar</label>
            <input type="file" name="avatar" id="form-Avatar" class="form-Avatar">
        </div> --}}
        <div class="form-group">
            <label for="nom">Nom de famille</label>
            <input type="text" name="nom" class="nom" value="{{ Session::get('nom') }}">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="prenom" value="{{ Session::get('prenom') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="email" value="{{ Session::get('email') }}">
        </div>
        <div class="form-group">
            <label for="mdp">Nouveau mot de passe</label>
            <input type="password" name="mdp" class="mdp">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="password_confirmation">
        </div>
        <div class="form-group">
            <input type="submit" value="Modifier mon profil">
        </div>
        <div class="form-group">
            <a href="">Désactiver mon compte</a>
        </div>

    </form>
@endsection
