@extends('layouts.pdf')

@section('title', 'Student and Education Details')

@section('content')
<div>
    <h1 class="text-3xl font-bold text-gray-800 mb-5">Student and Education Details</h1>

    <table class="table-auto w-full border border-black">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-black">Roll No</th>
                <th class="px-4 py-2 border border-black">First Name</th>
                <th class="px-4 py-2 border border-black">Last Name</th>
                <th class="px-4 py-2 border border-black">Gender</th>
                <th class="px-4 py-2 border border-black">Education</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td class="border px-4 py-2 border-black">{{ $student->rollno }}</td>
                <td class="border px-4 py-2 border-black">{{ $student->Fname }}</td>
                <td class="border px-4 py-2 border-black">{{ $student->Lname }}</td>
                <td class="border px-4 py-2 border-black">{{ $student->gender }}</td>
                <td class="border px-4 py-2 border-black">
                    <ul>
                        @foreach ($student->educations as $education)
                        <li>{{ $education->degree }} - {{ $education->percentage }}%</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection