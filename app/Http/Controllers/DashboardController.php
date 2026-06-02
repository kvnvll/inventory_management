<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $totalSuppliers = Supplier::count();

        $lowStock = Product::whereColumn(
            'stock',
            '<=',
            'low_stock_limit'
        )->count();

        $expiredProducts = Product::whereDate(
            'expiration_date',
            '<',
            now()
        )->count();

        $inventoryValue = Product::select(
            DB::raw('SUM(price * stock) as total')
        )->value('total');

        $latestProducts = Product::with([
            'category',
            'supplier'
        ])
        ->latest()
        ->take(5)
        ->get();

        return view('dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalSuppliers',
            'lowStock',
            'expiredProducts',
            'inventoryValue',
            'latestProducts'
        ));
    }
}