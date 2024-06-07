<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Add Education Details</h1>

        <form method="POST" action="{{ route('education.store') }}">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Degree --}}
                <div>
                    <x-input-label for="degree" :value="__('Degree')" />
                    <x-text-input id="degree" class="block mt-1 w-full" type="text" name="degree" :value="old('degree')" required autofocus autocomplete="degree" />
                    <x-input-error :messages="$errors->get('degree')" class="mt-2" />
                </div>

                {{-- Percentage --}}
                <div>
                    <x-input-label for="percentage" :value="__('Percentage')" />
                    <x-text-input id="percentage" class="block mt-1 w-full" type="number" name="percentage" :value="old('percentage')" required autofocus autocomplete="percentage" step="0.01" max="100" />
                    <x-input-error :messages="$errors->get('percentage')" class="mt-2" />
                </div>

                {{-- School/Board/University Name --}}
                <div>
                    <x-input-label for="school_name" :value="__('School/Board/University Name')" />
                    <x-text-input id="school_name" class="block mt-1 w-full" type="text" name="school_name" :value="old('school_name')" required autofocus autocomplete="school-name" />
                    <x-input-error :messages="$errors->get('school_name')" class="mt-2" />
                </div>

                {{-- University Name --}}
                <div>
                    <x-input-label for="university_name" :value="__('University Name')" />
                    <x-text-input id="university_name" class="block mt-1 w-full" type="text" name="university_name" :value="old('university_name')" required autofocus autocomplete="university-name" />
                    <x-input-error :messages="$errors->get('university_name')" class="mt-2" />
                </div>

                {{-- Roll No --}}
                <div>
                    <x-input-label for="rollno" :value="__('Roll No')" />
                    <x-text-input id="rollno" class="block mt-1 w-full" type="text" name="rollno" :value="old('rollno')" required autofocus autocomplete="rollno" />
                    <x-input-error :messages="$errors->get('rollno')" class="mt-2" />
                </div>

                {{-- Certificate No --}}
                <div>
                    <x-input-label for="certificate_no" :value="__('Certificate No')" />
                    <x-text-input id="certificate_no" class="block mt-1 w-full" type="text" name="certificate_no" :value="old('certificate_no')" required autofocus autocomplete="certificate-no" />
                    <x-input-error :messages="$errors->get('certificate_no')" class="mt-2" />
                </div>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
