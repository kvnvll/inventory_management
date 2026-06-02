<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    public function model(array $row)
    {
        if ($row[0] === 'supplier_id') {
            return null;
        }

        return new Product([
            'supplier_id'      => $row[0],
            'category_id'      => $row[1],
            'name'             => $row[2],
            'barcode'          => $row[3],
            'price'            => $row[4],
            'stock'            => $row[5],
            'low_stock_limit'  => $row[6],
            'expiration_date'  => $row[7],
        ]);
    }
}