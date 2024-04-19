@extends('layouts.app')


@section('content')
<section id='dishes-trash' class="my-5">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Piatti disponibili</a>
        <h1 class="text-center">Piatti Eliminati</h1>
        {{--Svuota Cestino--}}
        <form action="{{ route('admin.dishes.dropAllTrashed') }}"
            method="POST"  class="empty-trash-form  delete-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Elimina tutti i Piatti</button>
        </form>
    </div>
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
                  {{--Elimina Definitivamente il Piatto --}}
                  <form action="{{ route('admin.dishes.drop', $dish->id) }}" 
                    method="POST" class="delete-form" data-dish="{{$dish->name}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
                  </form>
                   {{--Ripristina il Piatto--}}
                   <form action="{{route('admin.dishes.restore',$dish->id)}}" method="POST" 
                    class="form-delete m-0" data-dish="{{$dish->title}}">
                    @csrf
                    @method('PATCH')
                    <button  class="btn btn-success">
                        <i class="fas fa-arrows-rotate"></i>
                    </button>
                </form>
                </div>
              </td>
            </tr>
            {{-- NESSUN PROGETTO --}}
            @empty
            <h1>Non ci sono Piatti eliminati</h1>
            @endforelse
        </tbody>
    </table> 
</section>
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

