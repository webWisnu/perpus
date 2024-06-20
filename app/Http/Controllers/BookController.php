<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Middleware\User;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()

    {
        $book = book::all();
        $categories = Category::all();
        return view('books', ['books' => $book, 'categories' => $categories]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('book-add', ['category' => $categories]);
    }

    public function edit($slug)
    {
        $book = book::where('slug' , $slug)->first();
        $categories = Category::all();
          return view('books-edit', ['books' => $book, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image',
        ]);

        // Ambil nomor urut terakhir dari database dan tambahkan 1
        $lastBook = book::orderBy('id', 'desc')->first();
        $nextNumber = $lastBook ? $lastBook->id + 1 : 1;

        // Generate kode_book otomatis
        $kodeBook = 'BOOK-' . $nextNumber . strtoupper(Str::random(2));

        // Mengambil ekstensi file dan membuat nama baru untuk file gambar jika ada
        $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        // Mengisi data buku dengan kode_book dan nama file gambar yang baru
        $bookData = $request->all();
        $bookData['kode_book'] = $kodeBook;
        $bookData['cover'] = $newName;

        // Membuat entitas buku baru di database
        $book = Book::create($bookData);
        $book->categories()->sync($request->categories);

        return redirect('books')->with('success', 'Book has been added successfully!');
    }
    public function update(Request $request, $slug)
    {

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }



        $book = book::where('slug', $slug)->first();
        $book->slug = null;
        $book->update($request->all());

        if ($request->categories) {
            $book->categories()->sync($request->categories);
        }
        return redirect('books')->with('status', 'Updated  Books success ');
    }

    public function delete($slug)
    {
        $book = book::where('slug', $slug)->first();
        return view('book-delete', ['books' => $book]);;
    }

    public function destroy($slug)
    {
        $book = book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'deleted  book success  ');
    }

    public function deleted()
    {
        $bookDelete = book::onlyTrashed()->get();
        return view('list-book-deleted', ['delete' =>   $bookDelete]);
    }
    public function restore($slug)
    {
        $book = book::withTrashed()->where('slug', $slug)->first();
        $book->restore();
        return redirect('books')->with('status', 'restored books successfully  ');
    }
}