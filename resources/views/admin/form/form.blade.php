
@extends('layouts.app')
 @section('content')
    
    <h1 class="text-center py-3">
        @if (Route::is('admin.dishes.create')) Aggiungi nuovo termine
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

    <div class="d-flex ">

        {{-- INPUT GROUP DEL NAME --}}
        <div class="input-group mb-3 w-50 p-1 d-flex">
            <div class="w-100">
                <label class="form-label label fw-bold" for="name">Titolo:</label>
            </div>
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
        <div class="input-group mb-3 w-50 p-1 d-flex">
            <div class="w-100">
                <label class="form-label label fw-bold" for="slug">Slug:</label>
            </div>
            <input type="text" id="slug" name="slug" class="form-control" 
            value="{{$dish->slug}}" 
            readonly>    
        </div>

        {{-- INPUT GROUP QUANTITY --}}
        <div class="input-group mb-3 w-50 p-1 d-flex">
            <div class="w-100">
                <label class="form-label label fw-bold" for="quantity">Quantity:</label>
            </div>
            <input type="number" id="quantity" name="quantity" class="form-control" 
            value="{{$dish->quantity}}">    
        </div>

        {{-- INPUT GROUP Availability --}}
        <div class="d-flex w-100 justify-content-center">
            <div class="form-check px-5 pt-5">
                <input class="form-check-input" type="radio" name="availability" value="1" id="radio-public"
                {{$dish->availability == 1 ? 'checked' : ''}}>
                <label class="form-check-label" for="radio-public">
                    In vendita
                </label>
            </div>
            <div class="form-check pt-5">
                <input class="form-check-input" type="radio" name="availability" value="0" id="radio-edit" 
                {{$dish->availability == 0 ? 'checked' : ''}}>
                <label class="form-check-label" for="radio-edit">
                    Nascosto
                </label>
            </div>
        </div>   

        {{-- INPUT GROUP DIET --}}
        <div class="input-group mb-3 w-50 p-1 d-flex">
            <select class="form-select" aria-label="Default select example">
                <option selected>Scegli un'opzione (facoltativo)</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
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

        {{-- INPUT IMMAGINE --}}
        <div class="d-flex w-100 mb-3">
            <div class="w-75">
                <div class="input-group p-1 d-flex">
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
