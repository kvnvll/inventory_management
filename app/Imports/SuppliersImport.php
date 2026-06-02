<?php

namespace App\Imports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;

class SuppliersImport implements ToModel
{
    public function model(array $row)
    {
        if ($row[0] === 'name') {
            return null;
        }

        return new Supplier([
            'name' => $row[0],
            'contact' => $row[1],
            'address' => $row[2],
        ]);
    }
}