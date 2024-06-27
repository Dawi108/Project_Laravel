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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%+-]+@hpcu\.ac\.in$/'],
            'mobile' => ['required', 'string', 'regex:/^\d{10}$/'],
            'gender' => ['required', 'in:male,female,others'],
            'teaching_experience' => ['required', 'integer', 'min:0'],
            'designation' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
        ]);

        $faculty = new Faculty();
        $faculty->name = $request->name;
        $faculty->email = $request->email;
        $faculty->mobile = $request->mobile;
        $faculty->gender = $request->gender;
        $faculty->teaching_experience = $request->teaching_experience;
        $faculty->designation = $request->designation;
        $faculty->specialization = $request->specialization;
        $faculty->save();

        return redirect()->route('fquestion');
    }
    public function index()
    {
        $students = Student::all();
        return view('faculty.index', compact('students'));
    }
}
