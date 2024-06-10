<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; // Assuming you have a Book model
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class BookController extends Controller
{
    
    // Display the form to create a new book
    public function create(): view
    {
        return view('auth.book');
    }

    // Handle the form submission to store a new book
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'month' => ['required', 'string', 'max:255'],
            'year' => ['required', 'integer'],
            'issn_isbn' => ['required', 'string', 'max:255'],
            'no_of_pages' => ['required', 'integer'], 
        ]);
        
        $book = new Book();
        $book->title = $request->title;
        $book->publisher = $request->publisher;
        $book->month = $request->month;
        $book->year = $request->year;
        $book->issn_isbn = $request->issn_isbn;
        $book->no_of_pages = $request->no_of_pages;
        $book->save();


        return redirect()->route('welcome');
    }
}
