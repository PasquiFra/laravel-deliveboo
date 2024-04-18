
@extends('layouts.app')
 @section('content')
    
    <h1 class="text-center py-3">
        @if (Route::is('admin.dishes.create')) Aggiungi nuovo piatto
        @else Modifica {{$dish->name}} @endif 
    </h1>

    {{-- banner validazione del form  --}}
    @include('admin.form.validation')

    {{-- Impostazioni del form --}}
        @if ($dish->exists)
    <form action="{{route('admin.dishes.update', $dish->id  ) }}" method="post" 
        class="flex container py-4 justify-content-center">
    @method('put')
        @else
    <form action="{{route('admin.dishes.store')}}" method="post" 
    class="flex container py-4 justify-content-center">
        @endif
    @csrf

    <div class="row">

        {{-- INPUT GROUP DEL NAME --}}
        <div class=" mb-3 col-6">

            <label class="form-label label fw-bold" for="name">Titolo:</label>
           
            <input 
                type="text" 
                required id="name" 
                name="name" 
                class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror" 
                value="{{old('name', $dish->name)}}" 
                placeholder="Inserisci titolo..."
            >
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>   
            @else        
            <div class="valid-feedback">
                Campo corretto
            </div>      
            @enderror       
        </div>
    
        {{-- INPUT GROUP DELLO SLUG --}}
        <div class=" mb-3 col-6">
            
            <label class="form-label label fw-bold" for="slug">Slug:</label>
            
            <input type="text" id="slug" name="slug" class="form-control" 
            value="{{$dish->slug}}" 
            readonly>    
        </div>

        {{-- INPUT GROUP QUANTITY --}}
        <div class=" mb-3  col-6">

            <label class="form-label label fw-bold" for="quantity">Quantity:</label>

            <input type="number" id="quantity" name="quantity" class="form-control" 
            value="{{$dish->quantity}}">    
        </div>

        {{-- INPUT GROUP Availability --}}
        <div class="d-flex justify-content-center col-6">

            <div class="form-check form-switch flex-column justify-content-between">

                <div class="mb-3">
                    <label class="form-check-label" for="availability">Status articolo:</label>
                </div>
                <div class="ms-4">
                    <label class="form-check-label" for="availability">Articolo attivo</label>
                    <input class="form-check-input" type="checkbox" role="switch" id="availability" 
                    name="availability"
                    {{-- {{$dish->availability == 1 ? 'checked' : ''}} --}}
                    @if(old('availability', $dish->availability)) checked @endif
                    >
                </div>

            </div>

        </div>   

        {{-- INPUT GROUP DIET --}}
        <div class=" mb-3 col-6">
            <select class="form-select" name="diet" id="diet"  >
                <option selected>Scegli un'opzione (facoltativo)</option>
                <option value="Vegetariano">Vegetariano</option>
                <option value="Vegano">Vegano</option>
                <option value="Gluten-free">Gluten-free</option>
                <option value="Carne">Carne</option>
                <option value="Pesce">Pesce</option>
                <option value="Calorico">Calorico</option>
            </select>
            @error('diet')
            <div class="invalid-feedback">
                {{$message}}
            </div>   
            @else        
            <div class="valid-feedback">
                Campo corretto
            </div>      
            @enderror       
        </div>

        {{-- INPUT GROUP COURSE --}}
        <div class=" mb-3 col-6">
            <select class="form-select"  name="course" id="course" >
                <option selected>Scegli un'opzione (obbligatorio)</option>
                <option value="antipasto">Antipasto</option>
                <option value="primo">Primo</option>
                <option value="secondo">Secondo</option>
                <option value="dessert">Dessert</option>
            </select>
            @error('course')
            <div class="invalid-feedback">
                {{$message}}
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

            <div id="ingredient-inputs">
                {{-- singolo campo ingrediente --}}
                <input 
                    type="text" 
                    id="ingredients" 
                    name="ingredients[]" 
                    class="me-2 mb-2" 
                    value="{{old('ingredients', $dish->ingredients)}}" 
                    placeholder="Inserisci un ingrediente..."
                >
            </div>
            <button type="button" id="add-ingredient-btn" onclick="addIngredient()">Aggiungi Ingrediente</button>

        </div>

        {{-- INPUT GROUP PRICE --}}
        <div class=" mb-3 col-6">
            
            <span class="-text">€</span>
            <input type="number" name="price" id="price"  class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>   
            @else        
            <div class="valid-feedback">
                Campo corretto
            </div>      
            @enderror     

        </div>

        {{-- INPUT IMMAGINE --}}
        <div class="d-flex  col-12 mb-3">
            <div class="w-75">
                <div class=" p-1 d-flex">
                    <label class="form-label label" for="image">Url Immagine</label>
                    <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror">
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>   
                    @else        
                    <div class="valid-feedback">
                        Campo corretto
                    </div>      
                    @enderror       
                </div>
            </div>
    
            <div class="" id="preview-section">
                <img id="preview" src="{{ old('image', $dish->image) 
                ? asset('storage/' . old('image', $dish->image)) 
                : 'https://t4.ftcdn.net/jpg/05/17/53/57/360_F_517535712_q7f9QC9X6TQxWi6xYZZbMmw5cnLMr279.jpg'}}" 
                alt="{{$dish->slug}}">
            </div>
        </div>


    </div>

    <div class="w-100 pt-4">
        <button type="submit" class="btn btn-success me-3">Salva</button>
        <button type="reset" class="btn btn-danger">Svuota</button>
    </div>

    </form>
    
    @include('admin.form.slug')
@endsection

@section('scripts')
<script>

    // AGGIUNTA INPUT FIELD
    function addIngredient() {
        const inputs = document.getElementById('ingredient-inputs');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'ingredients[]';
        input.className = 'me-2 mb-2';
        inputs.appendChild(input);
    }

</script>

@endsection
