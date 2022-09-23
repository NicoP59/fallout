@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/userManagement/all-users-management.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>

            <img src="img/logo-vt.png" alt="Vault-Tec" class="logo-vt" />
            <h1 class="titre-usermanagement">GESTION DES UTILISATEURS VAULT-TEC</h1>

            <article class="gestion-users-page">
                <a href="/gestion-administrateurs">
                    <section class="admins">
                        <figcaption class="figcaption-users">
                            <p class="link-gestion">Administrateurs</p>
                        </figcaption>
                        <figure>
                            <img src="img/usersmanagement/admin.png" alt="Administrateurs" class="img-user">
                        </figure>
                    </section>
                </a>
                <a href="/gestion-utilisateurs">
                    <section class="users">
                        <figcaption class="figcaption-users">
                            <p class="link-gestion">Utilisateurs</p>
                        </figcaption>
                        <figure>
                            <img src="img/usersmanagement/user.png" alt="Utilisateurs" class="img-user">
                        </figure>
                    </section>
                </a>
            </article>

        </body>
    </main>
@endsection
