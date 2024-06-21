<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Question paper pannel</h1>

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

        <form action="{{ route('fquestion.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="question_paper" class="block text-gray-800 font-bold mb-2">Question Paper</label>
                <textarea class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="question_paper" name="question_paper" placeholder="Enter question paper details" required></textarea>
            </div>

            <div class="mb-4">
                <label for="term" class="block text-gray-800 font-bold mb-2">Select Term</label>
                <select id="term" name="term" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-800 focus:outline-none focus:border-blue-500" required>
                    <option value="mid_term">Mid Term</option>
                    <option value="end_term">End Term</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="file_content" class="block text-white font-bold mb-2">Upload File (PDF, JPG, PNG)</label>
                <input type="file" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:border-blue-500" id="file_content" name="file_content" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</x-guest-layout>
