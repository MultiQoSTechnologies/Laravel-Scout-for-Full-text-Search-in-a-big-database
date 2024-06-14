<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', [UserController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);
// Route for AJAX search
//Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
