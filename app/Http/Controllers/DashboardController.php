<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $book = book::count();
        $category = Category::count();
        $user = User::count();
        return view('dashboard', [
            'title' => 'Halaman Books',
            'book_count' => $book,
            'category_count' => $category,
            'user_count' => $user
        ]);
    }
}