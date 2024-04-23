@extends('layouts.app')

@section('title', 'Modifica'.' '.$restaurant->name)

@section('content')
        <section id="edit-form">
            <h1 class="text-center my-5">Modifica il tuo ristorante</h1>

           {{-- Form  --}}
           @include('admin.restaurants.form.form') 
        </section>    
@endsection