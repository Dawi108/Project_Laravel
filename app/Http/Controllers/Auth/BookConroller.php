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
        return view('auth.books');
    }

    // Handle the form submission to store a new book
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'month' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'issn_isbn' => 'required|string|max:255',
            'no_of_pages' => 'required|integer|min:1',
        ]);

        // Create a new book record
        $book = Book::create($validated);

        // Redirect with a success message
        return redirect()->route('books.create')->with('success', 'Book created successfully!');
    }
}
