<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\ProductsImport;
use App\Imports\CategoriesImport;
use App\Imports\SuppliersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function products(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls'
        ]);

        Excel::import(
            new ProductsImport,
            $request->file('file')
        );

        return back()->with(
            'success',
            'Products imported successfully.'
        );
    }

    public function categories(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls'
        ]);

        Excel::import(
            new CategoriesImport,
            $request->file('file')
        );

        return back()->with(
            'success',
            'Categories imported successfully.'
        );
    }

    public function suppliers(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls'
        ]);

        Excel::import(
            new SuppliersImport,
            $request->file('file')
        );

        return back()->with(
            'success',
            'Suppliers imported successfully.'
        );
    }
}