<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'success' => true,
            'data' => $books
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'year' => 'required|integer'
        ]);

        $book = Book::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $book
        ], 201);
    }

    public function show(Book $book)
    {
        return response()->json([
            'success' => true,
            'data' => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'year' => 'required|integer'
        ]);

        $book->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $book
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            'success' => true,
            'message' => 'Book deleted successfully'
        ]);
    }
}
