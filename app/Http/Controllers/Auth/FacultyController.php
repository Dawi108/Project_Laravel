<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class FacultyController extends Controller
{
    //
    public function create()
    {
        return view('auth.faculty');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@hpcu\.ac\.in$/|unique:faculty,email',
            'number' => 'required|string|regex:/^\d{10}$/',
            'gender' => 'required|in:male,female,others',
            'teaching_experience' => 'required|integer|min:0',
            'designation' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
        ]);

        Faculty::create($request->all());

        return redirect()->route('faculty.create')->with('success', 'Faculty information saved successfully.');
    }
}
