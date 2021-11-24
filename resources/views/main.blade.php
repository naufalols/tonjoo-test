<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')
{{-- Jumbotron --}}
<div class="p-5 mb-4 rounded-3 jumbotron">
    <div class="container-fluid py-5 text-white">
        <h1 class="display-5 fw-bold">Tonjoo Ads</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
            previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your
            liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Order now!</button>
    </div>
</div>

{{-- Card --}}
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card bg-transparent border-0">
            <img src="{{asset('images/product.png')}}" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card bg-transparent border-0">
            <img src="{{asset('images/product.png')}}" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card bg-transparent border-0">
            <img src="{{asset('images/product.png')}}" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card bg-transparent border-0">
            <img src="{{asset('images/product.png')}}" class="card-img-top" alt="...">
        </div>
    </div>
</div>

<div class="card mb-3 bg-transparent">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('images/product.png')}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer. is a wider card with supporting text below as a
                    natural lead-in to additional
                    content. This content is a little bit longer. is a wider card with supporting text below as a
                    natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

@endsection