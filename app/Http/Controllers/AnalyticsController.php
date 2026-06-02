<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $totalSuppliers = Supplier::count();

        $lowStock = Product::where('stock', '<=', 10)->count();

        $expiredProducts = Product::whereDate(
            'expiration_date',
            '<',
            Carbon::today()
        )->count();

        $inventoryValue = Product::sum(
            DB::raw('price * stock')
        );

        return view('analytics.index', compact(
            'totalProducts',
            'totalCategories',
            'totalSuppliers',
            'lowStock',
            'expiredProducts',
            'inventoryValue'
        ));
    }
}