@extends('template')

@section('content')
    <main>

        <body>

            <h1>CREER ARTICLE</h1>

            <form method="POST" action="/create-article" enctype="multipart/form-data">
                @csrf

                <div class="create-article">
                    <label for="nom">Nom de l'article</label>
                    <input type="text" name="nom" id="nom" />
                </div>

                <div class="create-article">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" />
                </div>

                <div class="create-article">
                    <label for="prix">Prix de l'article</label>
                    <input type="number" name="prix" id="prix" />
                </div>

                <div class="create-article">
                    <label for="quantité">Quantité</label>
                    <input type="number" name="quantité" id="quantité" />
                </div>

                <div class="create-article">
                    <label for="img" class="img">Image à télécharger</label>
                    <input type="file" name="img" id="img" />
                </div>

                <div class="submit">
                    <input type="submit" value="Enregistrer" />
                </div>
            </form>

        </body>

    </main>
@endsection
