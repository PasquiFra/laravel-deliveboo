@extends('layouts.app')

@section('content')
<section class="p-3 my-5">
    <div class="card transparent-card text-white">
        <div class="card-body row position-relative"> 
            <div class="col-md-3">
                <picture id="show-picture">
                    {{-- @if ($dish->image && @getimagesize($dish->image)) --}}
                        <img src="{{asset('storage/' . $dish->image)}}" alt="foto-{{$dish->slug}}" class="img-fluid">
                    {{-- @else
                        <img src="{{asset('/images/default-dish.png')}}" alt="" class="img-fluid">
                    @endif --}}
                </picture>
            </div>
            <div class="col-md-5"> 
                <h3 class="card-title">{{$dish->name}}</h3>
                <div class="my-1">
                    L'articolo è
                    <span class="{{$dish->availability ? 'available' : 'text-disabled'}}">
                        <strong>
                            {{$dish->availability ? 'disponibile' : 'impostato come bozza'}}
                        </strong>
                    </span>
                </div>
                <div id="add-tags" class="my-2">
                    <span class="tag bg-red text-center">{{$dish->course}}</span>
                    <span class="tag bg-yellow text-center">{{$dish->diet}}</span>
                </div>
                <div>
                    Ingredienti:
                    <ul>
                        @foreach ($dish->ingredient as $i)
                            <li>{{$i}}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    Prezzo: € <span>{{$dish->price}}</span>
                </div>
                <div class="d-flex gap-2 justify-content-start">
                    {{--# EDIT --}}
                    <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn-outline-light edit">
                        <i class="fas fa-pencil"></i>
                    </a>
                    {{--# DESTROY --}}
                    <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-light destroy"><i class="far fa-trash-can"></i></button>
                    </form>
                </div>
            </div>
        </div>
        {{-- BOTTONI di CRUD --}}
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('admin.dishes.index')}}" class="btn btn-primary my-5">
            Torna indietro
        </a>
    </div>
</section>
@endsection