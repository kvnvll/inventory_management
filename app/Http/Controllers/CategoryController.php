<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

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

    return response()->json([
        'success' => true,
        'data' => $category
    ]);
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

        return redirect('/categories')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return redirect('/categories')
            ->with('success', 'Category deleted successfully.');
    }
}