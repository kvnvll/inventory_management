<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StockMovementController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::apiResource('products', ProductController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('inventories', InventoryController::class);
Route::apiResource('stock-movements', StockMovementController::class);

/*
|--------------------------------------------------------------------------
| Reset Products
|--------------------------------------------------------------------------
*/

Route::delete('/products/reset', function () {

    \App\Models\Product::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='products'");

    return response()->json([
        'success' => true,
        'message' => 'All products deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Reset Categories
|--------------------------------------------------------------------------
*/

Route::delete('/categories/reset', function () {

    \App\Models\Category::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='categories'");

    return response()->json([
        'success' => true,
        'message' => 'All categories deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Reset Suppliers
|--------------------------------------------------------------------------
*/

Route::delete('/suppliers/reset', function () {

    \App\Models\Supplier::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='suppliers'");

    return response()->json([
        'success' => true,
        'message' => 'All suppliers deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Reset Inventories
|--------------------------------------------------------------------------
*/

Route::delete('/inventories/reset', function () {

    \App\Models\Inventory::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='inventories'");

    return response()->json([
        'success' => true,
        'message' => 'All inventories deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Reset Stock Movements
|--------------------------------------------------------------------------
*/

Route::delete('/stock-movements/reset', function () {

    \App\Models\StockMovement::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='stock_movements'");

    return response()->json([
        'success' => true,
        'message' => 'All stock movements deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Reset Everything
|--------------------------------------------------------------------------
*/

Route::delete('/reset-all', function () {

    \App\Models\StockMovement::query()->delete();
    \App\Models\Inventory::query()->delete();
    \App\Models\Product::query()->delete();
    \App\Models\Supplier::query()->delete();
    \App\Models\Category::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='stock_movements'");
    DB::statement("DELETE FROM sqlite_sequence WHERE name='inventories'");
    DB::statement("DELETE FROM sqlite_sequence WHERE name='products'");
    DB::statement("DELETE FROM sqlite_sequence WHERE name='suppliers'");
    DB::statement("DELETE FROM sqlite_sequence WHERE name='categories'");

    return response()->json([
        'success' => true,
        'message' => 'All data deleted and IDs reset.'
    ]);
});

/*
|--------------------------------------------------------------------------
| Delete Range - Products
|--------------------------------------------------------------------------
*/

Route::delete('/products/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Product::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Products {$start} to {$end} deleted."
    ]);
});

/*
|--------------------------------------------------------------------------
| Delete Range - Categories
|--------------------------------------------------------------------------
*/

Route::delete('/categories/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Category::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Categories {$start} to {$end} deleted."
    ]);
});

/*
|--------------------------------------------------------------------------
| Delete Range - Suppliers
|--------------------------------------------------------------------------
*/

Route::delete('/suppliers/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Supplier::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Suppliers {$start} to {$end} deleted."
    ]);
});

/*
|--------------------------------------------------------------------------
| Delete Range - Inventories
|--------------------------------------------------------------------------
*/

Route::delete('/inventories/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Inventory::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Inventories {$start} to {$end} deleted."
    ]);
});

/*
|--------------------------------------------------------------------------
| Delete Range - Stock Movements
|--------------------------------------------------------------------------
*/

Route::delete('/stock-movements/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\StockMovement::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Stock Movements {$start} to {$end} deleted."
    ]);
});
