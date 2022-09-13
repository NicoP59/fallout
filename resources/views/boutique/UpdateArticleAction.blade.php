@extends('template')

@section('content')
    <main>

        <body>

            @foreach ($boutiques as $boutique)
                <h1>MODIFIER ARTICLE</h1>

                <form method="POST" action="/update-article/{{ $boutique->idproduit }}" enctype="multipart/form-data">
                    @csrf

                    <div class="create-article">
                        <label for="nom">Nom de l'article</label>
                        <input type="text" name="nom" id="nom" value={{ $boutique->nom }} />
                    </div>

                    <div class="create-article">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value={{ $boutique->description }} />
                    </div>

                    <div class="create-article">
                        <label for="prix">Prix de l'article</label>
                        <input type="number" name="prix" id="prix" value={{ $boutique->prix }} />
                    </div>

                    <div class="create-article">
                        <label for="quantité">Quantité</label>
                        <input type="number" name="quantité" id="quantité" value={{ $boutique->quantité }} />
                    </div>

                    <div class="submit">
                        <input type="submit" value="Enregistrer" />
                    </div>
                </form>
            @endforeach

        </body>

    </main>
@endsection
