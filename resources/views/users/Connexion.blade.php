@extends('template')

@section('content')

    @error('message')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <form class="col-md-4 p-5 bg-dark text-white m-auto" method="POST" action="/connexion">

        @csrf

        <h2>CONNEXION</h2>

        <div class="form-group">
            <label for="email">Email *</label>
            <input class="form-control" type="email" name="email" id="email">

        </div>

        <div class="form-group">
            <label for="mdp">Mot de passe *
                <a href="/forget-password" class="float-right">
                    Forgot Password?
                </a>
            </label>
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
