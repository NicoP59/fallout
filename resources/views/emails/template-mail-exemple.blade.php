<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vault Tec Corporation</title>
</head>

<main>

    <body>
        <h1 style="color:#486E9D; text-align:center;margin-top: 50px;">
            Vault-Tec Corporation - Messagerie
        </h1>
        <div class="card-header"
            style="margin-left: auto; margin-right: auto; width: 700px; background-color:#486E9D; 
            border: 2px solid #e2da47; color: #fff; text-align:left; padding: 20px;">

            <h2 style="color: #e2da47;"> Expéditeur : {{ $data['email'] }}</h2>
            <h2 style="color: #e2da47;"> Objet : {{ $data['subject'] }}</h2>
            <h2 style="color: #fff;"> Message : {{ $data['message'] }}</h2>

        </div>
    </body>

</main>
