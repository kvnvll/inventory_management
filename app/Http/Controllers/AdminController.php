<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Inventory;
use App\Models\StockMovement;

class AdminController extends Controller
{
    public function resetAll()
    {
        Product::truncate();
        Category::truncate();
        Supplier::truncate();
        Inventory::truncate();
        StockMovement::truncate();

        return response()->json([
            'message' => 'All data deleted successfully.'
        ]);
    }
}