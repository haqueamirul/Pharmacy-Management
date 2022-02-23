<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Customer
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('add.customer');
Route::post('/store-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('store.customer');
Route::get('/edit-customer-{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/update-customer', [App\Http\Controllers\CustomerController::class, 'update'])->name('update.customer');

//Supplier
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::get('/add-supplier', [App\Http\Controllers\SupplierController::class, 'create'])->name('add.supplier');
Route::post('/store-supplier', [App\Http\Controllers\SupplierController::class, 'store'])->name('store.supplier');
