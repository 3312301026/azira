<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\SalesController;
Use App\Http\Controllers\ListProdukController;

// route::get('/listproduk', function () {
//     return view('list_produk');
// })



Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');

//  Route::get('/', [HomeController::class, 'index']);
//  Route::get('/contact', [HomeController::class, 'contact']);