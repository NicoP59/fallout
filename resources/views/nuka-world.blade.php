@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/nuka/nuka.css') }}">
    <title>Welcome to Nuka World</title>
</head>

@section('content')
    <main id="main">

        <body>

            <p>NUKA</p>
            {{-- <video controls width="250">

                {{-- <source src="/videos/nuka-world.mp4" type="video/mp4"> --}}

            Sorry, your browser doesn't support embedded videos.
            </video> --}}

        </body>

    </main>
@endsection

<script src="/js/confettis.js"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js') }}"></script>
