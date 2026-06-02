<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

use App\Exports\ProductsExport;
use App\Exports\CategoriesExport;
use App\Exports\SuppliersExport;
use App\Exports\AnalyticsExport;

use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    */

    public function productsExcel()
    {
        return Excel::download(
            new ProductsExport,
            'products.xlsx'
        );
    }

    public function productsPdf()
    {
        $products = Product::with([
            'category',
            'supplier'
        ])->get();

        $pdf = Pdf::loadView(
            'reports.products-pdf',
            compact('products')
        );

        return $pdf->download('products.pdf');
    }

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */

    public function categoriesExcel()
    {
        return Excel::download(
            new CategoriesExport,
            'categories.xlsx'
        );
    }

    public function categoriesPdf()
    {
        $categories = Category::all();

        $pdf = Pdf::loadView(
            'reports.categories-pdf',
            compact('categories')
        );

        return $pdf->download('categories.pdf');
    }

    /*
    |--------------------------------------------------------------------------
    | Suppliers
    |--------------------------------------------------------------------------
    */

    public function suppliersExcel()
    {
        return Excel::download(
            new SuppliersExport,
            'suppliers.xlsx'
        );
    }

    public function suppliersPdf()
    {
        $suppliers = Supplier::all();

        $pdf = Pdf::loadView(
            'reports.suppliers-pdf',
            compact('suppliers')
        );

        return $pdf->download('suppliers.pdf');
    }

    /*
    |--------------------------------------------------------------------------
    | Analytics
    |--------------------------------------------------------------------------
    */

    public function analyticsExcel()
    {
        return Excel::download(
            new AnalyticsExport,
            'analytics.xlsx'
        );
    }

    public function analyticsPdf()
    {
        $data = [

            'products' => Product::count(),

            'categories' => Category::count(),

            'suppliers' => Supplier::count(),

            'lowStock' => Product::where(
                'stock',
                '<=',
                10
            )->count(),

            'inventoryValue' => Product::sum(
                DB::raw('price * stock')
            ),
        ];

        $pdf = Pdf::loadView(
            'reports.analytics-pdf',
            compact('data')
        );

        return $pdf->download('analytics.pdf');
    }
}
