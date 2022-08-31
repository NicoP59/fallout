@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>
            {{-- Si la session contient un id de session --}}
            @if (Session::has('iduser'))
                {{-- On affiche ce message de bienvenue avec le prénom de session --}}
                <h1>{{ Session::get('prenom') }}, PRENDS TON AVENIR EN MAIN !</h1>
                <h2>PROTEGE LE AVEC</h2>
            @else
                <h1>PRENDS TON AVENIR EN MAIN !</h1>
                <h2>PROTEGE LE AVEC</h2>
            @endif
            <article class="vault-tec">
                <img src="{{ asset('img/templates/LOGO.png') }}" alt="Vault-Tec" class="img-vaulttec">
            </article>

            {{-- PRESENTATION --}}

            <article class="presentation">
                <h3 id="Vault-Tec-titre" class="Vault-Tec-titre"></h3>
                <section class="presentation-p">
                    <p class="p-vaulttec">
                        Créée en 2031 par les États-Unis d'Amérique,
                        <span class="span">Vault-Tec</span> est une entreprise de construction d'
                        avant-guerre contractée par l'État afin de bâtir des vastes et
                        complexes <span class="span">abris anti-nucléaires</span>. C'est un réseau de bunkers
                        connu sous le nom de <span class="span"></span>Vaults</span>. Ils ont été conçus afin de
                        protéger la population en cas d'holocauste nucléaire. Pour l'instant, l'entreprise
                        contient 122 abris. Eau potable, électicité, soins,
                        RobCo Services, tout est pensé afin que vous vous sentiez chez vous !
                    </p>
                    <p class="p-vaulttec">
                        Vous pouvez <span class="span">réserver vos places dans l'abri de votre choix</span>. Pour
                        cela,
                        vous devez vous inscrire, et vous aurez accès à tous les services proposés
                        par Vault-Tec dont :
                    <ul>
                        <li class="li-vaulttec"><span class="span">La liste des abris disponibles par
                                Vault-Tec.</span></li>
                        <li class="li-vaulttec"><span class="span">Une boutique où vous pourrez troquer tout et
                                n'importe quoi !</span></li>
                        <li class="li-vaulttec"><span class="span">Votre boîte à sandwich offerte à
                                l'inscription qui comportera pleins de
                                cadeaux !</span></li>
                        <li class="li-vaulttec"><span class="span">Votre Pip-Boy offert !</span></li>
                    </ul>
                    </p>
                    <p class="p-vaulttec">Pour accéder à toutes ces fonctionnalités, n'hésitez pas à vous <span
                            class="span"><a href="/inscription" class="linky">inscrire</a></span> ou vous <span
                            class="span"><a href="/connexion" class="linky">connecter</a></span> :
                    </p>
                </section>

                {{-- BOUTONS INSCRIPTION / CONNEXION --}}

                <section class="buttons">
                    <button class="button-insc"><a href="/inscription">INSCRIPTION</a></button>
                    <button class="button-co"><a href="/connexion">CONNEXION</a></button>
                </section>
            </article>

            {{-- GALLERIE SPECIAL --}}

            <article class="special">
                <h3 id="special-titre-section" class="special-titre-section"></h3>
                <div class="special-image-div">
                    <img src="{{ asset('img/home/special.png') }}" alt="Special" id="special-image" class="special-image">
                </div>
                <p class="special-p">
                    Votre <span class="span">force</span>, <span class="span">perception</span>, <span
                        class="span">endurance</span>, <span class="span">charisme</span>, <span
                        class="span">intelligence</span>, <span class="span">agilité</span>, et <span
                        class="span">chance</span> évidemment !
                    Ces statistiques primaires, également connues en tant qu'attributs, sont le fondement
                    à partir duquel vous êtes ciselé. N'hésitez pas à consulter votre brochure "Vous êtes <span
                        class="span">S.P.E.C.I.A.L</span>"
                    que vous recevrez à l'inscription !
                </p>
                <section id="gallery">
                    <div class="gallery">
                        <div class="special-div">
                            <p class="special-titre">FORCE</p>
                            <img src="{{ asset('img/home/force.jpg') }}" alt="SPECIAL Force" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">PERCEPTION</p>
                            <img src="{{ asset('img/home/perception.jpg') }}" alt="SPECIAL Perception" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">ENDURANCE</p>
                            <img src="{{ asset('img/home/endurance.jpg') }}" alt="SPECIAL Endurance" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">CHARISME</p>
                            <img src="{{ asset('img/home/charisme.png') }}" alt="SPECIAL Charisme" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">INTELLIGENCE</p>
                            <img src="{{ asset('img/home/intelligence.jpg') }}" alt="SPECIAL Intelligence"
                                class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">AGILITÉ</p>
                            <img src="{{ asset('img/home/agilité.jpg') }}" alt="SPECIAL Agilité" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">CHANCE</p>
                            <img src="{{ asset('img/home/chance.jpg') }}" alt="SPECIAL Chance" class="special-img">
                        </div>
                    </div>
                </section>
            </article>

        </body>

    </main>
@endsection

<script src="/js/typewritter.js"></script>
