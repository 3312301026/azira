<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ListProdukController;

// route::get('/listproduk', function () {
//     return view('list_produk');
// })



Route::get('/listproduk', [ListProdukController::class, 'show']);


//  Route::get('/', [HomeController::class, 'index']);
//  Route::get('/contact', [HomeController::class, 'contact']);