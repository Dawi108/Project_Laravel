<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Create Faculty</h1>

        <form method="POST" action="{{ route('faculty.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-white font-bold mb-2">Name</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-white font-bold mb-2">Email</label>
                <input type="email" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="mb-4">
                <label for="mobile" class="block text-white font-bold mb-2">Mobile Number</label>
                <input type="tel" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="mobile" name="mobile" placeholder="Enter mobile number" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-white font-bold mb-2">Gender</label>
                <select class="form-select border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="gender" name="gender" required>
                    <option value="" disabled selected>-Select gender-</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="teaching_experience" class="block text-white font-bold mb-2">Teaching Experience (in years)</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="teaching_experience" name="teaching_experience" placeholder="Enter teaching experience" required>
            </div>
            <div class="mb-4">
                <label for="designation" class="block text-white font-bold mb-2">Designation</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="designation" name="designation" placeholder="Enter designation" required>
            </div>
            <div class="mb-4">
                <label for="specialization" class="block text-white font-bold mb-2">Specialization</label>
                <input type="text" class="form-input border border-gray-600 rounded w-full py-2 px-3 bg-gray-700 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500" id="specialization" name="specialization" placeholder="Enter specialization" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</x-guest-layout>
