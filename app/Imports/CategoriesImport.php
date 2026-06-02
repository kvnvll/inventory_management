<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoriesImport implements ToModel
{
    public function model(array $row)
    {
        if ($row[0] === 'name') {
            return null;
        }

        return new Category([
            'name' => $row[0],
        ]);
    }
}