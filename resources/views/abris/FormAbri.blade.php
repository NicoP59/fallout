@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/abris/create.css') }}">
</head>

@section('content')
    <main>

        <body>
            <p class="retour"><a href="/abris" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>
            <h1 class="create-abri">CRÉER UNE FICHE ABRI</h1>

            <form action="/FormCreate" method="POST" enctype="multipart/form-data" class="form-create-abri">

                @csrf
                <div class="create-input">
                    <div class="custom-file-upload">
                        <label for="img" class="img">Télécharger </label>
                        <i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="input-custom">
                        <input type="file" class="custom-file-upload" name="img1" id="file-input" required />
                    </div>

                </div>
                <div class="image">
                    <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="img-create">
                </div>

                <div class="form-infos">
                    <div class="create-first">
                        <div class="label">
                            <label for="abri">Nom de l'abri</label>
                        </div>
                        <div>
                            <input type="text" id="abri" name="abri" required />
                        </div>
                    </div>


                    <div class="create">
                        <div class="label">
                            <label for="location">Localisation</label>
                        </div>
                        <div>
                            <input type="text" id="location" name="location" required>
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">

                            <label for="maxplace">Nombre de place</label>

                        </div>
                        <div>
                            <input type="number" id="maxplace" name="maxplace" required>
                        </div>
                    </div>

                    <div class="create">
                        <div class="label">
                            <label for="resume">Description</label>
                        </div>
                        <div>
                            <textarea id="resume" rows="3" name="resume" required></textarea>
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
