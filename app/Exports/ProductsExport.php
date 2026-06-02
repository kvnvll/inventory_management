<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    public function collection()
    {
        return Product::with([
            'category',
            'supplier'
        ])
        ->get()
        ->map(function ($product) {

            return [

                'ID' => $product->id,

                'Product' => $product->name,

                'Barcode' => $product->barcode,

                'Category' => $product->category?->name,

                'Supplier' => $product->supplier?->name,

                'Price' => $product->price,

                'Stock' => $product->stock,

                'Expiration Date' => $product->expiration_date,

            ];
        });
    }
}