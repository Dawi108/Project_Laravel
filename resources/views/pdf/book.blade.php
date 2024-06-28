@extends('layouts.pdf')

@section('title', 'Book Details')

@section('content')
<div>
    <h1 class="text-3xl font-bold text-gray-800 mb-5">Book Details</h1>

    <table class="table-auto w-full border border-black">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-black">Title</th>
                <th class="px-4 py-2 border border-black">Publisher</th>
                <th class="px-4 py-2 border border-black">Month</th>
                <th class="px-4 py-2 border border-black">Year</th>
                <th class="px-4 py-2 border border-black">ISSN/ISBN</th>
                <th class="px-4 py-2 border border-black">No of Pages</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td class="border px-4 py-2 border-black">{{ $book->title }}</td>
                <td class="border px-4 py-2 border-black">{{ $book->publisher }}</td>
                <td class="border px-4 py-2 border-black">{{ $book->month }}</td>
                <td class="border px-4 py-2 border-black">{{ $book->year }}</td>
                <td class="border px-4 py-2 border-black">{{ $book->issn_isbn }}</td>
                <td class="border px-4 py-2 border-black">{{ $book->no_of_pages }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection