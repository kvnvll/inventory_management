<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'supplier_id'     => $row['supplier_id'],
            'category_id'     => $row['category_id'],
            'name'            => $row['name'],
            'barcode'         => $row['barcode'],
            'price'           => $row['price'],
            'stock'           => $row['stock'],
            'low_stock_limit' => $row['low_stock_limit'],
            'expiration_date' => $row['expiration_date'],
        ]);
    }
}