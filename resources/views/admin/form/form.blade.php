@extends('layouts.app')
@section('content')

<section class="glass-card p-4 my-5">
    <h1 class="text-center py-3">
        @if (Route::is('admin.dishes.create')) Aggiungi nuovo piatto
        @else Modifica {{$dish->name}} @endif 
    </h1>

    {{-- banner validazione del form  --}}
    @include('admin.form.validation')

    {{-- Impostazioni del form --}}
    @if ($dish->exists)
        <form id="input-form" action="{{ route('admin.dishes.update', $dish->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
    @else
        <form id="input-form"  action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
    @endif

            {{-- TOKEN csrf --}}
            @csrf
            <div class="row">
                {{-- INPUT AVAILABILITY --}}
                <div class="col-12 mb-3">
                    <div class="form-check form-switch p-0">
                        <label class="form-check-label" for="availability">Status articolo:</label>
                        <div class="ms-5">
                            <label class="form-check-label" id="availability-label" for="availability"></label>
                            <input class="form-check-input" type="checkbox" role="switch" id="availability" 
                            name="availability"
                            @if(old('availability', $dish->availability) == 1) checked @endif
                            >
                        </div>
                    </div> 
                </div>

                {{-- INPUT TITLE --}}
                <div class="col-12 mb-3">
                    <label class="form-label label fw-bold" for="name">Titolo:</label>
                    <input 
                        type="text" 
                        required 
                        id="name" 
                        name="name" 
                        class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror" 
                        value="{{ old('name', $dish->name) }}" 
                        placeholder="Inserisci titolo..."
                    >
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>   
                    @else        
                        <div class="valid-feedback">
                            Campo corretto
                        </div>      
                    @enderror       
                </div>


                {{-- SELECT DIET --}}
                <div class="col-6 mb-3 ">
                    <label class="form-label label fw-bold" for="diet">Dieta:</label>
                    <select class="form-select" name="diet" id="diet">
                        <option 
                            value="" {{ old('diet', $dish->diet) ? '' : 'selected' }}>Scegli un'opzione (facoltativo)
                        </option>
                        @foreach ($diet_options as $option)
                            <option value="{{ $option }}" {{ old('diet', $dish->diet) === $option ? 'selected' : '' }}>{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('diet')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>   
                    @else        
                        <div class="valid-feedback">
                            Campo corretto
                        </div>      
                    @enderror       
                </div>

                {{-- SELECT COURSE --}}
                <div class="mb-3 col-6">
                    <label class="form-label label fw-bold" for="name">Portata:</label>
                    <select class="form-select" 
                    name="course" id="course" required>
                        <?php
                        $courseOptions = ['Antipasto', 'Primo', 'Secondo', 'Dessert'];
                        ?>
                        <option value="" >Scegli un'opzione (Obbligatorio)</option>
                        @foreach ($courseOptions as $option)
                        <option value="{{ $option }}" {{ old('course', $dish->course) === $option ? 'selected' : '' }}>{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('course')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>   
                    @else        
                        <div class="valid-feedback">
                            Campo corretto
                        </div>      
                    @enderror       
                </div>

                {{-- INPUT GROUP INGREDIENTS --}}
                <div class="mb-3 col-12">
                    <label class="form-label label fw-bold" for="ingredients">Ingredienti:</label>
                            <input 
                                type="text" 
                                id="ingredients" 
                                name="ingredients" 
                                class="me-2 mb-2 form-control" 
                                value="{{ trim(old('ingredients', $dish->ingredients)) }}" 
                                placeholder="Inserisci gli ingredienti separati da una virgola"
                            >
                </div>

                {{-- INPUT GROUP PRICE --}}
                <div class="mb-3 col-3 col-sm-4 col-xl-3">
                    <label class="form-label label fw-bold" for="price">Prezzo piatto:</label>
                    <input type="number" name="price" id="price" step="0.01" min="0" class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror"
                    value="{{ old('price', $dish->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>   
                    @else        
                        <div class="valid-feedback">
                            Campo corretto
                        </div>      
                    @enderror     
                </div>

                {{-- INPUT IMMAGINE --}}
                <div class="col-8 mb-3">
                    <div>
                        <label class="form-label label fw-bold" for="image">Immagine</label>
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @else        
                            <div class="valid-feedback">
                                Campo corretto
                            </div>      
                        @enderror       
                    </div>
                </div>
                {{-- CAMPO PREVIEW IMAGE --}}
                <div class="col-1 align-items-center d-none d-xl-flex">
                    <img id="preview" src="{{ old('image', $dish->image)
                    ? asset('storage/' . old('image', $dish->image)) 
                    : asset('/images/default-dish.png')}}" 
                    alt="{{ $dish->slug }}" class="img-fluid">
                </div>

                <div class="col d-flex justify-content-between pt-4">
                    <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
                    <div>
                        <button class="btn btn-success me-2" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>
                        <button class="btn btn-warning" type="reset"><i class="fa-solid fa-arrows-rotate me-2"></i>Svuota</button>
                    </div>
                </div>
            </div>
            
        </form>
</section>    
    
@endsection
    
@section('scripts')
<script>

    // Label di availability dinamico
    document.getElementById('availability').addEventListener('change', function() {;
        const label = document.getElementById('availability-label');
        const input = document.getElementById('availability');
        
        if (input.checked) {
            label.textContent = 'Articolo visibile';
        } else {
            label.textContent = 'Articolo disattivato';
        }
    });

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
        

    document.getElementById('input-form').addEventListener('submit', function() {;

        event.preventDefault();
        // Setto il field price in modo che abbia sempre 2 decimali quando submitto il form
        const priceInputField = document.getElementById('price');
        const priceValue = parseFloat(priceInputField.value).toFixed(2);
        priceInputField.value = priceValue;
   
        // Setto il field course in modo che abbia sempre un valore corretto
        const courseInputField = document.getElementById('course');
        const courseValue = courseInputField.value;
        const courseOptions = ['Antipasto', 'Primo', 'Secondo', 'Dessert'];
        
        // Setto il field diet in modo che abbia sempre un valore corretto
        const dietInputField = document.getElementById('diet');
        const dietValue = dietInputField.value;
        const diet_options = ['Vegetariano', 'Vegano', 'Gluten-free', 'Carne', 'Pesce'];
        
        if (!courseOptions.includes(courseValue) | !diet_options.includes(dietValue)) {
            if (!courseOptions.includes(courseValue)) {
            courseInputField.classList.add('is-invalid');
             } 
            if (!diet_options.includes(dietValue)) {
                dietInputField.classList.add('is-invalid');
            }
        } 
        else {
            courseInputField.classList.add('is-valid');
            dietInputField.classList.add('is-valid');
            // Se l'opzione è valida, eseguo il submit del form
            this.submit();
        }
    });
 
</script>

@endsection
