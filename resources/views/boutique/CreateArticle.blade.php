@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/boutique/create.css') }}">
</head>

@section('content')
    <main>

        <body>
            <p class="retour"><a href="/boutique" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            <h1 class="create-article">CRÉER UN ARTICLE</h1>

            <form method="POST" action="/create-article" enctype="multipart/form-data" class="form-create-article">
                @csrf

                <div class="create-input">
                    <div class="custom-file-upload">
                        <label for="img" class="img">Télécharger </label>
                        <i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="input-custom">
                        <input type="file" name="img" id="file-input" class="custom-file-upload" required />
                    </div>
                </div>

                <div class="image">
                    <img src="img/templates/LOGO.png" alt="Vault-Tec" class="img-create">
                </div>

                <div class="form-infos">
                    <div class="create-first">
                        <div class="label">
                            <label for="nom">Nom de l'article</label>
                        </div>
                        <div>
                            <input type="text" name="nom" id="nom" required />
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="description">Description</label>
                        </div>
                        <div>
                            <textarea name="description" id="description" required></textarea>
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="prix">Prix de l'article</label>
                        </div>
                        <div>
                            <input type="number" name="prix" id="prix" required />
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="quantité">Quantité</label>
                        </div>
                        <div>
                            <input type="number" name="quantité" id="quantité" required />
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit"><i class="bi bi-send-plus"></i></button>
                    </div>
                </div>

            </form>

        </body>

    </main>
@endsection


<script src="js/input-file.js"></script>
