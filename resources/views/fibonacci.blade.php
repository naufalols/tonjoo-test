<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')

<div class="container-fluid bg-white p-4">
    <h2>Fibonacci</h2>
    <div class="col-md-5">
        <form action="/fibnoccaiCount" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">column 1</label>
                <input type="number" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">column 2</label>
                <input type="number" class="form-control" id="exampleFormControlInput1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection