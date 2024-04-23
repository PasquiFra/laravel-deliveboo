@extends('layouts.app')

@section('title', $dish->name)

@section('content')
<section class="p-3 my-5">
    <div class="glass-card px-4 pb-4 card-color">    
        <div class="card-header pt-3 pb-4">
            <div class="col">
                <h1 class="card-title text-center">{{$dish->name}}</h1>
            </div>
        </div>
        <div class="card-body row position-relative d-flex align-items-center"> 

            {{-- IMMAGINE --}}
            <div class="col-sm-auto col-md-6 col-lg-4 col-xl-3 col-12">
                <picture class="show-picture text-center">
                    @if ($dish->image)
                        <img src="{{asset('storage/' . $dish->image)}}" alt="foto-{{$dish->slug}}" class="img-fluid rounded">
                    @else
                        <img src="{{asset('/images/default-dish.png')}}" alt="" class="img-fluid rounded">
                    @endif
                </picture>
            </div>

            {{-- INFO PIATTO --}}
            <div class="col-sm-12 col-md-6 col-lg-8 col-xl-9 col d-flex justify-content-between"> 
                <div class="info-dishes">
                    <div class="mb-3 mt-3">
                        L'articolo è
                        <span class="{{$dish->availability ? 'available' : 'text-disabled'}}">
                            <strong>
                                {{$dish->availability ? 'disponibile' : 'impostato come bozza'}}
                            </strong>
                        </span>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="mb-3">
                            @if ($dish->course)
                                <span class="tag bg-course px-2 py-1 text-center">{{$dish->course}}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            @if ($dish->diet)
                            <span class="tag bg-yellow px-2 py-1 text-center">{{$dish->diet}}</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        Ingredienti:
                        <ul>
                            @foreach ($dish->ingredient as $i)
                                <li class="mb-2">{{$i}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        Prezzo: € <span>{{$dish->price}}</span>
                    </div>
                </div>
                {{-- BOTTONI di CRUD --}}
                <div class="button-group">
                    <div class="d-flex gap-2 mt-4">
                        {{--# EDIT --}}
                        <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn button-outline-light edit">
                            <i class="fas fa-pencil"></i>
                        </a>
                        {{--# DESTROY --}}
                        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn button-outline-light destroy"><i class="far fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary my-4">
            <i class="fa-solid fa-left-long me-2"></i>Torna indietro
        </a>
    </div>
</section>
@endsection