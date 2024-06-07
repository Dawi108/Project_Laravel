<x-guest-layout>
    <div class="container mx-auto mt-10 p-5 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-white mb-5">Create Student Profile</h1>
    <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
        @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- RollNo --}}
        <div>
            <x-input-label for="rollno" :value="__('Roll No')" />
            <x-text-input id="rollno" class="block mt-1 w-full" type="text" name="rollno" :value="old('rollno')" required autofocus autocomplete="rollno" />
            <x-input-error :messages="$errors->get('rollno')" class="mt-2" />
        </div>

        {{-- Fname --}}
        <div>
            <x-input-label for="Fname" :value="__('First Name')" />
            <x-text-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="old('Fname')" required autofocus autocomplete="Fname" />
            <x-input-error :messages="$errors->get('Fname')" class="mt-2" />
        </div>

        {{-- Mname --}}
        <div>
            <x-input-label for="Mname" :value="__('Middle Name')" />
            <x-text-input id="Mname" class="block mt-1 w-full" type="text" name="Mname" :value="old('Mname')" required autofocus autocomplete="Mname" />
            <x-input-error :messages="$errors->get('Mname')" class="mt-2" />
        </div>

        {{-- Lname --}}
        <div>
            <x-input-label for="Lname" :value="__('Last Name')" />
            <x-text-input id="Lname" class="block mt-1 w-full" type="text" name="Lname" :value="old('Lname')" required autofocus autocomplete="Lname" />
            <x-input-error :messages="$errors->get('Lname')" class="mt-2" />
        </div>

        {{-- DOB --}}
        <div>
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <div class="flex space-x-2"> <!-- Flex container to hold multiple input fields -->
                <x-input id="day" class="block mt-1 w-full" type="number" min="1" max="31" name="day" :value="old('day')" required autofocus />
                <x-input id="month" class="block mt-1 w-full" type="number" min="1" max="12" name="month" :value="old('month')" required />
                <x-input id="year" class="block mt-1 w-full" type="number" min="1950" max="{{ date('Y') }}" name="year" :value="old('year')" required />
            </div>
            <x-input-error :messages="$errors->get('day')" class="mt-2" />
            <x-input-error :messages="$errors->get('month')" class="mt-2" />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>
        
        

        {{-- gender --}}
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="block mt-1 w-full" required>
                <option value="">Select Gender</option>
                <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
                <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
                <option value="other" @if(old('gender') == 'other') selected @endif>Other</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        
        {{-- admission year --}}
        <div>
            <x-input-label for="year" :value="__('Admission Year')" />
            <select id="year" name="year" class="block mt-1 w-full" required>
                <option value="">Select Year</option>
                @php
                    $currentYear = date('Y');
                    $startYear = 2020; // Or any other start year you prefer
                @endphp
                @for ($i = $currentYear; $i >= $startYear; $i--)
                    <option value="{{ $i }}" @if(old('year') == $i) selected @endif>{{ $i }}</option>
                @endfor
            </select>
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>
        
        {{-- category --}}
        <div>
            <x-input-label for="cast_category" :value="__('Select Cast Category')" />
            <select id="cast_category" name="cast_category" class="block mt-1 w-full" required>
                <option value="">Select Cast Category</option>
                <!-- Replace the following options with your actual cast categories -->
                <option value="general" @if(old('cast_category') == 'general') selected @endif>General</option>
                <option value="obc" @if(old('cast_category') == 'obc') selected @endif>OBC</option>
                <option value="sc" @if(old('cast_category') == 'sc') selected @endif>SC</option>
                <option value="st" @if(old('cast_category') == 'st') selected @endif>ST</option>
            </select>
            <x-input-error :messages="$errors->get('cast_category')" class="mt-2" />
        </div>
        

        {{-- Address --}}
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <textarea id="address" name="address" class="block mt-1 w-full" rows="4" required autofocus>{{ old('address') }}</textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>        
        
        {{-- Email --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
     
        {{-- Blood Group --}}
        <div>
            <x-input-label for="blood_group" :value="__('Blood Group')" />
            <select id="blood_group" name="blood_group" class="block mt-1 w-full" required autofocus>
                <option value="">Select Blood Group</option>
                <option value="A+" @if(old('blood_group') == 'A+') selected @endif>A+</option>
                <option value="A-" @if(old('blood_group') == 'A-') selected @endif>A-</option>
                <option value="B+" @if(old('blood_group') == 'B+') selected @endif>B+</option>
                <option value="B-" @if(old('blood_group') == 'B-') selected @endif>B-</option>
                <option value="AB+" @if(old('blood_group') == 'AB+') selected @endif>AB+</option>
                <option value="AB-" @if(old('blood_group') == 'AB-') selected @endif>AB-</option>
                <option value="O+" @if(old('blood_group') == 'O+') selected @endif>O+</option>
                <option value="O-" @if(old('blood_group') == 'O-') selected @endif>O-</option>
            </select>
            <x-input-error :messages="$errors->get('blood_group')" class="mt-2" />
        </div>
        

        {{-- Mobile --}}
        <div>
            <x-input-label for="mobile_no" :value="__('Mobile No')" />
            <x-text-input id="mobile_no" class="block mt-1 w-full" type="tel" name="mobile_no" :value="old('mobile_no')" required autofocus autocomplete="tel" maxlength="10" pattern="[0-9]{1,10}" />
            <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
        </div>
        
        {{-- Photo --}}
        <div class="mb-4">
            <x-input-label for="photo" :value="__('Photo')" />
            <input id="photo" type="file" class="block mt-1 w-full" name="photo" accept="image/jpeg, image/png, image/jpg" required autofocus />
            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
        </div>
        

        {{-- ABC ID --}}
        <div>
            <x-input-label for="abc_id" :value="__('ABC ID')" />
            <x-text-input id="abc_id" class="block mt-1 w-full" type="text" name="abc_id" :value="old('abc_id')" required autofocus autocomplete="abc-id" maxlength="12" pattern="[0-9]{1,12}" />
            <x-input-error :messages="$errors->get('abc_id')" class="mt-2" />
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </div>   
    </form>
    </div>
</x-guest-layout>