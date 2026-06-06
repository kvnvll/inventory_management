<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

use App\Imports\ProductsImport;
use App\Imports\CategoriesImport;
use App\Imports\SuppliersImport;

use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Excel / CSV Imports
    |--------------------------------------------------------------------------
    */

    public function products(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
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
            'file' => 'required|mimes:xlsx,xls,csv'
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
            'file' => 'required|mimes:xlsx,xls,csv'
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

    /*
    |--------------------------------------------------------------------------
    | JSON Imports
    |--------------------------------------------------------------------------
    */

    public function productsJson(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:json'
        ]);

        $data = json_decode(
            file_get_contents($request->file('file')->getRealPath()),
            true
        );

        foreach ($data as $item) {

            Product::create([
                'supplier_id' => $item['supplier_id'],
                'category_id' => $item['category_id'],
                'name' => $item['name'],
                'barcode' => $item['barcode'],
                'price' => $item['price'],
                'stock' => $item['stock'],
                'low_stock_limit' => $item['low_stock_limit'],
                'expiration_date' => $item['expiration_date'],
            ]);

        }

        return back()->with(
            'success',
            'Products JSON imported successfully.'
        );
    }

    public function categoriesJson(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:json'
        ]);

        $data = json_decode(
            file_get_contents($request->file('file')->getRealPath()),
            true
        );

        foreach ($data as $item) {

            Category::create([
                'name' => $item['name']
            ]);

        }

        return back()->with(
            'success',
            'Categories JSON imported successfully.'
        );
    }

    public function suppliersJson(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:json'
        ]);

        $data = json_decode(
            file_get_contents($request->file('file')->getRealPath()),
            true
        );

        foreach ($data as $item) {

            Supplier::create([
                'name' => $item['name'],
                'contact' => $item['contact'],
                'address' => $item['address'],
            ]);

        }

        return back()->with(
            'success',
            'Suppliers JSON imported successfully.'
        );
    }
}