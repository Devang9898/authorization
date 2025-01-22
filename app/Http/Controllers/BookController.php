<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
    // Eager load author and publisher relationships
    $books = Book::with(['author', 'publisher'])->get();
   
    $booksArray = $books->map(function ($book) {
        return [
            'title' => $book->title,
            'author' => $book->author->name,
            'publisher' => $book->publisher->name,
        ];
    });
   
    return response()->json($booksArray);
    }
}
