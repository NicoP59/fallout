@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/update-avatar.css') }}">
</head>

@section('content')
    <main>
        <h1 class="update-avatar">Choisissez votre avatar :</h1>
        <form method="POST" action="/modifier-avatar" class="form-update-avatar">
            @csrf
            <div class="image">
                <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="img-create">

                <h3>Hommes</h3>


                <article class="avatar-div">
                    <div class="male1">
                        <img src="img/avatar/male/male1.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le beau parleur</label>
                            <input type="radio" name="avatar" id="male1" value="img/avatar/male/male1.png">
                        </div>
                    </div>
                    <div class="male2">
                        <img src="img/avatar/male/male2.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le cannibale</label>
                            <input type="radio" name="avatar" id="male2" value="img/avatar/male/male2.png">
                        </div>
                    </div>
                    <div class="male3">
                        <img src="img/avatar/male/male3.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le boss</label>
                            <input type="radio" name="avatar" id="male3" value="img/avatar/male/male3.png">
                        </div>
                    </div>
                    <div class="male4">
                        <img src="img/avatar/male/male4.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le survivant</label>
                            <input type="radio" name="avatar" id="male4" value="img/avatar/male/male4.png">
                        </div>
                    </div>
                    <div class="male5">
                        <img src="img/avatar/male/male5.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le petit nouveau</label>
                            <input type="radio" name="avatar" id="male5" value="img/avatar/male/male5.png">
                        </div>
                    </div>
                    <div class="male6">
                        <img src="img/avatar/male/male6.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le savant fou</label>
                            <input type="radio" name="avatar" id="male6" value="img/avatar/male/male6.png">
                        </div>
                    </div>
                    <div class="male7">
                        <img src="img/avatar/male/male7.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">Le tank</label>
                            <input type="radio" name="avatar" id="male7" value="img/avatar/male/male7.png">
                        </div>
                    </div>
            </div>
            </article>

            <div class="image">
                <img src="/img/templates/LOGO.png" alt="Vault-Tec" class="img-create">
                <h3>Femmes</h3>

                <article class="avatar-div">
                    <div class="female1">
                        <img src="img/avatar/female/female1.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">L'exploratrice</label>
                            <input type="radio" name="avatar" id="female1" value="img/avatar/female/female1.png">
                        </div>
                    </div>
                    <div class="female2">
                        <img src="img/avatar/female/female2.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">La barbare</label>
                            <input type="radio" name="avatar" id="female2" value="img/avatar/female/female2.png">
                        </div>
                    </div>
                    <div class="female3">
                        <img src="img/avatar/female/female3.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">L'infiltré</label>
                            <input type="radio" name="avatar" id="female3" value="img/avatar/female/female3.png">
                        </div>
                    </div>
                    <div class="female4">
                        <img src="img/avatar/female/female4.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">La voleuse</label>
                            <input type="radio" name="avatar" id="female4" value="img/avatar/female/female4.png">
                        </div>
                    </div>
                    <div class="female5">
                        <img src="img/avatar/female/female5.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">L'avocate</label>
                            <input type="radio" name="avatar" id="female5" value="img/avatar/female/female5.png">
                        </div>
                    </div>
                    <div class="female6">
                        <img src="img/avatar/female/female6.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">La chimiste</label>
                            <input type="radio" name="avatar" id="female6" value="img/avatar/female/female6.png">
                        </div>
                    </div>
                    <div class="female7">
                        <img src="img/avatar/female/female7.png" alt="" class="img-avatar">
                        <div class="radio">
                            <label for="avatar">La professionnelle</label>
                            <input type="radio" name="avatar" id="female7" value="img/avatar/female/female7.png">
                        </div>
                    </div>
            </div>
            </article>

            <div class="validate">
                <input type="submit" value="Modifier mon avatar">
            </div>

        </form>
    </main>
@endsection
