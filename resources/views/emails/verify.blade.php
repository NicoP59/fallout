<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vault Tec Corporation</title>
</head>

<main>

    <body>


        <h1 style="color:#486E9D; text-align:center;margin-top: 50px;">
            Vault-Tec Corporation - Réinitialisation de mot passe
        </h1>
        <div style="text-align: center">
            <img src="{{ $message->embed(public_path() . '/img/templates/LOGO.png') }}"
                style="width: 200px; margin-bottom: 50px" />
        </div>

        <div class="card-header"
            style="margin-left: auto; margin-right: auto; width: 500px; background-color:#486E9D; 
            border: 2px solid #e2da47; color: #fff; text-align:center;">
            <p>
                Vérifiez votre adresse e-mail :
            </p>
            <p>
                <a href="http://localhost:8888/reset-password/{{ $token }}" style="color: #e2da47;">Lien de
                    réinitialisation</a>
            </p>
        </div>

    </body>
</main>
