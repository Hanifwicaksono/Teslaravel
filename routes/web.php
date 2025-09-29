<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    // return view('welcome');
    return 'Ini return utama';
});

Route::get('/products', function () {
    return 'Ini adalah route products';
});

Route::get('/cart', function () {
    return 'Ini adalah route cart';
});

Route::get('/checkout', function () {
    return 'Ini adalah route checkout';
});

Route::resource('products-resource', ProductController::class);