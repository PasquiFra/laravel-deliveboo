
@extends('layouts.app')
 
@section('content')

<div class="container">
    
    <div class="d-flex justify-content-end gap-2 p-2 my-3">
        <!-- Cestino -->
        <a href="{{route('admin.dishes.trash')}}" class="btn btn-danger">
            <i class="far fa-trash-can"></i> 
            Vedi Cestino
        </a>
        <!-- Crea nuovo dish -->
        <a href="{{route('admin.dishes.create')}}" class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            Aggiungi piatto
        </a>
    </div>
    <table class="table">

        {{-- HEADER TABELLA --}}
        <thead>
            <tr class="">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Online</th>
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
              <td>{{$dish->availability == 1 ? 'Si' : 'No'}}</td>
              <td>{{$dish->diet}}</td>
              <td>{{$dish->price}}</td>
              <td>{{$dish->ingredient}}</td>
              <td class="image-preview">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThT_FiKa24LyxPc7o6o0CtG_wKVYFrdBnP3qoRIZeXwg&s" alt="dish-image">
              </td>
              <td>{{$dish->created_at}}</td>
              <td>{{$dish->updated_at}}</td>
              <td>
                <div class="d-flex gap-2 justify-content-end">
                  {{--# COLLEGAMENTO A SHOW --}}
                  <a href="{{ route('admin.dishes.show', $dish->id)}}" class="btn btn-sm btn-primary">
                    <i class="far fa-eye"></i>
                  </a>
      
                  {{--# COLLEGAMENTO A  EDIT --}}
                  <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-pencil"></i>
                  </a>
      
                  {{--# COLLEGAMENTO A  DESTROY --}}
                  <form action="{{ route('admin.dishes.destroy', $dish->id) }}" 
                    method="POST" class="delete-form" data-dish="{{$dish->name}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            
            {{-- NESSUN PROGETTO --}}
            @empty
            <h1>Non ci sono progetti da mostrare</h1>
            @endforelse
    
        </tbody>
    </table> 

</div>

@endsection

@section('scripts')
<script>

    // CONFERMA DI CANCELLAZIONE
    const formsDelete= document.querySelectorAll('.delete-form');
    formsDelete.forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault();
            const dish = form.dataset.dish;
            const confirmation = confirm(`Sei sicuro di voler eliminare il piatto ${dish}?`);
            if(confirmation) form.submit();
        })
    });

</script>

@endsection
