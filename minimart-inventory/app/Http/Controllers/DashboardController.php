<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $totalSuppliers = Supplier::count();

        $lowStock = Product::where('stock', '<=', 5)->count();

        return view('dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalSuppliers',
            'lowStock'
        ));
    }
}