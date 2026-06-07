<?php
 
namespace App\Http\Controllers;
 
use App\Models\StockMovement;
use Illuminate\Http\Request;
 
class StockMovementController extends Controller
{
    public function index(Request $request)
    {
        $stockMovements = StockMovement::all();
 
        if ($request->expectsJson()) {
            return response()->json($stockMovements);
        }
 
        return response()->json($stockMovements);
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
 
        $stockMovement = StockMovement::create($request->all());
 
        if ($request->expectsJson()) {
            return response()->json($stockMovement, 201);
        }
 
        return response()->json($stockMovement, 201);
    }
 
    public function show(Request $request, StockMovement $stockMovement)
    {
        if ($request->expectsJson()) {
            return response()->json($stockMovement);
        }
 
        return response()->json($stockMovement);
    }
 
    public function edit(StockMovement $stockMovement)
    {
        //
    }
 
    public function update(Request $request, StockMovement $stockMovement)
    {
        $stockMovement->update($request->all());
 
        if ($request->expectsJson()) {
            return response()->json($stockMovement);
        }
 
        return response()->json($stockMovement);
    }
 
    public function destroy(Request $request, StockMovement $stockMovement)
    {
        $stockMovement->delete();
 
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Stock movement deleted successfully.']);
        }
 
        return response()->json(['message' => 'Stock movement deleted successfully.']);
    }
}