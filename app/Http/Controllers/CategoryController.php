<?php
 
namespace App\Http\Controllers;
 
use App\Models\Category;
use Illuminate\Http\Request;
 
class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::latest()->get();
 
        if ($request->expectsJson()) {
            return response()->json($categories);
        }
 
        return view('categories.index', compact('categories'));
    }
 
    public function create()
    {
        return view('categories.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
 
        $category = Category::create([
            'name' => $request->name
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($category, 201);
        }
 
        return redirect('/categories')
            ->with('success', 'Category added successfully.');
    }
 
    public function show(Request $request, $id)
    {
        $category = Category::findOrFail($id);
 
        if ($request->expectsJson()) {
            return response()->json($category);
        }
 
        return view('categories.show', compact('category'));
    }
 
    public function edit($id)
    {
        $category = Category::findOrFail($id);
 
        return view('categories.edit', compact('category'));
    }
 
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
 
        $category = Category::findOrFail($id);
 
        $category->update([
            'name' => $request->name
        ]);
 
        if ($request->expectsJson()) {
            return response()->json($category);
        }
 
        return redirect('/categories')
            ->with('success', 'Category updated successfully.');
    }
 
    public function destroy(Request $request, $id)
    {
        Category::destroy($id);
 
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Category deleted successfully.']);
        }
 
        return redirect('/categories')
            ->with('success', 'Category deleted successfully.');
    }
}