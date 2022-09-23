@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/userManagement/users-management.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>

            <img src="img/logo-vt.png" alt="Vault-Tec" class="logo-vt" />
            <h1 class="titre-usermanagement">LES UTILISATEURS VAULT-TEC</h1>

            <p class="retour"><a href="/gestion" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            <h2 class="title-users">Avec organisation :</h2>
            @if ($usersConfrerie->isEmpty())
                <div class="no-user">
                    <p>Aucun utilisateur enregistré...</p>
                </div>
            @else
                <article class="cards">
                    @foreach ($usersConfrerie as $userConfrerie)
                        <section class="div-carte-user">
                            <figcaption class="figcaption-users">
                                @if ($userConfrerie->isVerified == null)
                                    <p class="icon-user"><i class="bi bi-person-x"></i></p>
                                @else
                                    <p class="icon-user"><i class="bi bi-person-check"></i></p>
                                @endif
                                <div class="nom-prenom">
                                    <p class="prenom">{{ $userConfrerie->prenom }}</p>
                                    <p class="nom">{{ $userConfrerie->nom }}</p>
                                </div>
                                <p class="email">{{ $userConfrerie->email }}</p>
                            </figcaption>
                            <figure>
                                <div class="confrerie-img">
                                    <img src="{{ $userConfrerie->img }}" class="confrerie" alt="Confrerie">
                                </div>
                                <div>
                                    <img src="{{ $userConfrerie->avatar }}" class="avatar" alt="Avatar">
                                </div>
                            </figure>
                            <form method="POST" action="/gestion-utilisateurs/{{ $userConfrerie->iduser }}"
                                class="change-type">
                                @csrf
                                <label for="type"><i class="bi bi-arrow-clockwise"></i> </label>
                                <input type="submit" name="type" id="change-to-admin" class="change"
                                    value="Administrateur">
                            </form>
                            <a class="text-danger" href="/delete-user/{{ $userConfrerie->iduser }}"
                                onclick="return confirm('Toutes ses données seront perdues. Êtes vous sûr(e) de vouloir supprimer ce compte ? CONFIRMER ?')"><i
                                    class="bi bi-trash3"></i></a>
                        </section>
                    @endforeach
                </article>
            @endif

            <h2 class="title-users">Sans organisation :</h2>
            @if ($users->isEmpty())
                <div class="no-user">
                    <p>Aucun utilisateur enregistré...</p>
                </div>
            @else
                <article class="cards">
                    @foreach ($users as $user)
                        <section class="div-carte-user">
                            <figcaption class="figcaption-users">
                                @if ($user->isVerified == null)
                                    <p class="icon-user"><i class="bi bi-person-x"></i></p>
                                @else
                                    <p class="icon-user"><i class="bi bi-person-check"></i></p>
                                @endif
                                <div class="nom-prenom">
                                    <p class="prenom">{{ $user->prenom }}</p>
                                    <p class="nom">{{ $user->nom }}</p>
                                </div>
                                <p class="email">{{ $user->email }}</p>
                            </figcaption>
                            <figure>
                                <img src="{{ $user->avatar }}" class="avatar" alt="Avatar">
                            </figure>
                            <form method="POST" action="/gestion-utilisateurs/{{ $user->iduser }}" class="change-type">
                                @csrf
                                <label for="type"><i class="bi bi-arrow-clockwise"></i> </label>
                                <input type="submit" name="type" id="change-to-admin" class="change"
                                    value="Administrateur">
                            </form>
                            <a class="text-danger" href="/delete-user/{{ $user->iduser }}"
                                onclick="return confirm('Toutes ses données seront perdues. Êtes vous sûr(e) de vouloir supprimer ce compte ? CONFIRMER ?')"><i
                                    class="bi bi-trash3"></i></a>
                        </section>
                    @endforeach
                </article>
            @endif

            <div id="top-btn-section">
                <img src="img/icons/quantum.webp" alt="" id="top-btn">
            </div>

        </body>

    </main>
@endsection
