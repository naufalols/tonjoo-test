<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')

<div class="container-fluid bg-white p-4">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-7">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput">
                    <label for="floatingInput">Code</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" class="form-control" id="floatingInput">
                    <label for="floatingInput">Rate Euro</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control" id="floatingInput">
                    <label for="floatingInput">Date Paid</label>
                </div>
            </div>
        </div>
        <h2>Transaction Data</h2>
        <div class="border border-1 mb-2 p-2">
            <button type="button" class="btn-close float-end" aria-label="Close"></button>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>-- select category --</option>
                        <option value="1">Income</option>
                        <option value="2">Expense</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <table class="table table-responsive-md table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Transaction Name</th>
                                <th scope="col">Nominal (IDR)</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><button class="btn btn-primary btn-sm text-white"><i
                                            class="bi bi-plus-square"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="">
            <button class="btn btn-primary btn-block text-white" (click)="onAddCategoieModal(addCategorieModal)">Add
                More</button>
        </div>
    </form>
</div>


@endsection