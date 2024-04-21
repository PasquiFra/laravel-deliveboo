@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="fs-1 fw-semibold text-light text-center my-4">
        {{ __('Home') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-5">
            <div id="home-card" class="card border-0" role="button">
                <div class="card-body rounded">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="nav-link text-uppercase text-center fw-bold text-dark" href="{{route('admin.dishes.index') }}">Visualizza tutti i piatti</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection