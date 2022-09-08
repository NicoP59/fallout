<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/contact/oubliemdp.css') }}">
    <title>Vault Tec Corporation</title>
</head>

<main>

    <body>

        <div class="overlay"></div>
        <div class="scanline"></div>
        <div class="wrapper">
            <div class="content clearfix">

                <header class="site clearfix">
                    <div class="col one">
                        <img src="/img/vault-tec.png" alt="76 Systems" width="740" height="729" id="logo-v" />
                    </div>
                    <div class="col two">
                        <h4>76 Systems (tm)</h4>
                        <h4>
                            <span>R</span>obCo <span>I</span>ndustries <span>T</span>ermlink
                            <span>P</span>rotocol (RITP)
                        </h4>
                        <p>----------------------------------------</p>
                        <p>VAULT-TEC v 1.0.0 - 2075 - 2077</p>
                        <p>(c)RobCo Industries Unified Operating System</p>
                        <p>- Server 76 -</p>
                    </div>
                </header>

                <nav class="site clear">
                    <ul>
                        <li><a href="/" title="">Accueil</a></li>
                    </ul>
                </nav>

                <p>System RobCo Integrated Verify Email System (SRIVES)</p>
                <p>System Administrator (SYSADM) - Nicolas Payne -- Caroline Dorchies</p>

                <p class="clear"></p>

                <p class="welcome-contact">Bienvenue dans le système de vérification de mail intégré de RobCo Industries
                    (SRICS).
                    Remplissez les champs ci-dessous afin de recevoir un lien de vérification de mail par
                    mail
                    et appuyez sur le bouton ENVOYER.
                    Nous vous remercions de la confiance que vous accordez à RobCo Industries.
                </p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <form method="POST" action="/verif-mail">
                    @csrf

                    <h2>Vérifiez votre email</h2>
                    {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                    <div class="form-group">
                        <label for="email">
                            Adresse Email >>
                        </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value={{ session('email') }} autocomplete="email" autofocus disabled>
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-primary">
                            ENVOYER
                        </button>
                    </div>
                </form>

    </body>

</main>

<script src="/js/contact.js"></script>
