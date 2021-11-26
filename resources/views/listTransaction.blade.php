<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')

<div class="container-fluid mb-2 bg-white p-4">
    <h2>List Transaction Data</h2>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <button class="btn btn-success text-white">Add category</button>
        </div>
        <div class="col-md-2 ms-auto">
            <input type="date" class="form-control" id="floatingInput">
        </div>
        <div class="col-md-2 ms-auto">
            <input type="date" class="form-control" id="floatingInput">
        </div>
        <div class="col-md-2 ms-auto">
            <select class="form-select" aria-label="Default select example">
                <option selected>-- select category --</option>
                <option value="1">Income</option>
                <option value="2">Expense</option>
            </select>
        </div>
        <div class="col-md-2 ms-auto">
            <input type="text" class="form-control">
        </div>
        <div class="col-md-2 ms-auto">
            <button class="btn btn-primary text-white">search</button>
        </div>
    </div>
</div>
<div class="container-fluid bg-white p-4">
    <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Code</th>
                <th>Rate Euro</th>
                <th>Data Paid</th>
                <th>Category</th>
                <th>Transaction Name</th>
                <th>Amount (IDR)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection