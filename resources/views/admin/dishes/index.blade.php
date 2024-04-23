
@extends('layouts.app')

@section('title', 'Menu')

@section('content')    
<div class="mb-2">
  <div class="mb-3 d-flex justify-content-between align-items-center spacing">
    <!--Filtro per Portata del Piatto-->
    <form class="filter-courses" action="{{ route('admin.dishes.index') }}" method="GET">
      <div class="input-group">
          <select class="form-select w-25" name="course">
            <option value="">Tutte le portate</option>
            @foreach ($courses as $course)
            <option value="{{ $course }}"  {{ request('course') == $course ? 'selected' : '' }}>
              {{ $course }}
            </option>
            @endforeach
          </select>
          <!--Filtro in base a disponibilità del piatto-->
          <select class="form-select w-25 pe-5" name="availability">
            <option value="">Tutti</option>
            <option value="available" @if($availability==='available')selected @endif>Disponibile</option>
            <option value="not-available" @if($availability==='not-available')selected @endif>Non Disponibile</option>
          </select>
          <button class="btn btn-secondary" type="submit">Filtra</button>
      </div>
  </form>
    <h1 class="text-white me-5">Menu</h1>
    <div class="d-flex justify-content-end gap-2 p-2">
      <!-- Cestino -->
      <a href="{{route('admin.dishes.trash')}}" class="btn btn-danger">
          <i class="far fa-trash-can"></i> Vedi Cestino
      </a>
      <!-- Crea nuovo dish -->
      <a href="{{route('admin.dishes.create')}}" class="btn btn-success">
        <i class="fa-solid fa-plus"></i> Aggiungi piatto
      </a>
    </div>
  </div>
  <div class="tbl-header">
    <table class="text-center">
      <thead>
        <tr>
          <th>Immagine</th>
          <th>Nome</th>
          <th>Online</th>
          <th>Portata</th>
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
            {{--Nome--}}
            <td class="text-center">{{$dish->name}}</td>
            {{--Disponibilità--}}
            <td class="text-center">
              @if ($dish->availability == 1)
                <span class="stamp is-available"></span> 
              @else
                <span class="stamp not-available"></span>
              @endif
            </td>
            {{--Portata--}}
            <td class="text-center">
              {{$dish->course}}
            </td>
            {{--Dieta--}}
            <td class="text-center">
              @if($dish->diet)
               {{$dish->diet}}
              @else
                ---
              @endif
            </td>
            {{--Prezzo--}}
            <td class="text-center">{{$dish->price}}</td>
            <td class="text-center">{{$dish->updated_at}}</td>
            <td>
              <div class="d-flex gap-2 justify-content-end">
                {{--# COLLEGAMENTO A SHOW --}}
                <a href="{{ route('admin.dishes.show', $dish->id)}}" class="btn btn-sm btn button-outline-light show">
                  <i class="far fa-eye"></i>
                </a>
                
                {{--# COLLEGAMENTO A  EDIT --}}
                <a href="{{ route('admin.dishes.edit', $dish->id)}}" class="btn btn-sm btn button-outline-light edit">
                  <i class="fas fa-pencil"></i>
                </a>
                
                {{--# COLLEGAMENTO A  DESTROY --}}
                <form action="{{ route('admin.dishes.destroy', $dish->id) }}" 
                  method="POST" class="delete-form" data-dish="{{$dish->name}}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn button-outline-light destroy"><i class="far fa-trash-can"></i></button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <h1>Non ci sono piatti da mostrare</h1>
        @endforelse
      </tbody>
    </table>
  </div>
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



















