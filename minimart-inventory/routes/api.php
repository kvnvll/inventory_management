<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StockMovementController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::apiResource('products', ProductController::class);

Route::apiResource('suppliers', SupplierController::class);

Route::apiResource('inventories', InventoryController::class);

Route::apiResource('stock-movements', StockMovementController::class);