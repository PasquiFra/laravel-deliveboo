
@extends('layouts.app')
 
@section('content')

<div class="container">
    
    <div class="d-flex justify-content-end gap-2 p-2 my-3">
        <!--Cestino-->
        <a href="{{route('admin.dishes.trash')}}" class="btn btn-danger">
            <i class="far fa-trash-can"></i> 
            Vedi Cestino
        </a>
        <!--Nuova dish-->
        <a href="{{route('admin.dishes.create')}}" class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            Aggiungi piatto
        </a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Quantità</th>
                <th scope="col">Disponibile (si/no)</th>
                <th scope="col">Diet</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Immagine</th>
                <th scope="col">Data creazione</th>
                <th scope="col">Ultima modifica</th>
                <th scope="col"></th>
            </tr>
        </thead>
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
                  {{--# SHOW --}}
                  <a href="{{ route('admin.dishes.show', $dish->id)}}" class="btn btn-sm btn-primary">
                    <i class="far fa-eye"></i>
                  </a>
      
                  {{--# EDIT --}}
                  <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-pencil"></i>
                  </a>
      
                  {{--# DESTROY --}}
                  <form action="{{ route('admin.dishes.destroy', $dish->id) }}" 
                    method="POST" class="delete-form" data-dish="{{$dish->name}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @empty
            <h1>Non ci sono progetti da mostrare</h1>
            @endforelse
    
        </tbody>
    </table> 

</div>

@endsection

@section('scripts')
<script>
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
