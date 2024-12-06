<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('products', ProductController::class);
Route::post('/products', [ProductController::class, 'store']);
