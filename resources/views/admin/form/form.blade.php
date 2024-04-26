@extends('layouts.app')
@section('content')

<section class="spacing">
    <div class="glass-card p-4 my-5"> 

        <h1 class="text-center py-3">
            @if (Route::is('admin.dishes.create')) Aggiungi nuovo piatto
            @else Modifica {{$dish->name}} @endif 
        </h1>
    
        {{-- Impostazioni del form --}}
        @if ($dish->exists)
            <form action="{{ route('admin.dishes.update', $dish->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
        @else
            <form action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
        @endif
    
                {{-- TOKEN csrf --}}
                @csrf
                <div class="row align-items-center">
                    {{-- INPUT AVAILABILITY --}}
                    <div class="col-12 mb-3">
                        <div class="form-check form-switch d-flex p-0">
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
                        <label class="form-label label fw-bold" for="name">Nome del piatto:</label>
                        <input 
                            type="text" 
                            required 
                            id="name" 
                            name="name" 
                            class="form-control bg-transparent border-dark-light rounded-pill @error('name') is-invalid @elseif(old('name')) is-valid @enderror" 
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
                        <select class="form-select bg-transparent border-dark-light rounded-pill" name="diet" id="diet">
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
                        <select class="form-select bg-transparent border-dark-light rounded-pill"  name="course" id="course" >
                            <?php
                            $courseOptions = ['Antipasto', 'Primo', 'Secondo', 'Dessert'];
                            ?>
                            @foreach ($courseOptions as $option)
                                <option value="{{ $option }}" {{ old('course', $dish->course) === $option ? 'selected' : '' }}>{{ $option }}</option>
                            @endforeach
                            <option 
                                value="" {{ old('course', $dish->course) ? '' : 'selected' }}>Scegli un'opzione (Obbligatorio)
                            </option>
                        </select>
                        @error('course')
                            <div class="invalid-feedback">
                                {{ $message }}<a href="{{route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left me-2"></i>Torna indietro</a>
                            </div>   
                        @else        
                            <div class="valid-feedback">
                                Campo corretto
                            </div>      
                        @enderror       
                    </div>
    
                    {{-- INPUT GROUP INGREDIENTS --}}
                    <div class="col-12">
                        <label class="form-label label fw-bold" for="ingredients">Ingredienti:</label>
                        <div id="ingredient-inputs"> 
                            @if (!$dish->ingredients)
                                @if (old('ingredients'))
                                    @foreach (old('ingredients') as $ingredient)
                                        <input type="text" name="ingredients[]" class="mb-2 form-control" value="{{ $ingredient }}" placeholder="Inserisci un ingrediente...">
                                    @endforeach
                                @endif
                                <input 
                                    type="text" 
                                    id="ingredients" 
                                    name="ingredients[]" 
                                    class="me-2 mb-2 form-control bg-transparent border-dark-light rounded-pill" 
                                    value="{{ trim($dish->ingredients) }}" 
                                    placeholder="Inserisci un ingrediente..."
                                >
                            @else
                                @php
                                $ingredients = explode(', ', $dish->ingredients);
                                @endphp
                                @foreach ($ingredients as $ingredient)
                                    <input type="text" name="ingredients[]" class="me-2 mb-2 form-control bg-transparent border-dark-light rounded-pill" value="{{ $ingredient }}" placeholder="Inserisci un ingrediente...">
                                @endforeach
                            @endif
                        </div>
                        <button type="button" id="add-ingredient-btn" class="btn mt-2 border-light-subtle rounded-pill" onclick="addIngredient()">Aggiungi Ingrediente</button>
                    </div>
    
                    {{-- INPUT GROUP PRICE --}}
                    <div class="mb-3 col-6 col-sm-4 col-xl-5">
                        <label class="form-label label fw-bold" for="price">Prezzo piatto:</label>
                        <input type="number" name="price" id="price" step="0.1" class="form-control bg-transparent border-dark-light rounded-pill @error('price') is-invalid @elseif(old('price')) is-valid @enderror"
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
                    <div class="col-6 col-sm-6 col-xl-5 mb-3">
                        <div class="d-flex flex-column">
                            <label class="form-label label fw-bold">Upload Immagine:</label>
                            <input type="file" name="image" id="uploadBtn" class="form-control bg-transparent border-dark-light rounded-pill @error('image') is-invalid @elseif(old('image')) is-valid @enderror">
                            <label for="uploadBtn" role="button" id="upload-label" class="btn border-light-subtle rounded-pill">Carica un'immagine</label>
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
                    <div class="col-2 col-md-2 align-items-center d-none d-md-flex">
                        <img id="preview" src="{{ old('image', $dish->image) && @getimagesize($dish->image)
                        ? asset('storage/' . old('image', $dish->image)) 
                        : asset('/images/default-dish.png')}}" 
                        alt="{{ $dish->slug }}" class="img-fluid">
                    </div>
    
                    <div class="col-12 d-flex justify-content-between pt-4">
                        <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary"><i class="fa-solid fa-left-long me-2"></i> Torna indietro</a>
                        <div>
                            <button class="btn btn-success me-2" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>
                            <button class="btn btn-warning text" type="reset"><i class="fa-solid fa-arrows-rotate me-2"></i>Svuota</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
            
</section>    
    
@endsection
    
@section('scripts')
<script>

    // Label di availability dinamico
    document.getElementById('availability').addEventListener('change', function() {;
        const label = document.getElementById('availability-label');
        const input = document.getElementById('availability');
        
        if (input.checked) {
            label.textContent = 'disponibile';
        } else {
            label.textContent = 'non disponibile';
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
    });

    // AGGIUNTA INPUT FIELD
    function addIngredient() {
        const inputs = document.getElementById('ingredient-inputs');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'ingredients[]';
        input.className = 'me-2 mb-2 form-control bg-transparent border-dark-light rounded-pill';
        input.placeholder = 'inserisci un ingrediente...';
        inputs.appendChild(input);
    }
 
</script>

@endsection
