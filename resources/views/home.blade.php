@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <title>Fall Out</title>
</head>

@section('content')
    <main>

        <body>
            <h1>PRENDS TON AVENIR EN MAIN !</h1>
            <h2>PROTEGE LE AVEC</h2>

            <article class="vault-tec">
                <img src="{{ asset('img/templates/LOGO.png') }}" alt="Vault-Tec" class="img-vaulttec">
            </article>

            <article class="presentation">
                <h3 class="Vault-Tec-titre">QU'EST-CE QUE LA VAULT-TEC CORPORATION ?</h3>
                <div class="presentation-p">
                    <p class="p-vaulttec">
                        Créée en 2031 par les États-Unis d'Amérique,
                        <span class="span">Vault-Tec</span> est une entreprise de construction d'
                        avant-guerre contractée par l'État afin de bâtir des vastes et
                        complexes <span class="span">abris anti-nucléaires</span>. C'est un réseau de bunkers
                        connu sous le nom de <span class="span"></span>Vaults</span>. Ils ont été conçus afin de
                        protéger la population en cas d'holocauste nucléaire. Pour
                        l'instant, l'entreprise contient 122 abris.
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
                            class="span">inscrire</span> ou vous <span class="span">connecter</span> :
                    </p>
                </div>
                <section class="buttons">
                    <button class="button-insc">INSCRIPTION</button>
                    <button class="button-co">CONNEXION</button>
                </section>
            </article>

            <article class="special">
                <h3>Qu'est-ce qui vous rend S.P.E.C.I.A.L ??</h3>
                <p>
                    Votre force, perception, endurance, charisme, intelligence, agilité, et chance évidemment !
                    Ces statistiques primaires, également connues en tant qu'attributs, sont le fondement
                    à partir duquel vous êtes ciselé. N'hésitez pas à consulter votre brochure "Vous êtes S.P.E.C.I.A.L"
                    que vous recevrez à l'inscription !
                </p>
                <section id="gallery">
                    <h3 class="special-titre-gallery">S.P.E.C.I.A.L</h3>
                    <div class="gallery">
                        <div class="special-div">
                            <p class="special-titre">FORCE</p>
                            <img src="{{ asset('img/home/force.jpg') }}" alt="SPECIAL Force" class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">PERCEPTION</p>
                            <img src="{{ asset('img/home/perception.jpg') }}" alt="SPECIAL Perception"
                                class="special-img">
                        </div>
                        <div class="special-div">
                            <p class="special-titre">ENDURANCE</p>
                            <img src="{{ asset('img/home/endurance.jpg') }}" alt="SPECIAL Endurance"
                                class="special-img">
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

<script src="/js/galleryvideo.js"></script>
