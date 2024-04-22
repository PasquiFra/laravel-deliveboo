@if ($restaurant->exists)
<form action="{{route('admin.restaurants.update', $restaurant->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    
@else
    
    <form action="{{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
    
@endif
    @csrf
    <div class="card-show p-5">
    <div class="row">
        <div class="col-3">
            <div class="mb-5">
                <label for="name" class="form-label">Nome</label>
                <input name="name" value="{{old('name', $restaurant->name)}}" type="text" class="form-control @error('name') is-invalid @elseif(old('name', '')) is-valid @enderror"  id="name">
                @error('name')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il nome del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-5">
                <label for="address" class="form-label">Indirizzo</label>
                <input name="address" value="{{old('address', $restaurant->address)}}" type="text" class="form-control @error('address') is-invalid @elseif(old('address', '')) is-valid @enderror" id="address">
                @error('address')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'indirizzo del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-5">
                <label for="phone" class="form-label">Numero di telefono</label>
                <input name="phone" value="{{old('phone', $restaurant->phone)}}" type="text" class="form-control @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
                @error('phone')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il numero di telefono del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-5">
                <label for="email" class="form-label">Email</label>
                <input name="email" value="{{old('email', $restaurant->email)}}" type="email" class="form-control @error('email') is-invalid @elseif(old('email', '')) is-valid @enderror" id="email">
                @error('email')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'email del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-5">
            <div class="mb-5">
                <label for="vat" class="form-label">P.IVA</label>
                <input name="vat" value="{{old('vat', $restaurant->vat)}}" type="text" class="form-control @error('vat') is-invalid @elseif(old('vat', '')) is-valid @enderror" id="vat">
                @error('vat')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci la P.IVA del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-5">
                <label for="image" class="form-label">Immagine</label>
                <input name="image" value="{{old('image', $restaurant->image)}}" type="url" class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" id="image">
                @error('image')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'immagine del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-1 d-flex justify-content-center align-items-center mb-5">
            <img class="img-fluid" src="{{old('image', $restaurant->image) ? asset('storage/'. $restaurant->image) : 'https://marcolanci.it/boolean/assets/placeholder.png'}}" alt="immagine del ristorante" id="preview">
        </div>
        <div class="col mb-5">
            <p class="mb-3">Categorie</p>
                {{-- Foreach delle categorie --}}
            @foreach ($categories as $category)
                <div class="form-check form-check-inline me-2">
                    <label class="form-check-label" for="category-{{$category->id}}">{{$category->label}}</label>
                    <input class="form-check-input" type="checkbox" id="category-{{$category->id}}" value="{{$category->id}}" name="categories[]" @if (in_array($category->id, old('categories', $prev_categories ?? []))) checked @endif>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col d-flex justify-content-between">
        @if (Auth::user()->restaurant)   
        <a href="{{route('admin.restaurants.show', Auth::user()->restaurant)}}" class="btn btn-lg btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
        @else
        <a href="{{route('dashboard')}}" class="btn btn-lg btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
        @endif
        <div>
            <button class="btn btn-lg btn-success me-2" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i>Save</button>
            <button class="btn btn-lg btn-warning" type="reset"><i class="fa-solid fa-arrows-rotate me-2"></i>Reset</button>
        </div>
    </div>
</div>
</form> 

@section('scripts')
<script>
    const placeholder = 'https://marcolanci.it/boolean/assets/placeholder.png';
    const input = document.getElementById('image');
    const preview = document.getElementById('preview');

    input.addEventListener('input', () => {
        preview.src = input.value || placeholder;
    })
</script>
@endsection