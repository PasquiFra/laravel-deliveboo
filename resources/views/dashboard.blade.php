@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">
        Benvenuto {{ Auth::user()->name }}
    </h1>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h3>
            </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        {{-- Finire di compilare gli href --}}
                        <div class="col-3 text-center my-4">
                            <a href="{{route('admin.dishes.index')}}">
                                <img class="img-fluid w-50" src="{{asset('img/menu.png')}}" alt="menu">
                            </a>
                        </div>
                        <div class="col-3 text-center my-4">
                            <a href="{{route('admin.restaurants.show', Auth::user()->restaurant)}}">
                                <img class="img-fluid w-50" src="{{asset('img/restaurant.png')}}" alt="ristorante">
                            </a>
                        </div>
                        <div class="col-3 text-center my-4">
                            <a href="">
                                <img class="img-fluid w-50" src="{{asset('img/increase.png')}}" alt="grafico">
                            </a>
                        </div>
                        <div class="col-3 text-center my-4">
                            <a href="">
                                <img class="img-fluid w-50" src="{{asset('img/receipt.png')}}" alt="ordine">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
