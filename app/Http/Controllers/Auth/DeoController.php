<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator; // Assuming you have an Administrator model
use Illuminate\Support\Facades\Storage;

class DeoController extends Controller
{
    // Display the form to create a new entry
    public function create()
    {
        return view('deo.create');
    }

    // Handle the form submission to store a new entry
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'file_content' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'],
        ]);

        // Store the file and get its path
        $path = $request->file('file_content')->store('notices');

        // Create a new Administrator entry
        $administrator = new Administrator();
        $administrator->file_path = $path;
        $administrator->save();

        return redirect()->route('deo.create')->with('success', 'File uploaded successfully.');
    }
}
