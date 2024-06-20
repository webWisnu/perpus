<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\Category;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        if ($request->category) {

            $book = book::whereHas('categories', function ($e) use ($request) {
                $e->where('categories.id', $request->category);
            })->get();
        } else {
            $book = book::all();
        }

        return view('book-list', ['books' => $book, 'categories' => $categories]);
    }
}