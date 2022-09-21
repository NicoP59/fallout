@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/boutique/update.css') }}">
</head>
@section('content')
    <main>

        <body>

            @foreach ($boutiques as $boutique)
                <h1 class="update-article">MODIFIER ARTICLE</h1>

                <form method="POST" action="/update-article/{{ $boutique->idproduit }}" enctype="multipart/form-data"
                    class="form-update-article">
                    @csrf

                    <div class="image">
                        <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="img-create">
                    </div>

                    <div class="form-infos">
                        <div class="create-first">
                            <div class="label">
                                <label for="nom">Nom de l'article</label>
                            </div>
                            <div>
                                <input type="text" name="nom" id="nom" value={{ $boutique->nom }} />
                            </div>
                        </div>

                        <div class="create">
                            <div class="label">
                                <label for="description">Description</label>
                            </div>
                            <div>
                                <textarea name="description" id="description">{{ $boutique->description }}</textarea>
                            </div>
                        </div>

                        <div class="create">
                            <div class="label">
                                <label for="prix">Prix de l'article</label>
                            </div>
                            <div>
                                <input type="number" name="prix" id="prix" value={{ $boutique->prix }} />
                            </div>
                        </div>

                        <div class="create">
                            <div class="label">
                                <label for="quantité">Quantité</label>
                            </div>
                            <div>
                                <input type="number" name="quantité" id="quantité" value={{ $boutique->quantité }} />
                            </div>
                        </div>

                        <div class="submit">
                            <button type="submit"><i class="bi bi-send-plus"></i></button>
                        </div>
                    </div>
                </form>
            @endforeach

        </body>

    </main>
@endsection
