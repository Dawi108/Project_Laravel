<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Create Book</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-white font-bold mb-2">Title</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="mb-4">
                <label for="publisher" class="block text-white font-bold mb-2">Publisher</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="publisher" name="publisher" placeholder="Enter publisher" required>
            </div>
            <div class="mb-4">
                <label for="month" class="block text-white font-bold mb-2">Month</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="month" name="month" placeholder="Enter month" required>
            </div>
            <div class="mb-4">
                <label for="year" class="block text-white font-bold mb-2">Year</label>
                <input type="number" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="year" name="year" placeholder="Enter year" required>
            </div>
            <div class="mb-4">
                <label for="issn_isbn" class="block text-white font-bold mb-2">ISSN/ISBN</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="issn_isbn" name="issn_isbn" placeholder="Enter ISSN/ISBN" required>
            </div>
            <div class="mb-4">
                <label for="no_of_pages" class="block text-white font-bold mb-2">No of Pages</label>
                <input type="number" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="no_of_pages" name="no_of_pages" placeholder="Enter number of pages" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</x-guest-layout>
