<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/authentification/connexion.css') }}">
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
                        <li><a href="/inscription">S'inscrire</a></li>
                    </ul>
                </nav>

                <p>System RobCo Integrated Connection System (SRICS)</p>
                <p>System Administrator (SYSADM) - Nicolas Payne -- Caroline Dorchies</p>

                <p class="clear"></p>

                <p class="welcome-contact">Bienvenue dans le système de connexion intégré de RobCo Industries (SRICS).
                    Remplissez les champs ci-dessous et appuyez sur le bouton CONNEXION.
                    Nous vous remercions de la confiance que vous accordez à RobCo Industries.
                </p>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>, il y a eu des problèmes avec vos informations...

                        </div>
                @endif

                <form class="col-md-4 p-5 bg-dark text-white m-auto" method="POST" action="/connexion">

                    @csrf

                    <h2>CONNEXION</h2>

                    <div class="form-group">
                        <label for="email">Email >></label>
                        <input class="form-control" type="email" name="email" id="email"
                            placeholder="Votre email">


                    </div>

                    <div class="form-group">
                        <label for="mdp">Mot de passe >>

                        </label>
                        <input class="form-control" type="password" name="mdp" id="mdp"
                            placeholder="Votre mot de passe">




                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" class="btn btn-primary" value="Connexion">
                    </div>
                    <div class="forgotten-password">
                        <a href="/forget-password" class="forgotten">
                            Mot de passe oublié ?
                        </a>
                    </div>

                </form>
    </body>

</main>

<script src="/js/contact.js"></script>
