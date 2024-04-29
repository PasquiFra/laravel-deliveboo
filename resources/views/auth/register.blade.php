@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mt-4">
    <div class="glass-card spacing px-4 py-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-m text-lg-start">
                    <div class="card-body">
                        @if($errors)
                        <!--Alert-->
                        <div id="error-bag" class="alert alert-danger d-none" role="alert">
                            <ul id="error-list">    
                            </ul>
                          </div>    
                        @endif
                        <form method="POST" action="{{ route('register') }}" id="registrationForm">
                            @csrf
                            <h2 class="mb-5">Registrazione</h2>
                            <div class="mb-4 row">
                                {{-- Nome del ristorante--}}
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                                    <label for="restaurant-name" class="mb-2 ms-3">
                                        Nome ristorante
                                        <span class="text-danger"><strong><sup>*</sup></strong></span>
                                    </label>
                                    <input id="restaurant-name" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('restaurant-name') is-invalid @enderror" name="restaurant-name" value="{{old('restaurant-name')}}" required autocomplete="restaurant-name" autofocus>
                                    <span id="error-message" class="text-danger"></span>
                                    @error('restaurant-name')
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
                                    <input id="lastname" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('lastname') is-invalid @enderror"
                                    name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
    
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
                                    <input id="email" type="email" class="form-control bg-transparent border-dark-light rounded-pill 
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    minlength="6">
    
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
                                    <input name="phone" value="{{old('phone', '')}}" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
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
                                    <input name="vat" value="{{old('vat')}}" type="text"
                                    class="form-control bg-transparent border-dark-light rounded-pill
                                     @error('vat') is-invalid @elseif(old('vat', '')) is-valid @enderror" id="vat" minlength="11">
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
        const restaurantName = document.getElementById('restaurant-name');
        const name = document.getElementById('name');
        const lastName = document.getElementById('lastname');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const passwordConfirm = document.getElementById('password-confirm');
        const address = document.getElementById('address');
        const phone = document.getElementById('phone');
        const vat = document.getElementById('vat');
        //Error-bag
        const errorBag=document.getElementById('error-bag');
        //Lista degli errori
        const errorList = document.getElementById('error-list');
        document.getElementById('registrationForm').addEventListener('submit',function(event){
            //Creo un flag per gli errori
            let isValid=true;
            let errors=[];
            let errorText='';
            let errorsHtml='';
            //Nome Ristorante
            if(!restaurantName.value.trim()){
               isValid=false;
               restaurantName.classList.add('is-invalid');
               restaurantName.classList.remove('is-valid');
               errorText='Il campo nome del Ristorante è obbligatorio';
               errors.push(errorText);
            }else{
               name.classList.remove('is-invalid');
               name.classList.add('is-valid');
            }
            //Nome
            if(!name.value.trim()){
                isValid=false;
                name.classList.add('is-invalid');
                name.classList.remove('is-valid');
                errorText='Il campo nome del Ristoratore è obbligatorio';
                errors.push(errorText);
            }else{
                name.classList.remove('is-invalid');
                name.classList.add('is-valid');
            }
            //Cognomeome
            if(!lastName.value.trim()){
                isValid=false;
                lastName.classList.add('is-invalid');
                lastName.classList.remove('is-valid');
                errorText='Il campo Cognome è obbligatorio';
                errors.push(errorText);               
            }else{
                lastName.classList.remove('is-invalid');
                lastName.classList.add('is-valid');
            }
            //Email
            if(!email.value.trim()){
                isValid=false;
                email.classList.add('is-invalid');
                email.classList.remove('is-valid');
                errorText='Il campo email è obbligatorio';
                errors.push(errorText);
            }
            //Password
            if(!password.value.trim()){
                isValid=false;
                password.classList.add('is-invalid');
                password.classList.remove('is-valid');
                errorText='Il campo Password è obbligatorio';
                errors.push(errorText);
            }
            //Conferma Password
            if(!passwordConfirm.value.trim()){
                isValid=false;
                passwordConfirm.classList.add('is-invalid');
                passwordConfirm.classList.remove('is-valid');
                errorText='Il campo Conferma Password è obbligatorio';
                errors.push(errorText);
            }
            //Indirizzo
            if(!address.value.trim()){
                isValid=false;
                address.classList.add('is-invalid');
                address.classList.remove('is-valid');
                errorText='Il campo Indirizzo è obbligatorio';
                errors.push(errorText);               
            }
            //Telefono
            //  if(!phone.value.trim()){
                //     isValid=false;
                //     phone.classList.add('is-invalid');
                //     phone.classList.remove('is-valid');
                //     errorText='Questo campo è obbligatorio';
                // }
                //P.IVA
                if(!vat.value.trim()){
                    isValid=false;
                    vat.classList.add('is-invalid');
                    vat.classList.remove('is-valid');
                    errorText='Il campo P:IVA è obbligatorio';
                    errors.push(errorText);
                    console.log(errors)
                }
            //Riempio la lista con gli errori
            errors.forEach(error => {
                errorsHtml+=`<li>${error}</li>`
            });
            errorList.innerHTML = errorsHtml;

            //Mostro l'alert se ci sono errori
            if(errors.length){
                errorBag.classList.remove('d-none')
            }
            //Blocco l'invio del form in caso di errori
            if(!isValid){
                event.preventDefault();
            }
                
        })
    </script>
@endsection