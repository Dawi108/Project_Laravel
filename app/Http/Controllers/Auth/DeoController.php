<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deo; 
use Illuminate\Support\Facades\Storage;

class DeoController extends Controller
{
    // Display the form to create a new entry
    public function create()
    {
        return view('deo.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'file_content' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png'],
        ]);

        $path = $request->file('file_content')->store('notices');

        $deo = new Deo();
        $deo->file_path = $path;
        $deo->save();

        return redirect()->route('welcome');
    }
}
