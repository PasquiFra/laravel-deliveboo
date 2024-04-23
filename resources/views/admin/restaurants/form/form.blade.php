@if ($restaurant->exists)
<form action="{{route('admin.restaurants.update', $restaurant->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    
@else
    
    <form action="{{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
    
@endif
    @csrf
    <div class="glass-card p-5">
    <div class="row">

        {{-- Input Nome --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="name" class="form-label">Nome<span class="text-danger"><strong>*</strong></span></label>
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

        {{-- Input Indirizzo --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="address" class="form-label">Indirizzo<span class="text-danger"><strong>*</strong></span></label>
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

        {{-- Input Numero di telefono --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="phone" class="form-label">Numero di telefono</label>
                <input name="phone" value="@if(old('phone', '+39 ')){{old('phone', $restaurant->phone)}}@else+39 @endif" type="text" class="form-control @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
                @error('phone')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il numero di telefono del ristorante
                    </div>
                @enderror
            </div>
        </div>

        {{-- Input Email --}}
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

        {{-- Input P.IVA (VAT) --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="vat" class="form-label">P.IVA<span class="text-danger"><strong>*</strong></span></label>
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

        {{-- Input Image --}}
        <div class="col-8">
            <div class="mb-5">
                <label for="image" class="form-label">Immagine</label>
                <input name="image" value="{{old('image', $restaurant->image)}}" type="file" class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" id="image">
                @error('image')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'immagine del ristorante
                    </div>
                @enderror
            </div>
        </div>

        {{-- Preview Image --}}
        <div class="col-1">
            <div class="mb-5">
                <img class="img-fluid" src="{{old('image', $restaurant->image) ? asset('storage/'. $restaurant->image) : 'https://marcolanci.it/boolean/assets/placeholder.png'}}" alt="immagine del ristorante" id="preview">
            </div>
        </div>

        {{-- CheckBox Categorie --}}
        <div class="col mb-4">
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
    <p class="asterisk mb-4">I campi contrassegnati con <span class="text-danger"><strong>*</strong></span> sono obbligatori</p>

    {{-- Bottoni --}}
    <div class="col d-flex justify-content-between">

        {{-- Se lo User ha un ristorante --}}
        @if (Auth::user()->restaurant)
        <a href="{{route('admin.restaurants.show', Auth::user()->restaurant)}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>

        {{-- Se lo User non ha ancora un ristorante --}}
        @else
        <a href="{{route('dashboard')}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
        @endif
        <div>
            <button class="btn btn-success me-2" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>
            <button class="btn btn-warning" type="reset"><i class="fa-solid fa-arrows-rotate me-2"></i>Svuota</button>
        </div>
    </div>
</div>
</form> 

@section('scripts')
<script>
    // setto la visualizzazione dinamica dell'immagine in pagina
    const imageField = document.getElementById('image');
    const previewField = document.getElementById('preview');

    let blobUrl;

    imageField.addEventListener('change', () => {

        // controllo se ho il file
        if (imageField.files && imageField.files[0]){
            
            //prendo il file
            const file = imageField.files[0];

            //preparo l'url
            const blobUrl = URL.createObjectURL(file);

            previewField.src = blobUrl;
        }
    })

    window.addEventListener('beforeunload', ()=> {
        if(blobUrl) URL.revokeObjectURL(blobUrl);
    })
</script>
@endsection