@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/userManagement/users-management.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <article>
        @foreach ($users as $user)
            <div id="div-carte-user">
                <img src="{{ $user->avatar }}" class="avatar" alt="">
                <p>{{ $user->nom }}</p>
                <p>{{ $user->prenom }}</p>
                <p>{{ $user->email }}</p>
                <p>{{ $user->age }}</p>
                @if ($user->sexe == 0)
                    <i class="bi bi-gender-female"></i>
                @else
                    <i class="bi bi-gender-male"></i>
                @endif
                <p>{{ $user->type }}</p>
                <p>{{ $user->mdp }}</p>
            </div>
        @endforeach
    </article>
@endsection
