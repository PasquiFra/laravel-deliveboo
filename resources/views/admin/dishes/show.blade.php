@extends('layouts.app')

@section('content')
<section class="p-3 my-5">
    <div class="card d-flex justify-content-center">
        <div class="card-body">
            <h3 class="card-title">{{$dish->name}}</h3>
            <div>
                L'articolo è 
                <span class="{{$dish->availability ? 'text-success' : 'text-disabled'}}">
                    <strong>
                        {{$dish->availability ? 'attivo nel menu' : 'impostato come bozza'}}
                    </strong>
                </span>
            </div>
            <div>
                {{$dish->diet}}
            </div>
            <div>
                {{$dish->course}}
            </div>
            <picture id="show-picture">
                @if ($dish->image && @getimagesize($dish->image))
                    <img src="{{$dish->image}}" alt="foto-{{$dish->slug}}">
                @else
                    <img src="{{asset('/images/default-dish.png')}}" alt="">
                @endif
            </picture>
            <div class="badge">{{$dish->diet}}</div>
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
            
        </div>
            {{-- BOTTONI di CRUD --}}
        <div class="d-flex gap-2 justify-content-start">
            {{--# EDIT --}}
            <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn-secondary">
                <i class="fas fa-pencil"></i>
            </a>
            {{--# DESTROY --}}
            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
            </form>
        </div>
        
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('admin.dishes.index')}}" class="btn btn-primary my-5">
            Torna indietro
        </a>
    </div>
</section>
@endsection