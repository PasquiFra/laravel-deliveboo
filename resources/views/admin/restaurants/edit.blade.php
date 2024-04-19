@extends('layouts.app')
@section('content')
        <section id="edit-form">
            <h1 class="text-center my-3">Modifica il tuo ristorante</h1>

           {{-- Form  --}}
           @include('admin.restaurants.form.form') 
        </section>    
@endsection