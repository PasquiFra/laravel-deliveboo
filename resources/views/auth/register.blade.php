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
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="telephone_number" autofocus>

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
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Immagine --}}
                        <div class="mb-4 row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Immagine</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

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
