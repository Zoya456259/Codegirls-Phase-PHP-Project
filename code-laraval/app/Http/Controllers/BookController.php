<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'author' => 'required|string|max:255',
        ]);

        Book::create([
            'title' => $request->title,
            'price' => $request->price,
            'author' => $request->author,
        ]);

        return redirect('/books')->with('success', 'Book added successfully!');
    }
}

