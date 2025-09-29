<?php

use Illuminate\Support\Facades\Route;

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
