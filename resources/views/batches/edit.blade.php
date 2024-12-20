@extends('layout')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <!-- Edit Form Card -->
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Batches</h1>

        <!-- Edit batches Form -->
        <form action="{{ route('batches.update', $batch->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $batch->name) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- course_id Input -->
            <div class="mb-4">
                <label for="course_id" class="block text-gray-700 font-semibold mb-2">Course Name</label>
                <input 
                    type="text" 
                    id="course_id" 
                    name="course_id" 
                    value="{{ old('course->name', $batch->course->name) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('course_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- start_date Input -->
            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 font-semibold mb-2">Start Date</label>
                <input 
                    type="text" 
                    id="start_date" 
                    name="start_date" 
                    value="{{ old('start_date', $batch->start_date) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('start_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
            <button type="submit" 
                        class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
                </button>

                <a href="{{ route('batches.index') }}" class="text-blue-500 hover:text-blue-700">
                    Back to List
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
