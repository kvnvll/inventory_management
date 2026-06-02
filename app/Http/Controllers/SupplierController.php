<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'contact' => 'required',
        'address' => 'required'
    ]);

    $supplier = Supplier::create([
        'name' => $request->name,
        'contact' => $request->contact,
        'address' => $request->address
    ]);

    return response()->json([
        'success' => true,
        'data' => $supplier
    ]);
}
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);

        $supplier = Supplier::findOrFail($id);

        $supplier->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address
        ]);

        return redirect('/suppliers')
            ->with('success', 'Supplier updated successfully.');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return redirect('/suppliers')
            ->with('success', 'Supplier deleted successfully.');
    }
}