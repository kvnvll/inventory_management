<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $supplier = Supplier::firstOrCreate([
            'name' => $row['supplier']
        ]);

        $category = Category::firstOrCreate([
            'name' => $row['category']
        ]);

        return new Product([
            'supplier_id'     => $supplier->id,
            'category_id'     => $category->id,
            'name'            => $row['name'],
            'barcode'         => $row['barcode'],
            'price'           => $row['price'],
            'stock'           => $row['stock'],
            'low_stock_limit' => $row['low_stock_limit'] ?? 10,
            'expiration_date' => $row['expiration_date'],
        ]);
    }
}
