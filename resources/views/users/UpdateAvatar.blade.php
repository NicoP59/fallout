@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/update-avatar.css') }}">
</head>

@section('content')
    <h2>Choisissez votre avatar :</h2>
    <form method="POST" action="/modifier-avatar">

        <h3>Hommes</h3>

        <article class="avatar-div">
            <div class="male1">
                <img src="img/avatar/male/male1.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°1</label>
                    <input type="radio" name="avatar" id="male1" value="img/avatar/male1.png">
                </div>
            </div>
            <div class="male2">
                <img src="img/avatar/male/male2.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°2</label>
                    <input type="radio" name="avatar" id="male2" value="img/avatar/male2.png">
                </div>
            </div>
            <div class="male3">
                <img src="img/avatar/male/male3.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°3</label>
                    <input type="radio" name="avatar" id="male3" value="img/avatar/male3.png">
                </div>
            </div>
            <div class="male4">
                <img src="img/avatar/male/male4.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°4</label>
                    <input type="radio" name="avatar" id="male4" value="img/avatar/male4.png">
                </div>
            </div>
            <div class="male5">
                <img src="img/avatar/male/male5.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°5</label>
                    <input type="radio" name="avatar" id="male5" value="img/avatar/male5.png">
                </div>
            </div>
            <div class="male6">
                <img src="img/avatar/male/male6.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°6</label>
                    <input type="radio" name="avatar" id="male6" value="img/avatar/male6.png">
                </div>
            </div>
            <div class="male7">
                <img src="img/avatar/male/male7.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Male n°7</label>
                    <input type="radio" name="avatar" id="male7" value="img/avatar/male7.png">
                </div>
            </div>
        </article>


        <h3>Femmes</h3>

        <article class="avatar-div">
            <div class="female1">
                <img src="img/avatar/female/female1.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°1</label>
                    <input type="radio" name="avatar" id="female1" value="img/avatar/female1.png">
                </div>
            </div>
            <div class="female2">
                <img src="img/avatar/female/female2.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°2</label>
                    <input type="radio" name="avatar" id="female2" value="img/avatar/female2.png">
                </div>
            </div>
            <div class="female3">
                <img src="img/avatar/female/female3.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°3</label>
                    <input type="radio" name="avatar" id="female3" value="img/avatar/female3.png">
                </div>
            </div>
            <div class="female4">
                <img src="img/avatar/female/female4.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°4</label>
                    <input type="radio" name="avatar" id="female4" value="img/avatar/female4.png">
                </div>
            </div>
            <div class="female5">
                <img src="img/avatar/female/female5.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°5</label>
                    <input type="radio" name="avatar" id="female5" value="img/avatar/female5.png">
                </div>
            </div>
            <div class="female6">
                <img src="img/avatar/female/female6.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°6</label>
                    <input type="radio" name="avatar" id="female6" value="img/avatar/female6.png">
                </div>
            </div>
            <div class="female7">
                <img src="img/avatar/female/female7.png" alt="" class="img-avatar">
                <div>
                    <label for="avatar">Female n°7</label>
                    <input type="radio" name="avatar" id="female7" value="img/avatar/female7.png">
                </div>
            </div>
        </article>

        <div class="validate">
            <input type="submit" value="Modifier mon avatar">
        </div>

    </form>
@endsection
