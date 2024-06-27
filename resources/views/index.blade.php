
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Students</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Admission Year</th>
                <th>Category</th>
                <th>Address</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Mobile No</th>
                <th>Photo</th>
                <th>ABC ID</th>
                <th>Education Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->rollno }}</td>
                <td>{{ $student->Fname }}</td>
                <td>{{ $student->Mname }}</td>
                <td>{{ $student->Lname }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->admission_year }}</td>
                <td>{{ $student->cast_category }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->blood_group }}</td>
                <td>{{ $student->mobile_no }}</td>
                <td>
                    @if($student->photo)
                        <img src="{{ Storage::url($student->photo) }}" alt="Student Photo" style="width: 50px;">
                    @endif
                </td>
                <td>{{ $student->abc_id }}</td>
                <td>
                    @if ($student->educations->isEmpty())
                        <p>No education data available.</p>
                    @else
                        <ul>
                            @foreach ($student->educations as $education)
                                <li>
                                    <strong>Degree:</strong> {{ $education->degree }}<br>
                                    <strong>Percentage:</strong> {{ $education->percentage }}%<br>
                                    <strong>School Name:</strong> {{ $education->school_name }}<br>
                                    <strong>University Name:</strong> {{ $education->university_name }}<br>
                                    <strong>Certificate Number:</strong> {{ $education->certificate_no }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </td>
                <td>
                    <form action="{{ route('students.approve', $student->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
