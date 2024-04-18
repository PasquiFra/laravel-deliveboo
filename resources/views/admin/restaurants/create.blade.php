@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <h1 class="text-center my-3">Crea il tuo ristorante</h1>
            <form class="my-5" action="" method="">
                <div class="row">
                    <div class="col-3">
                        <div class="mb-5">
                            <label for="restaurant-name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="restaurant-name">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-5">
                            <label for="restaurant-address" class="form-label">Indirizzo</label>
                            <input type="text" class="form-control" id="restaurant-address">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-5">
                            <label for="restaurant-phone-number" class="form-label">Numero di telefono</label>
                            <input type="text" class="form-control" id="restaurant-phone-number">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-5">
                            <label for="restaurant-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="restaurant-email">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-5">
                            <label for="restaurant-vat" class="form-label">P.IVA</label>
                            <input type="text" class="form-control" id="restaurant-vat">
                        </div>
                    </div>
                    <div class="col-4">
                        <label class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleziona la categoria</option>
                            {{-- Dobbiamo farci un foreach --}}
                            <option value="1">One</option>
                          </select>
                    </div>
                    <div class="col-6">
                        <div class="mb-5">
                            <label for="restaurant-image" class="form-label">Immagine</label>
                            <input type="text" class="form-control" id="restaurant-image">
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center mb-4">
                        <img class="img-fluid" src="https://t4.ftcdn.net/jpg/05/17/53/57/360_F_517535712_q7f9QC9X6TQxWi6xYZZbMmw5cnLMr279.jpg" alt="">
                    </div>
                </div>
                <div class="col d-flex justify-content-between">
                    <button class="btn btn-lg btn-secondary">Torna indietro</button>
                    <div>
                        <button class="btn btn-lg btn-success me-2">Save</button>
                        <button class="btn btn-lg btn-warning" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>   
    </main>    
@endsection