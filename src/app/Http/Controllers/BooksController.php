<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {       
        return view('public.books', [
            'books' => Book::paginate(6),
        ]);
    }

    public function show(Teacher $teacher) {
        return view('public.books', [
            'books' => $teacher->books()->paginate(6)
        ]);
    }

    public function book(Book $book) {
        return view('public.book', [
            'book' => $book
        ]);
    }
}
