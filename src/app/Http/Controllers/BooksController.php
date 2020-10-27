<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Book;
use App\Models\Subject;

class BooksController extends Controller
{
    public function index()
    {       
        return view('public.books', [
            'books' => Book::paginate(6),
        ]);
    }

    public function showByTeacher(Teacher $teacher) {
        return view('public.books', [
            'books' => $teacher->books()->paginate(6)
        ]);
    }

    public function showBySubject(Subject $subject) {
        return view('public.books', [
            'books' => $subject->books()->paginate(6)
        ]);
    }

    public function book(Book $book) {
        return view('public.books-single', [
            'book' => $book
        ]);
    }
}