<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ActivityLogController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    
Route::get('/activity-logs', [ActivityLogController::class, 'index']);

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Analytics
    |--------------------------------------------------------------------------
    */

    Route::get('/analytics', [AnalyticsController::class, 'index'])
        ->name('analytics');

    /*
    |--------------------------------------------------------------------------
    | JSON REPORTS
    |--------------------------------------------------------------------------
    */

    Route::get('/reports/products/json', function () {

        return Product::with([
            'category',
            'supplier'
        ])->get();

    });

    Route::get('/reports/categories/json', function () {

        return Category::all();

    });

    Route::get('/reports/suppliers/json', function () {

        return Supplier::all();

    });

    Route::get('/reports/analytics/json', function () {

        return [

            'products' => Product::count(),

            'categories' => Category::count(),

            'suppliers' => Supplier::count(),

            'low_stock' => Product::where(
                'stock',
                '<=',
                10
            )->count(),

            'inventory_value' => Product::sum(
                DB::raw('price * stock')
            ),

        ];

    });

    /*
    |--------------------------------------------------------------------------
    | CSV REPORTS
    |--------------------------------------------------------------------------
    */

    Route::get('/reports/products/csv', function () {

        $products = Product::with([
            'category',
            'supplier'
        ])->get();

        $filename = 'products.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' =>
                'attachment; filename="'.$filename.'"',
        ];

        $callback = function () use ($products) {

            $file = fopen('php://output', 'w');

            fputcsv($file, [
                'ID',
                'Product',
                'Category',
                'Supplier',
                'Price',
                'Stock'
            ]);

            foreach ($products as $product) {

                fputcsv($file, [

                    $product->id,

                    $product->name,

                    $product->category?->name,

                    $product->supplier?->name,

                    $product->price,

                    $product->stock

                ]);
            }

            fclose($file);
        };

        return response()->stream(
            $callback,
            200,
            $headers
        );
    });

    /*
    |--------------------------------------------------------------------------
    | EXCEL REPORTS
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/reports/products/xlsx',
        [ReportController::class, 'productsExcel']
    );

    Route::get(
        '/reports/categories/xlsx',
        [ReportController::class, 'categoriesExcel']
    );

    Route::get(
        '/reports/suppliers/xlsx',
        [ReportController::class, 'suppliersExcel']
    );

    Route::get(
        '/reports/analytics/xlsx',
        [ReportController::class, 'analyticsExcel']
    );


    /*
|--------------------------------------------------------------------------
| IMPORTS
|--------------------------------------------------------------------------
*/

Route::post(
    '/imports/products',
    [ImportController::class, 'products']
);

Route::post(
    '/imports/categories',
    [ImportController::class, 'categories']
);

Route::post(
    '/imports/suppliers',
    [ImportController::class, 'suppliers']
);

    /*
    |--------------------------------------------------------------------------
    | PDF REPORTS
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/reports/products/pdf',
        [ReportController::class, 'productsPdf']
    );

    Route::get(
        '/reports/categories/pdf',
        [ReportController::class, 'categoriesPdf']
    );

    Route::get(
        '/reports/suppliers/pdf',
        [ReportController::class, 'suppliersPdf']
    );

    Route::get(
        '/reports/analytics/pdf',
        [ReportController::class, 'analyticsPdf']
    );

    /*
    |--------------------------------------------------------------------------
    | Products
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
    | Categories
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
    | Suppliers
    |--------------------------------------------------------------------------
    */

    Route::get('/suppliers', [SupplierController::class, 'index']);
    Route::get('/suppliers/create', [SupplierController::class, 'create']);
    Route::post('/suppliers', [SupplierController::class, 'store']);
    Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('/suppliers/{id}', [SupplierController::class, 'update']);
    Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']);

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';
