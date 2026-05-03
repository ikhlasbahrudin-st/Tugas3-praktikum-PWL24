<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::with('bookshelf')->get();
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book);
    }

    public function show($id)
    {
        return Book::with('bookshelf')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return $book;
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json(['message' => 'deleted']);
    }
}