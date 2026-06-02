<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnalyticsExport implements FromCollection
{
    public function collection()
    {
        return new Collection([

            [
                'Metric' => 'Total Products',
                'Value' => Product::count(),
            ],

            [
                'Metric' => 'Total Categories',
                'Value' => Category::count(),
            ],

            [
                'Metric' => 'Total Suppliers',
                'Value' => Supplier::count(),
            ],

            [
                'Metric' => 'Low Stock Products',
                'Value' => Product::where('stock', '<=', 10)->count(),
            ],

            [
                'Metric' => 'Inventory Value',
                'Value' => Product::sum(
                    DB::raw('price * stock')
                ),
            ],

        ]);
    }
}