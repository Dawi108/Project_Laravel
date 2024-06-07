<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Events\StudentEvent;

class PublicationController extends Controller
{
    public function create(): view
    {
        return view('auth.publications');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'level' => 'required|string',
            'indexing' => 'nullable|string',
            'doi' => 'nullable|string',
            'publisher' => 'required|string|max:255',
            'month' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        Publication::create($request->all());

        return redirect()->route('publications.create')->with('success', 'Publication created successfully.');
    }
}
