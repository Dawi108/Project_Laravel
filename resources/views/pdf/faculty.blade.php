@extends('layouts.pdf')

@section('title', 'Faculty Details')

@section('content')
<div>
    <h1 class="text-3xl font-bold text-gray-800 mb-5">Faculty Details</h1>

    <table class="table-auto w-full border border-black">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-black">Name</th>
                <th class="px-4 py-2 border border-black">Email</th>
                <th class="px-4 py-2 border border-black">Mobile</th>
                <th class="px-4 py-2 border border-black">Gender</th>
                <th class="px-4 py-2 border border-black">Teaching Experience</th>
                <th class="px-4 py-2 border border-black">Designation</th>
                <th class="px-4 py-2 border border-black">Specialization</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $faculty)
            <tr>
                <td class="border px-4 py-2 border-black">{{ $faculty->name }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->email }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->mobile }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->gender }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->teaching_experience }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->designation }}</td>
                <td class="border px-4 py-2 border-black">{{ $faculty->specialization }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection