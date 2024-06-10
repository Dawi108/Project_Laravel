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
            // 'dob' => ['required', 'day', 'month', 'year'],
            'year' => ['required', 'numeric', 'min:1950', 'max:' . date('Y')],
            'month' => ['required', 'numeric', 'min:1', 'max:12'],
            'day' => ['required', 'numeric', 'min:1', 'max:31'],
            'gender' => ['required', 'string', 'in:male,female,other'],
            'admission_year' => ['required', 'numeric', 'min:2020'],
            'cast_category' => ['required', 'string', 'in:general,obc,sc,st'],
            'address' => ['required', 'string'],
            'email' => ['required', 'email'],
            'blood_group' => ['required', 'string', 'in:A+,A-,B+,B-,AB+,AB-,O+,O-'],
            'mobile_no' => ['required', 'numeric'],
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'abc_id' => ['required', 'string', 'max:12']
        ]);

        $dob = sprintf('%04d-%02d-%02d', $request->year, $request->month, $request->day);


        // $student = Student::create($validateData);

        // Handle the file upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        } else {
            $path = null;
        }


        $student = new Student();
        $student->rollno = $request->rollno;
        $student->Fname = $request->Fname;
        $student->Mname = $request->Mname;
        $student->Lname = $request->Lname;
        $student->dob = $dob;        
        $student->gender = $request->gender;
        $student->admission_year = $request->admission_year;
        $student->cast_category = $request->cast_category;
        $student->address = $request->address;
        $student->email = $request->email;
        $student->blood_group = $request->blood_group;
        $student->mobile_no = $request->mobile_no;
        $student->photo = $path;
        $student->abc_id = $request->abc_id;
        $student->save();

        // print_r($student);
        // return(view('test',compact($student)));
        // new Student($student);


        return redirect()->route('education'); 
    }
}
