<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
*/

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::put('/products/{id}', [ProductController::class, 'update']);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);

Route::put('/categories/{id}', [CategoryController::class, 'update']);

Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Supplier Routes
|--------------------------------------------------------------------------
*/

Route::get('/suppliers', [SupplierController::class, 'index']);

Route::get('/suppliers/create', [SupplierController::class, 'create']);

Route::post('/suppliers', [SupplierController::class, 'store']);

Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit']);

Route::put('/suppliers/{id}', [SupplierController::class, 'update']);

Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']);