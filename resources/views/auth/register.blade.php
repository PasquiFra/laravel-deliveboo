@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mt-4">
    <div class="glass-card spacing px-4 py-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-m text-lg-start">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" id="registrationForm">
                            @csrf
                            <h2 class="mb-5">Registrazione</h2>
                            <div class="mb-4 row">
                                {{-- Nome del ristorante--}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="restaurant_name" class="mb-2 ms-3">
                                        Nome ristorante
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="restaurant_name" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('name') is-invalid @enderror" name="restaurant_name" value="{{old('restaurant_name')}}" required autocomplete="restaurant_name" pattern="[A-Za-z]+" autofocus>
                                    <span id="error-message" class="text-danger"></span>
                                    @error('restaurant_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="form-text text-12 ms-3">
                                            Inserisci il nome del ristorante
                                        </div>
                                    @enderror
                                </div>
                                
                                {{-- Nome del ristoratore --}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="name" class="mb-2 ms-3">
                                        Nome ristoratore
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="name" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" pattern="[A-Za-z]+" autofocus>
                                    <span id="error-message" class="text-danger"></span>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="form-text text-12 ms-3">
                                            Inserisci il nome del ristoratore
                                        </div>
                                    @enderror
                                </div>

                                {{-- Cognome --}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="lastname" class="mb-2 ms-3">
                                        Cognome Ristoratore
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="lastname" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
    
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="form-text text-12 ms-3">
                                            Inserisci il cognome
                                        </div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="email" class="mb-2 ms-3">
                                        Email
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="email" type="email" class="form-control bg-transparent border-dark-light rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else
                                        <div class="form-text text-12 ms-3">
                                            Inserisci la mail
                                        </div>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="password" class="mb-2 ms-3">
                                        {{ __('Password') }}
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="password" type="password" class="form-control bg-transparent border-dark-light rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @else 
                                        <div class="form-text text-12 ms-3">
                                            Inserisci la password
                                        </div>
                                    @enderror
                                </div>

                                {{-- Conferma Password --}}
                                
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="password-confirm" class="mb-2 ms-3">
                                        Conferma Password
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="password-confirm" type="password" class="form-control bg-transparent border-dark-light rounded-pill" name="password_confirmation" required autocomplete="new-password">
                                    @error('address')   
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @else
                                    <div class="form-text text-12 ms-3">
                                        Conferma la password
                                    </div>
                                    @enderror
                                </div>

                                {{-- Input Indirizzo --}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="address" class="mb-2 ms-3">
                                        Indirizzo
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input name="address" value="{{old('address')}}" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('address') is-invalid @elseif(old('address', '')) is-valid @enderror" id="address">
                                        @error('address')   
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @else
                                            <div class="form-text text-12 ms-3">
                                                Inserisci l'indirizzo del ristorante
                                            </div>
                                        @enderror
                                </div>

                                {{-- Input Numero di telefono --}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="phone" class="mb-2 ms-3">Numero di telefono</label>
                                    <input name="phone" value="@if(old('phone', '+39 ')){{old('phone')}}@else+39 @endif" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
                                        @error('phone')   
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @else
                                            <div class="form-text text-12 ms-3">
                                                Inserisci il numero di telefono
                                            </div>
                                        @enderror
                                </div>

                                {{-- Input P.IVA (VAT) --}}
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                    <label for="vat" class="mb-2 ms-3">
                                        P.IVA
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input name="vat" value="{{old('vat')}}" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('vat') is-invalid @elseif(old('vat', '')) is-valid @enderror" id="vat">
                                        @error('vat')   
                                            <div class="invalid-feedback">{{$message}}</div>
                                        @else 
                                            <div class="form-text text-12 ms-3">
                                                Inserisci la P.IVA del ristorante
                                            </div>
                                        @enderror
                                </div>

                                <div class="col-12 text-center">
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
                            </div>    
                        </div>
                        <p class="asterisk mb-3 text-center">I campi contrassegnati con <span class="text-danger"><strong><sup>*</sup></strong></span> sono obbligatori</p>
                        
                        {{-- Bottoni --}}
                        <div class="mb-4 row mb-0">
                            <div class="col-md-12 text-center">
                                
                                {{-- Bottone registrazione --}}
                                <button type="submit" class="btn btn-success me-2">
                                    <i class="fa-solid fa-floppy-disk me-2"></i>Registrati
                                </button>
                                
                                {{-- Bottone reset --}}
                                <button type="reset" class="btn btn-warning">
                                    <i class="fa-solid fa-arrows-rotate me-2"></i>Reset
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
        const name = document.getElementById('name');
        const errorMessage = document.getElementById('error-message');
        document.getElementById('registrationForm').addEventListener('blur',function(event){
            //Creo un flag per gli errori
            let isValid=true;
            let errorText='';

            if(!name.value.trim()){
                isValid=false;
                name.classList.add('is-invalid');
                name.classList.remove('is-valid');
                errorText='Questo campo è obbligatorio';
                errorMessage.innerText = errorText
            }else{
                name.classList.remove('is-invalid');
                name.classList.add('is-valid');
            }

            if(!isValid){
                event.preventDefault();
            }

        })
    </script>
@endsection