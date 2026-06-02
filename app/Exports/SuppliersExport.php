<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;

class SuppliersExport implements FromCollection
{
    public function collection()
    {
        return Supplier::all()->map(function ($supplier) {

            return [

                'ID' => $supplier->id,

                'Name' => $supplier->name,

                'Contact' => $supplier->contact,

                'Address' => $supplier->address,

            ];
        });
    }
}