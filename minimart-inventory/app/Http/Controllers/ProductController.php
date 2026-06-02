<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display Products
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $search = $request->search;

        $products = Product::with([
            'supplier',
            'category'
        ])

        ->when($search, function ($query) use ($search) {

            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('barcode', 'like', "%{$search}%");

        })

        ->latest()

        ->get();

        return view('products.index', compact(
            'products',
            'search'
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | Show Create Form
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        $suppliers = Supplier::all();

        $categories = Category::all();

        return view('products.create', compact(
            'suppliers',
            'categories'
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | Store Product
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'supplier_id' => 'required',

            'category_id' => 'required',

            'name' => 'required',

            'barcode' => 'required',

            'price' => 'required|numeric',

            'stock' => 'required|numeric',

            'expiration_date' => 'nullable|date',

        ]);

       Product::create([

    'name' => $request->name,
    'barcode' => $request->barcode,
    'price' => $request->price,
    'stock' => $request->stock,
    'low_stock_limit' => $request->low_stock_limit,
    'category_id' => $request->category_id,
    'supplier_id' => $request->supplier_id,
    'expiration_date' => $request->expiration_date

]);

        return redirect('/products')
            ->with('success', 'Product added successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Show Edit Form
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $suppliers = Supplier::all();

        $categories = Category::all();

        return view('products.edit', compact(
            'product',
            'suppliers',
            'categories'
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | Update Product
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $request->validate([

            'supplier_id' => 'required',

            'category_id' => 'required',

            'name' => 'required',

            'barcode' => 'required',

            'price' => 'required|numeric',

            'stock' => 'required|numeric',

            'expiration_date' => 'nullable|date',

        ]);

        $product = Product::findOrFail($id);

        $product->update([

            'supplier_id' => $request->supplier_id,

            'category_id' => $request->category_id,

            'name' => $request->name,

            'barcode' => $request->barcode,

            'price' => $request->price,

            'stock' => $request->stock,

            'expiration_date' => $request->expiration_date,

        ]);

        return redirect('/products')
            ->with('success', 'Product updated successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Product
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/products')
            ->with('success', 'Product deleted successfully.');
    }
}