<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'percentage' => 'required|numeric|min:0|max:100',
            'school_name' => 'required|string|max:255',
            'university_name' => 'required|string|max:255',
            'rollno' => 'required|string|max:255',
            'certificate_no' => 'required|string|max:255',
        ]);

        Education::create([
            'degree' => $request->degree,
            'percentage' => $request->percentage,
            'school_name' => $request->school_name,
            'university_name' => $request->university_name,
            'rollno' => $request->rollno,
            'certificate_no' => $request->certificate_no,
        ]);

        return redirect()->route('education.store')->with('success', 'Education details submitted successfully.');
    }
}
