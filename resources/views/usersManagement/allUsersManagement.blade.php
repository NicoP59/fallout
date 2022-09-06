@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/usersManagement/all-users-management.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <article>
        <a href="/gestion-administrateurs">ADMIN</a>
        <a href="/gestion-utilisateurs">USERS</a>
    </article>
@endsection
