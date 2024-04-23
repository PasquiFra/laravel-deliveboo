@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Registrati</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Nome --}}
                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Cognome --}}
                        <div class="mb-4 row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Cognome<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Conferma Password --}}
                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma Password<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- Numero di telefono --}}
                        <div class="mb-4 row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">Numero di telefono<span class="text-danger"><strong>*</strong></span></label>

                            <div class="col-md-6">
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}@if(!old('telephone_number'))+39 @endif" required autocomplete="telephone_number" autofocus>

                                @error('telephone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Data di nascita --}}
                        <div class="mb-4 row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">Data di nascita</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="birthday" autofocus>

                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

{{--! XXXXXXXXXXXXXXXXXXXXXXXXXXXX  --}}

                        {{-- Input Nome --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="restaurant_name" class="form-label">Nome<span class="text-danger"><strong>*</strong></span></label>
                <input name="restaurant_name" value="{{old('restaurant_name')}}" type="text" class="form-control @error('restaurant_name') is-invalid @elseif(old('restaurant_name', '')) is-valid @enderror"  id="restaurant_name">
                @error('restaurant_name')   
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
                <input name="address" value="{{old('address')}}" type="text" class="form-control @error('address') is-invalid @elseif(old('address', '')) is-valid @enderror" id="address">
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
                <input name="phone" value="@if(old('phone', '+39 ')){{old('phone')}}@else+39 @endif" type="text" class="form-control @error('phone') is-invalid @elseif(old('phone', '')) is-valid @enderror" id="phone">
                @error('phone')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il numero di telefono del ristorante
                    </div>
                @enderror
            </div>
        </div>

        {{-- Input P.IVA (VAT) --}}
        <div class="col-3">
            <div class="mb-5">
                <label for="vat" class="form-label">P.IVA<span class="text-danger"><strong>*</strong></span></label>
                <input name="vat" value="{{old('vat')}}" type="text" class="form-control @error('vat') is-invalid @elseif(old('vat', '')) is-valid @enderror" id="vat">
                @error('vat')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci la P.IVA del ristorante
                    </div>
                @enderror
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


{{--! XXXXXXXXXXXXXXXXXXXXXXXXXXXX  --}}

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
                    <p class="asterisk">I campi contrassegnati con <span class="text-danger"><strong>*</strong></span> sono obbligatori</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
