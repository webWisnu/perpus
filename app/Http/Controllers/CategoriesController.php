<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', ['title' => 'halaman category', 'category' => $categories]);
    }

    public function tambah()
    {
        return view('tambah-category');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',

        ]);
        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Add success category');
    }

    public function edit($slug)
    {
        $categories = Category::where('slug', $slug)->first();

        return view('categories-edit', ['category' => $categories]);
    }

    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',

        ]);
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'Updated  category success ');
    }

    public function delete($slug)
    {


        $category = Category::where('slug', $slug)->first();
        return view('category-delete', ['categories' => $category]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('status', 'deleted  category success  ');
    }

    public function deletedCategory()
    {
        $categoryDelete = Category::onlyTrashed()->get();
        return view('list-category-deleted', ['delete' =>   $categoryDelete]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('status', 'restored category successfully  ');
    }
}