<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Events\StudentEvent;


class StudentController extends Controller
{
    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.student');
    }

    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'rollno' => ['required', 'string', 'max:255'],
            'Fname' => ['required', 'string'],
            'Mname' => ['required', 'string'],
            'Lname' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string', 'in:male,female,other'],
            'year' => ['required', 'numeric', 'digits:4'],
            'cast_category' => ['required', 'string', 'in:general,obc,sc,st'],
            'address' => ['required', 'string'],
            'email' => ['required', 'email'],
            'blood_group' => ['required', 'string', 'in:A+,A-,B+,B-,AB+,AB-,O+,O-'],
            'mobile_no' => ['required', 'numeric'],
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'abc_id' => ['required', 'string', 'max:12']
        ]);

        // $student = Student::create($validateData);

        // Handle the file upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        } else {
            $path = null;
        }


        $student = Student::create([
            'rollno' => $request->rollno,
            'Fname' => $request->Fname,
            'Mname' => $request->Mname,
            'Lname' => $request->Lname,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'year' => $request->year,
            'cast_category' => $request->cast_category,
            'address' => $request->address,
            'email' => $request->email,
            'blood_group' => $request->blood_group,
            'mobile_no' => $request->mobile_no,
            'photo' => $path,
            'abc_id' => $request->abc_id,
        ]);

        // print_r($student);
        return(view('test',compact($student)));
        // new Student($student);


        // return redirect()->route('welcome'); 
    }
}
