@extends('template')


@section('content')
    @csrf

    @if (session()->has('text'))
        <p>{{ session('text') }}</p>
    @endif

    <form url="{{ route('send.message.google') }}" method="POST">
        <label for="message">Message</label>
        {{ @csrf_field() }}

        
            <label for="email" class="form">Votre Email</label>
            <input type="email" class="form" name="email" id="email" placeholder="name@example.com"  maxlength="255" minlength="3">
       
        
            <label for="subject" class="form">Object</label>
             <input type="text" class="form" name="subject" id="object" placeholder="Object du mail">
                
        <p>
            <textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici avec votre mail"></textarea>
            {{ $errors->first('message', ':message') }}
        </p>
        <button type="submit">Envoyer</button>
    </form>
@endsection
