<?php
 
namespace App\Http\Controllers;
 
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
 
        $products = Product::with(['supplier', 'category'])
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('barcode', 'like', "%{$search}%");
            })
            ->latest()
            ->get();
 
        if ($request->expectsJson()) {
            return response()->json($products);
        }
 
        return view('products.index', compact('products', 'search'));
    }
 
    public function create()
    {
        $suppliers  = Supplier::all();
        $categories = Category::all();
 
        return view('products.create', compact('suppliers', 'categories'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id'    => 'required',
            'category_id'    => 'required',
            'name'           => 'required',
            'barcode'        => 'required',
            'price'          => 'required|numeric',
            'stock'          => 'required|numeric',
            'low_stock_limit'=> 'required|numeric',
            'expiration_date'=> 'nullable|date',
        ]);
 
        $product = Product::create([
            'supplier_id'    => $request->supplier_id,
            'category_id'    => $request->category_id,
            'name'           => $request->name,
            'barcode'        => $request->barcode,
            'price'          => $request->price,
            'stock'          => $request->stock,
            'low_stock_limit'=> $request->low_stock_limit,
            'expiration_date'=> $request->expiration_date,
        ]);
 
        ActivityLog::create([
            'action'      => 'Product Created',
            'description' => 'Added product: ' . $product->name,
            'user_name'   => Auth::check() ? Auth::user()->name : 'System'
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($product->load(['supplier', 'category']), 201);
        }
 
        return redirect('/products')
            ->with('success', 'Product added successfully.');
    }
 
    public function show(Request $request, $id)
    {
        $product = Product::with(['supplier', 'category'])->findOrFail($id);
 
        if ($request->expectsJson()) {
            return response()->json($product);
        }
    }
 
    public function edit($id)
    {
        $product    = Product::findOrFail($id);
        $suppliers  = Supplier::all();
        $categories = Category::all();
 
        return view('products.edit', compact('product', 'suppliers', 'categories'));
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id'    => 'required',
            'category_id'    => 'required',
            'name'           => 'required',
            'barcode'        => 'required',
            'price'          => 'required|numeric',
            'stock'          => 'required|numeric',
            'low_stock_limit'=> 'required|numeric',
            'expiration_date'=> 'nullable|date',
        ]);
 
        $product = Product::findOrFail($id);
 
        $product->update([
            'supplier_id'    => $request->supplier_id,
            'category_id'    => $request->category_id,
            'name'           => $request->name,
            'barcode'        => $request->barcode,
            'price'          => $request->price,
            'stock'          => $request->stock,
            'low_stock_limit'=> $request->low_stock_limit,
            'expiration_date'=> $request->expiration_date,
        ]);
 
        ActivityLog::create([
            'action'      => 'Product Updated',
            'description' => 'Updated product: ' . $product->name,
            'user_name'   => Auth::check() ? Auth::user()->name : 'System'
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($product->load(['supplier', 'category']));
        }
 
        return redirect('/products')
            ->with('success', 'Product updated successfully.');
    }
 
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
 
        ActivityLog::create([
            'action'      => 'Product Deleted',
            'description' => 'Deleted product: ' . $product->name,
            'user_name'   => Auth::check() ? Auth::user()->name : 'System'
        ]);
 
        $product->delete();
 
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Product deleted successfully.']);
        }
 
        return redirect('/products')
            ->with('success', 'Product deleted successfully.');
    }
}
