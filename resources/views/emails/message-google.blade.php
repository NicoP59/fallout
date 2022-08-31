<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/contact/message-google.css') }}">
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
                    </ul>
                </nav>

                <p>System RobCo Integrated Message System (SRIMS)</p>
                <p>System Administrator (SYSADM) - Nicolas Payne -- Caroline Dorchies</p>

                <p class="clear"></p>

                <p class="welcome-contact">Bienvenue dans le système de messagerie intégré de RobCo Industries (SRIMS).
                    Remplissez les champs ci-dessous et appuyez sur le bouton ENVOYER. L'administration (SYSADM)
                    répondra
                    à votre demande aussitôt que possible.
                    Nous vous remercions de votre compréhension.
                </p>

                @csrf

                @if (session()->has('text'))
                    <p>{{ session('text') }}</p>
                @endif

                <form url="{{ route('send.message.google') }}" method="POST">

                    {{ @csrf_field() }}
                    <div>
                        <label for="email" class="form">Email >></label>
                        <input type="email" class="form" name="email" id="email" placeholder="mailexample@.fr"
                            maxlength="255" minlength="3" />
                    </div>
                    <div>
                        <label for="subject" class="form">Objet >></label>
                        <input type="text" class="form" name="subject" id="object" placeholder="Objet" />
                    </div>
                    <div>
                        <label for="message" class="form">Message >></label>
                        <textarea name="message" id="message" class="form" rows="5" placeholder="Écrivez votre message içi..."></textarea>
                        {{ $errors->first('message', ':message') }}
                    </div>
                    <div class="inputs">
                        <input type="submit" value="ENVOYER" @class(['btn-submit', 'font-bold' => true]) />
                        <a class="button" alt="" href="/">ANNULER</a>
                    </div>
                </form>
    </body>

</main>

<script src="/js/contact.js"></script>
