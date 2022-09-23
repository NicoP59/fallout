@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/abris/abris.css') }}">
</head>

@section('content')
    <main>

        <body>
            <img src="img/radiation.png" alt="Vault-Tec" class="logo-abri" />
            <h1 class="titre-abris">LES ABRIS ANTI-NUCLÉAIRES VAULT-TEC</h1>

            @if (session('type') == 'Administrateur')
                <div class="link-create">
                    <a href="/FormCreate" class="linky-create">
                        <p class="icon-abri">
                            <i class="bi bi-gear-fill"></i>
                        </p>
                    </a>
                    <a href="/FormCreate" class="linky-create">Créer une fiche abri</a>
                </div>
            @endif

            <div class="presentation">
                <p>Cher(e) <span class="span">futur(e) résident(e)</span>, Vault-Tec propose plusieurs abris qui sont,
                    pour chacune d'entre elles, une
                    <span class="span">installation anti-atomique souterraine</span> conçue par Vault-Tec Corporation.
                    Officiellement, ces abris ont
                    été conçus dans le seul but de <span class="span">protéger jusqu'à mille habitants
                        d'un holocauste nucléaire</span>. Inscrivez-vous à l'un d'entre eux afin d'être sur la liste
                    d'attente. Nous
                    vous contacterons afin de procéder aux paiements. Attention, le prix de ces abris peuvent être très
                    <span class="span">onéreux</span> alors veillez bien à avoir ce qu'il faut sous peine de <span
                        class="span">
                        perdre votre place</span>...
                </p>
            </div>

            <article class="abris">
                @foreach ($abris as $abri)
                    <section class="abri">
                        <h2 class="titre">Abri n° {{ $abri->abri }}</h2>
                        <div class="img-abri">
                            <img src="{{ asset('storage/' . $abri->img1) }}" alt="Abri anti-nucléaire Vault-Tec"
                                class="img">
                        </div>
                        <div class="info-abri">
                            <p><a href="/abri/{{ $abri->idabri }}" class="linky-info-abri">En savoir plus sur cet abri <i
                                        class="bi bi-info-circle"></i></a></p>
                        </div>
                        @if (session('type') == 'Administrateur')
                            <div class="modifier-supprimer">
                                <div>
                                    <a class="text-danger" href="/delete/{{ $abri->idabri }}"><i
                                            class="bi bi-trash3"></i></a>
                                </div>
                                <div>
                                    <a class="text-primary" href="/FormUpdate/{{ $abri->idabri }}"><i
                                            class="bi bi-pencil"></i></a>
                                </div>
                            </div>
                        @endif
                    </section>
                @endforeach
            </article>

            <div id="top-btn-section">
                <img src="img/icons/quantum.webp" alt="" id="top-btn">
            </div>
        </body>

    </main>
@endsection
