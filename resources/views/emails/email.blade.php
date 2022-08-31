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
                        <img src="img/vault-tec.png" alt="76 Systems" width="740" height="729" id="logo-v" />
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
                        <li><a href="/connexion" title="">Connexion</a></li>
                    </ul>
                </nav>

                <p>System RobCo Integrated Forgotten Password System (SRIFPS)</p>
                <p>System Administrator (SYSADM) - Nicolas Payne -- Caroline Dorchies</p>

                <p class="clear"></p>

                <p class="welcome-contact">Bienvenue dans le système d'oubli de mot de passe intégré de RobCo Industries
                    (SRICS).
                    Remplissez le champ ci-dessous afin de recevoir un lien de réinitialisation de mot de passe par mail
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

                <form method="POST" action="/forget-password">
                    @csrf

                    <h2>Réinitialiser le mot de passe</h2>

                    <div class="form-group">
                        <label for="email">
                            Adresse Email >>
                        </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                            placeholder="Entrez votre email">
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
