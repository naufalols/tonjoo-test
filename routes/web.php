<?php

use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\ListTransactionController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

Route::get('/addtransaction', [TransactionController::class, 'index']);
Route::get('/listtransaction', [ListTransactionController::class, 'index']);
Route::get('/fibonacci', [FibonacciController::class, 'index']);
Route::post('/fibonaccicount', [FibonacciController::class, 'fibonacci']);
