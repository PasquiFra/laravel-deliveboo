@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section id="home">
        <div class="welcome">
            <h1>Benvenuti su PasqEat</h1>
            <p class="w-50">Registrati, crea il tuo ristorante e personalizza il tuo menù.</p>
            <a href="{{route('register')}}" class="btn border-light-subtle">Registrati</a>
        </div>
        <div class="jumbotron">
            <figure>
                <img src="{{asset('img/immagine-1.jpg')}}" alt="Immagine" class="img-fluid">
            </figure>
        </div>
    </section>

@endsection