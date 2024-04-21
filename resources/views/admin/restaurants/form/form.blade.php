@if ($restaurant->exists)
<form action="{{route('admin.restaurants.update', $restaurant->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    
@else
    
    <form action="{{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
    
@endif
    @csrf
    <div class="row">
        <div class="col-3">
            <div class="mb-5">
                <label for="name" class="form-label">Nome</label>
                <input value="{{old('name', '')}}" type="text" class="form-control @error('name') is-invalid @elseif(old('name', '')) is-valid @enderror"  id="name">
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
                <input value="{{old('address', '')}}" type="text" class="form-control @error('address') is-invalid @elseif(old('address', '')) is-valid @enderror" id="address">
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
                <input value="{{old('phone', '')}}" type="text" class="form-control @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
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
                <input value="{{old('email', '')}}" type="email" class="form-control @error('email') is-invalid @elseif(old('email', '')) is-valid @enderror" id="email">
                @error('email')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'email del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-8">
            <div class="mb-5">
                <label for="vat" class="form-label">P.IVA</label>
                <input value="{{old('vat', '')}}" type="text" class="form-control @error('vat') is-invalid @elseif(old('vat', '')) is-valid @enderror" id="vat">
                @error('name')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci la P.IVA del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-4">
            <label for="category_id" class="form-label">Categoria</label>
            <select class="form-select" id="category_id" name="category_id">
                <option selected>Seleziona la categoria</option>
                {{-- Foreach delle categorie --}}
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->label}}</option>
                @endforeach
                
            </select>
            @error('category_id')   
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-6">
            <div class="mb-5">
                <label for="image" class="form-label">Immagine</label>
                <input value="{{old('image', '')}}" type="url" class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" id="image">
                @error('name')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci l'immagine del ristorante
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-1 d-flex justify-content-center align-items-center mb-5">
            <img class="img-fluid" src="https://t4.ftcdn.net/jpg/05/17/53/57/360_F_517535712_q7f9QC9X6TQxWi6xYZZbMmw5cnLMr279.jpg" alt="">
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
</form> 