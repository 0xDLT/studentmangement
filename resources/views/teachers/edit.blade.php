@extends('layout')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <!-- Edit Form Card -->
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Teacher</h1>

        <!-- Edit Student Form -->
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $teacher->name) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address Input -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                <input 
                    type="text" 
                    id="address" 
                    name="address" 
                    value="{{ old('address', $teacher->address) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('address')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Mobile Input -->
            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 font-semibold mb-2">Mobile</label>
                <input 
                    type="text" 
                    id="mobile" 
                    name="mobile" 
                    value="{{ old('mobile', $teacher->mobile) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('mobile')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
            <a href="{{ route('teachers.index') }}" 
            class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Save Changes
            </a>

                <a href="{{ route('teachers.index') }}" class="text-blue-500 hover:text-blue-700">
                    Back to List
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
