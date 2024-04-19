@extends('layouts.app')
@section('content')
    <section id="restaurant-show">
        <h1 class="text-center my-4">{{$restaurant->name}}</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img src="" alt="{{$restaurant->name}}">
                    </div>
                    <div class="col">
                        <h3 class="text-center">{{$restaurant->name}}</h3>
                        <p><i class="fa-solid fa-map-pin me-3"></i>{{$restaurant->address}}</p>
                        <p><i class="fa-solid fa-phone me-3"></i>{{$restaurant->phone}}</p>
                        <p><i class="fa-solid fa-location-dot me-3"></i>{{$restaurant->city}}</p>
                        <p><i class="fa-solid fa-envelope me-3"></i>{{$restaurant->address}}</p>
                        <p><strong>P.IVA: </strong>{{$restaurant->vat}}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer mt-4">
                <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" class="btn btn-warning"><i class="fas fa-pencil me-2"></i>Modifica</a>
            </div>
        </div>
    </section>
@endsection