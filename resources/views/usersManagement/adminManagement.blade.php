@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/userManagement/users-management.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <article>
        @if ($users->isEmpty())
            <p>Aucun utilisateur</p>
        @else
            @foreach ($users as $user)
                <section id="div-carte-user">
                    <div id="div-carte-user">
                        <img src="{{ $user->avatar }}" class="avatar" alt="">
                        <p>{{ $user->nom }}</p>
                        <p>{{ $user->prenom }}</p>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->type }}</p>
                        <p>{{ $user->mdp }}</p>
                    </div>
                    <div>
                        <form method="POST" action="/gestion-administrateurs/{{ $user->iduser }}">
                            @csrf
                            <div>
                                <label for="type">Changer en </label>
                                <input type="submit" name="type" id="change-to-admin" value="Utilisateur">
                            </div>
                        </form>
                        <a class="text-danger" href="/delete-admin/{{ $user->iduser }}"
                            onclick="return confirm('Toutes ses données seront perdues. Êtes vous sûr(e) de vouloir supprimer ce compte ? CONFIRMER ?')">Supprimer</a>
                    </div>
                </section>
            @endforeach
        @endif
    </article>


@endsection
