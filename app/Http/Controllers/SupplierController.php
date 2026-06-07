<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Supplier;
 
class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $suppliers = Supplier::all();
 
        if ($request->expectsJson()) {
            return response()->json($suppliers);
        }
 
        return view('suppliers.index', compact('suppliers'));
    }
 
    public function create()
    {
        return view('suppliers.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);
 
        $supplier = Supplier::create([
            'name'    => $request->name,
            'contact' => $request->contact,
            'address' => $request->address
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($supplier, 201);
        }
 
        return redirect('/suppliers')
            ->with('success', 'Supplier added successfully.');
    }
 
    public function show(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
 
        if ($request->expectsJson()) {
            return response()->json($supplier);
        }
    }
 
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
 
        return view('suppliers.edit', compact('supplier'));
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);
 
        $supplier = Supplier::findOrFail($id);
 
        $supplier->update([
            'name'    => $request->name,
            'contact' => $request->contact,
            'address' => $request->address
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($supplier);
        }
 
        return redirect('/suppliers')
            ->with('success', 'Supplier updated successfully.');
    }
 
    public function destroy(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
 
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Supplier deleted successfully.']);
        }
 
        return redirect('/suppliers')
            ->with('success', 'Supplier deleted successfully.');
    }
}