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
            'degree' => ['required', 'string', 'max:255'],
            'percentage' => ['required', 'numeric', 'min:0', 'max:100'],
            'school_name' => ['required', 'string', 'max:255'],
            'university_name' => ['required', 'string', 'max:255'],
            'rollno' => ['required', 'string', 'max:255'],
            'certificate_no' => ['required', 'string', 'max:255'],
        ]);
        

        $education = new Education();
        $education->degree = $request->degree;
        $education->percentage = $request->percentage;
        $education->school_name = $request->school_name;
        $education->university_name = $request->university_name;
        $education->rollno = $request->rollno;
        $education->certificate_no = $request->certificate_no;
        $education->save();

        return redirect()->route('sprofile.show', ['rollno' => $education->rollno]);
        // return redirect()->route('welcome');
    }
}
