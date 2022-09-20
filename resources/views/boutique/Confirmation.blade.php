@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/boutique/confirmation.css') }}">
</head>

@section('content')
    <main>

        <body>

            <h1 class="confirmation-commande">CONFIRMATION DE COMMANDE</h1>
            <div class="delivery">
                <i class="bi bi-truck"></i>
            </div>

            <article class="confirm">
                @foreach ($users as $user)
                    <p class="p-confirm">Bonjour <span class="span-confirm">{{ $user->prenom }} {{ $user->nom }}</span> !
                        Votre commande est
                        prise en
                        considération avec
                        succès. Nous vous remercions d'avoir fait vos achats chez <span class="span-confirm">Vault-Tec</span>
                        ! Vous reçevrez
                        votre commande
                        directement dans la boîte aux lettre de votre abri attitré. Passez une agréable journée ! </p>
                @endforeach
                <div class="retour-div">
                    <a href="/" class="retour"><i class="bi bi-house-door"></i></a>
                </div>
            </article>

        </body>

    </main>
@endsection
