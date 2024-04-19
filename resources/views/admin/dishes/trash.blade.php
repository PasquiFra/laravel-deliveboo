@extends('layouts.app')


@section('content')
<section id='dishes-trash' class="my-5">
    <h1 class="mb-5">Piatti Eliminati</h1>
    {{--Tabella--}}
    <table class="table table-dark">
        {{-- HEADER TABELLA --}}
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Quantità</th>
                <th scope="col">Disponibile (si/no)</th>
                <th scope="col">Dieta</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Immagine</th>
                <th scope="col">Data creazione</th>
                <th scope="col">Ultima modifica</th>
                <th scope="col"></th>
            </tr>
        </thead>
        {{-- BODY TABELLA --}}
        <tbody>
            @forelse ($dishes as $dish)
            <tr>
              <th scope="row">{{$dish->id}}</th>
              <td>{{$dish->name}}</td>
              <td>{{$dish->slug}}</td>
              <td>{{$dish->quantity}}</td>
              <td>{{$dish->availability}}</td>
              <td>{{$dish->diet}}</td>
              <td>{{$dish->prezzo}}</td>
              <td>{{$dish->ingredienti}}</td>
              <td>{{$dish->image}}</td>
              <td>{{$dish->created_at}}</td>
              <td>{{$dish->updated_at}}</td>
              <td>
                <div class="d-flex gap-2 justify-content-end">
                  {{--Vedi il Piatto--}}
                  <a href="{{ route('admin.dishes.show', $dish->id)}}" class="btn btn-sm btn-primary">
                    <i class="far fa-eye"></i>
                  </a>
                  {{-- Modifica il Piatto --}} 
                  <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn-warning">
                    <i class="fas fa-pencil"></i>
                  </a>
                </div>
              </td>
            </tr>
            {{-- NESSUN PROGETTO --}}
            @empty
            <h1>Non ci sono Piatti eliminati</h1>
            @endforelse
        </tbody>
    </table> 
    <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary">Piatti disponibili</a>
</section>
@endsection
