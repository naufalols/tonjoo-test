<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Tonjoo ')

@section('content')

<form action="/savetransaction" method="post">
    <div class="container-fluid bg-white p-4">
        <div class="row">
            <div class="col-md-7">
                <div class="form-floating">
                    <textarea class="form-control" name="comment" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-floating mb-2">
                    <input type="number" name="code" class="form-control" id="floatingInput">
                    <label for="floatingInput">Code</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" name="rateEuro" class="form-control" id="floatingInput">
                    <label for="floatingInput">Rate Euro</label>
                </div>
                <div class="form-floating mb-2">
                    <input name="dateTransaction" type="date" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" class="
                        form-control" id="floatingInput">
                    <label for="floatingInput">Date Paid</label>
                </div>
            </div>
        </div>
        <h2>Transaction Data</h2>
        <div class="border border-1 mb-2 p-2">
            {{-- <button type="button" id="removeTransaction[0]" class="btn-close float-end"
                aria-label="Close"></button> --}}
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-3">
                    <select class="form-select" name="category[0]" aria-label="Default select example">
                        <option selected>-- select category --</option>
                        <option value="1">Income</option>
                        <option value="2">Expense</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <table class="table table-responsive-md table-bordered" id="table[0]" data-id="0">
                        <thead>
                            <tr>
                                <th scope="col">Transaction Name</th>
                                <th scope="col">Nominal (IDR)</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input name="transactionName[0][0]" type="text" class="form-control"></td>
                                <td><input name="nominal[0][0]" type="number" class="form-control"></td>
                                <td><button type="button"
                                        class="btn btn-primary btn-sm text-white addMoreTransactionTable"><i
                                            class="bi bi-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="moreTransaction"></div>
        <div class="">
            <button type="button" class="btn btn-primary btn-block text-white" id="addMoreTransaction">Add
                More</button>
        </div>
    </div>
    <div class="container p-2">
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-success btn-lg text-white">Save All Data</button>
            </div>
        </div>
    </div>
</form>


@endsection