<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')

<div class="container-fluid bg-white p-4">
    <h2>Fibonacci</h2>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        <div class="col-md-5">
            <form action="/fibonaccicount" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">column 1</label>
                    <input type="number" name="n1" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">column 2</label>
                    <input type="number" name="n2" class="form-control" id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-5">

            @if (session('fibonacci'))
            <div class="alert alert-success">
                @foreach (session('fibonacci') as $item)
                {{$item}}
                @endforeach
                <br>
                Nilai ke $n1 adalah {{session('result1')}}<br>
                Nilai ke $n2 adalah {{session('result2')}}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection