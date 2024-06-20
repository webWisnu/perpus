<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
class HomeController extends Controller
{
    public function home()
    {
    	 $book = book::all();
      return view('home', ['books' => $book]);
    }
}