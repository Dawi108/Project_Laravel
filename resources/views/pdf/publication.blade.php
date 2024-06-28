@extends('layouts.pdf')

@section('title', 'Publication Details')

@section('content')
<div>
    <h1 class="text-3xl font-bold text-gray-800 mb-5">Publication Details</h1>

    <table class="table-auto w-full border border-black">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-black">Title</th>
                <th class="px-4 py-2 border border-black">Type</th>
                <th class="px-4 py-2 border border-black">Level</th>
                <th class="px-4 py-2 border border-black">Indexing</th>
                <th class="px-4 py-2 border border-black">DOI</th>
                <th class="px-4 py-2 border border-black">Publisher</th>
                <th class="px-4 py-2 border border-black">Month</th>
                <th class="px-4 py-2 border border-black">Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
            <tr>
                <td class="border px-4 py-2 border-black">{{ $publication->title }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->type }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->level }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->indexing }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->doi }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->publisher }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->month }}</td>
                <td class="border px-4 py-2 border-black">{{ $publication->year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection