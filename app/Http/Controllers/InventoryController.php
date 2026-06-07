<?php
 
namespace App\Http\Controllers;
 
use App\Models\Inventory;
use Illuminate\Http\Request;
 
class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $inventories = Inventory::all();
 
        if ($request->expectsJson()) {
            return response()->json($inventories);
        }
 
        return response()->json($inventories);
    }
 
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity'   => 'required|numeric',
            'type'       => 'required',
        ]);
 
        $inventory = Inventory::create($request->all());
 
        if ($request->expectsJson()) {
            return response()->json($inventory, 201);
        }
 
        return response()->json($inventory, 201);
    }
 
    public function show(Request $request, Inventory $inventory)
    {
        if ($request->expectsJson()) {
            return response()->json($inventory);
        }
 
        return response()->json($inventory);
    }
 
    public function edit(Inventory $inventory)
    {
        //
    }
 
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->all());
 
        if ($request->expectsJson()) {
            return response()->json($inventory);
        }
 
        return response()->json($inventory);
    }
 
    public function destroy(Request $request, Inventory $inventory)
    {
        $inventory->delete();
 
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Inventory deleted successfully.']);
        }
 
        return response()->json(['message' => 'Inventory deleted successfully.']);
    }
}