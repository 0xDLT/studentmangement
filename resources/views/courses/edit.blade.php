@extends('layout')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <!-- Edit Form Card -->
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Courses</h1>

        <!-- Edit courses Form -->
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input 
                    type="text" 
                    id="name"
                    name="name" 
                    value="{{ old('name', $course->name) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- syllabus Input -->
            <div class="mb-4">
                <label for="syllabus" class="block text-gray-700 font-semibold mb-2">syllabus</label>
                <input 
                    type="text" 
                    id="syllabus" 
                    name="syllabus" 
                    value="{{ old('syllabus', $course->syllabus) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('syllabus')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- duration Input -->
            <div class="mb-4">
                <label for="duration" class="block text-gray-700 font-semibold mb-2">duration</label>
                <input 
                    type="text" 
                    id="duration" 
                    name="duration" 
                    value="{{ old('duration', $course->duration) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('duration')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
            <button type="submit" 
                        class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
                </button>

                <a href="{{ route('courses.index') }}" class="text-blue-500 hover:text-blue-700">
                    Back to List
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
