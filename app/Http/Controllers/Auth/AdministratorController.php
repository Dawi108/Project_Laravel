<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Administrator; 
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;



class AdministratorController extends Controller
{
    // Display the form to create a new program and courses
    public function create()
    {
        return view('administrator.create');
    }

    // Handle the form submission to store a new program and courses
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'program' => ['required', 'string', 'max:255'],
            'courses' => ['required', 'string', 'max:255'],
        ]);

        $program = new Program();
        $program->name = $request->program;
        $program->courses = $request->courses;
        $program->save();

        return redirect()->route('administrator.create')->with('success', 'Program and courses added successfully.');
    }


}
