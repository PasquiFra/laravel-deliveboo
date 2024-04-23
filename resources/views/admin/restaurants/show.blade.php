@extends('layouts.app')
@section('content')
    <section id="restaurant-show">
        <div class="card spacing">
            <div class="card-header">
                <h1 class="text-center">{{$restaurant->name}}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img src="{{$restaurant->image}}" alt="{{$restaurant->name}}" class="img-fluid">
                    </div>
                    <div class="col">
                        <p><i class="fa-solid fa-map-pin me-2"></i>{{$restaurant->address}}</p>
                        <p><i class="fa-solid fa-phone me-2"></i>{{$restaurant->phone}}</p>
                        <p><i class="fa-solid fa-location-dot me-2"></i>{{$restaurant->city}}</p>
                        <p><i class="fa-solid fa-envelope me-2"></i>{{$restaurant->email}}</p>
                        <p><strong>P.IVA: </strong>{{$restaurant->vat}}</p>
                        <p><strong>Categorie: </strong>
                            @foreach ($restaurant->categories as $index => $category)                              
                                {{$category->label}}@if($index < count($restaurant->categories) - 1), @else. @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <a href="{{route('admin.dishes.index')}}">
                            <img class="img-fluid w-50" src="{{asset('img/menu.png')}}" alt="menu">
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('dashboard')}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
                    <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" class="btn btn-warning"><i class="fas fa-pencil me-2"></i>Modifica</a>
                </div>
            </div>
        </div>
    </section>
@endsection