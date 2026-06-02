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
| RESET ROUTES FIRST
|--------------------------------------------------------------------------
*/

Route::delete('/products/reset', function () {

    $before = \App\Models\Product::count();

    \App\Models\Product::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='products'");

    return response()->json([
        'success' => true,
        'before' => $before,
        'after' => \App\Models\Product::count(),
        'message' => 'All products deleted and IDs reset.'
    ]);
});

Route::delete('/categories/reset', function () {

    $before = \App\Models\Category::count();

    \App\Models\Category::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='categories'");

    return response()->json([
        'success' => true,
        'before' => $before,
        'after' => \App\Models\Category::count(),
        'message' => 'All categories deleted and IDs reset.'
    ]);
});

Route::delete('/suppliers/reset', function () {

    $before = \App\Models\Supplier::count();

    \App\Models\Supplier::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='suppliers'");

    return response()->json([
        'success' => true,
        'before' => $before,
        'after' => \App\Models\Supplier::count(),
        'message' => 'All suppliers deleted and IDs reset.'
    ]);
});

Route::delete('/inventories/reset', function () {

    $before = \App\Models\Inventory::count();

    \App\Models\Inventory::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='inventories'");

    return response()->json([
        'success' => true,
        'before' => $before,
        'after' => \App\Models\Inventory::count(),
        'message' => 'All inventories deleted and IDs reset.'
    ]);
});

Route::delete('/stock-movements/reset', function () {

    $before = \App\Models\StockMovement::count();

    \App\Models\StockMovement::query()->delete();

    DB::statement("DELETE FROM sqlite_sequence WHERE name='stock_movements'");

    return response()->json([
        'success' => true,
        'before' => $before,
        'after' => \App\Models\StockMovement::count(),
        'message' => 'All stock movements deleted and IDs reset.'
    ]);
});

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
| DELETE RANGE ROUTES
|--------------------------------------------------------------------------
*/

Route::delete('/products/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Product::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Products {$start} to {$end} deleted."
    ]);
});

Route::delete('/categories/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Category::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Categories {$start} to {$end} deleted."
    ]);
});

Route::delete('/suppliers/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Supplier::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Suppliers {$start} to {$end} deleted."
    ]);
});

Route::delete('/inventories/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\Inventory::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Inventories {$start} to {$end} deleted."
    ]);
});

Route::delete('/stock-movements/reset-range/{start}/{end}', function ($start, $end) {

    \App\Models\StockMovement::whereBetween('id', [$start, $end])->delete();

    return response()->json([
        'success' => true,
        'message' => "Stock Movements {$start} to {$end} deleted."
    ]);
});

/*
|--------------------------------------------------------------------------
| API RESOURCES LAST
|--------------------------------------------------------------------------
*/

Route::apiResource('products', ProductController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('inventories', InventoryController::class);
Route::apiResource('stock-movements', StockMovementController::class);
