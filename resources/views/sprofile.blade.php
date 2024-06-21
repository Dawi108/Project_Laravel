<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>
    <h1>Student Profile</h1>

    <h2>Personal Information</h2>
    <p><strong>Roll Number:</strong> {{ $student->rollno }}</p>
    <p><strong>First Name:</strong> {{ $student->Fname }}</p>
    <p><strong>Middle Name:</strong> {{ $student->Mname }}</p>
    <p><strong>Last Name:</strong> {{ $student->Lname }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
    <p><strong>Gender:</strong> {{ $student->gender }}</p>
    <p><strong>Admission Year:</strong> {{ $student->admission_year }}</p>
    <p><strong>Cast Category:</strong> {{ $student->cast_category }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Blood Group:</strong> {{ $student->blood_group }}</p>
    <p><strong>Mobile Number:</strong> {{ $student->mobile_no }}</p>
    <p><strong>ABC ID:</strong> {{ $student->abc_id }}</p>
    @if ($student->photo)
        <p><strong>Photo:</strong> <img src="{{ asset('storage/' . $student->photo) }}" alt="Student Photo" width="150"></p>
    @endif

    <h2>Education</h2>
    @if($education->isEmpty())
        <p>No education data available.</p>
    @else
        <ul>
            @foreach ($education as $edu)
                <li>
                    <strong>Degree:</strong> {{ $edu->degree }}<br>
                    <strong>Percentage:</strong> {{ $edu->percentage }}%<br>
                    <strong>School Name:</strong> {{ $edu->school_name }}<br>
                    <strong>University Name:</strong> {{ $edu->university_name }}<br>
                    <strong>Certificate Number:</strong> {{ $edu->certificate_no }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
