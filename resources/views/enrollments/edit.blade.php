@extends('layout')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <!-- Edit Form Card -->
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Enrollments</h1>

        <!-- Edit enrollments Form -->
        <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Enroll No Input -->
            <div class="mb-4">
                <label for="enroll_no" class="block text-gray-700 font-semibold mb-2">Enroll No</label>
                <input 
                    type="text" 
                    id="enroll_no" 
                    enroll_no="enroll_no" 
                    value="{{ old('enroll_no', $enrollment->enroll_no) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('enroll_no')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- batch Input -->
            <div class="mb-4">
                <label for="batch_id" class="block text-gray-700 font-semibold mb-2">Batch</label>
                <input 
                    type="text" 
                    id="batch_id" 
                    enroll_no="batch_id" 
                    value="{{ old('batch_id', $enrollment->batch_id) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('batch_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- student Input -->
            <div class="mb-4">
                <label for="student_id" class="block text-gray-700 font-semibold mb-2">Student</label>
                <input 
                    type="text" 
                    id="student_id" 
                    enroll_no="student_id" 
                    value="{{ old('student_id', $enrollment->student_id) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('student_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- join_date Input -->
            <div class="mb-4">
                <label for="join_date" class="block text-gray-700 font-semibold mb-2">Join Date</label>
                <input 
                    type="text" 
                    id="join_date" 
                    enroll_no="join_date" 
                    value="{{ old('join_date', $enrollment->join_date) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('join_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- fee Input -->
            <div class="mb-4">
                <label for="fee" class="block text-gray-700 font-semibold mb-2">Fee</label>
                <input 
                    type="text" 
                    id="fee" 
                    enroll_no="fee" 
                    value="{{ old('fee', $enrollment->fee) }}" 
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                @error('fee')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
            <button type="submit" 
                class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
            </button>

                <a href="{{ route('enrollments.index') }}" class="text-blue-500 hover:text-blue-700">
                    Back to List
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
