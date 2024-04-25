@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- 
    <h2 class="fs-1 fw-semibold text-light text-center my-4">
        {{ __('Home') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-5">
            <div id="home-card" class="card border-0" role="button">
                <div class="card-body rounded">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="nav-link text-uppercase text-center fw-bold text-dark" href="{{route('admin.dishes.index') }}">Visualizza tutti i piatti</a>
                </div>
            </div>
        </div>
    </div> --}}

    <section id="home">
        <div class="welcome">
            <h1>Titolo</h1>
            <p>Paragrafo</p>
            <a href="{{route('register')}}" class="btn border-light-subtle">Registrati</a>
        </div>
        <div class="jumbotron">
            <figure>
                <img src="{{asset('img/immagine-1.jpg')}}" alt="Immagine" class="img-fluid">
            </figure>
        </div>
    </section>

@endsection