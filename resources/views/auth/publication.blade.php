<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Create Publication</h1>

        <form action="{{ route('publications.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-white font-bold mb-2">Title</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="mb-4">
                <label for="type" class="block text-white font-bold mb-2">Type</label>
                <select class="form-select border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="type" name="type" required>
                    <option value="" disabled selected>-Select-</option>
                    <option value="book chapter">Book Chapter</option>
                    <option value="conference">Conference</option>
                    <option value="journal">Journal</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="level" class="block text-white font-bold mb-2">Level</label>
                <select class="form-select border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="level" name="level" required>
                    <option value="" disabled selected>-Select-</option>
                    <option value="national">National</option>
                    <option value="international">International</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="indexing" class="block text-white font-bold mb-2">Indexing</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="indexing" name="indexing" placeholder="Enter indexing">
            </div>
            <div class="mb-4">
                <label for="doi" class="block text-white font-bold mb-2">DOI</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="doi" name="doi" placeholder="Enter DOI">
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
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</x-guest-layout>
