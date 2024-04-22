@extends('layouts.app')


@section('content')
<section id='dishes-trash' class="my-5">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Piatti disponibili</a>
        <h1 class="text-center text-white">Piatti Eliminati</h1>
        {{--Svuota Cestino--}}
        <form action="{{ route('admin.dishes.dropAllTrashed') }}"
            method="POST"  class="empty-trash-form  delete-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Elimina tutti i Piatti</button>
        </form>
    </div>
    {{--Tabella--}}
    <div class="tbl-header">
    <table class="text-center">
      <thead>
        <tr>
          <th>Immagine</th>
          <th>Nome</th>
          <th>Online</th>
          <th>Dieta</th>
          <th>Prezzo</th>
          <th>Ultima modifica</th>
          <th></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table>
      <tbody>
        @forelse ($dishes as $dish)
          <tr>
            <td class="text-center d-flex justify-content-center">
              <div class="index-prev">
                @if ($dish->image)
                    <img src="{{asset('storage/' . $dish->image)}}" alt="foto-{{$dish->slug}}" class="show-image">
                @else
                    <img src="{{asset('/images/default-dish.png')}}" alt="" class="img-fluid">
                @endif
              </div>
            </td>
            <td class="text-center">{{$dish->name}}</td>
            <td class="text-center">
              @if ($dish->availability == 1)
                <span class="stamp is-available"></span> 
              @else
                <span class="stamp not-available"></span>
              @endif
            </td>
            <td class="text-center">
              @if($dish->diet)
               {{$dish->diet}}
              @else
                ---
              @endif
            </td>
            <td class="text-center">{{$dish->price}}</td>
            <td class="text-center">{{$dish->updated_at}}</td>
            <td>
              <div class="d-flex gap-2 justify-content-end">
                {{--# COLLEGAMENTO A SHOW --}}
                <a href="{{ route('admin.dishes.show', $dish->id)}}" class="btn btn-sm btn btn-outline-light show">
                  <i class="far fa-eye"></i>
                </a>
                
                {{--# COLLEGAMENTO A  EDIT --}}
                <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn btn-outline-light edit">
                  <i class="fas fa-pencil"></i>
                </a>
                
                {{--# COLLEGAMENTO AL DROP --}}
                <form action="{{ route('admin.dishes.drop', $dish->id) }}" 
                    method="POST" class="delete-form" data-dish="{{$dish->name}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn btn-outline-light destroy"><i class="far fa-trash-can"></i></button>
                </form>

                {{--# COLLEGAMENTO A RESTORE --}} 
                <form action="{{route('admin.dishes.restore',$dish->id)}}" method="POST" 
                    class="form-delete" data-dish="{{$dish->title}}">
                    @csrf
                    @method('PATCH')
                    <button  class="btn btn-sm btn btn-outline-light restore">
                        <i class="fas fa-arrows-rotate"></i>
                    </button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <h1 class="text-white py-5">Non ci sono piatti da mostrare</h1>
        @endforelse
      </tbody>
    </table>
  </div> 
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

