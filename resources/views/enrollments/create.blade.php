@extends('layout')
@section('content')

<div class="flex items-center justify-center bg-gray-100 min-h-screen">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Enrollments AppleAction</h1>
        
        <form method="POST" action="{{ route('enrollments.store') }}">
            @csrf
            <div class="mb-4">
                <label for="enroll_no" class="block text-sm font-semibold text-gray-700">Enroll No</label>
                <input type="text" id="enroll_no" name="enroll_no" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="batch_id" class="block text-sm font-semibold text-gray-700">Batch</label>
                <input type="text" id="batch_id" name="batch_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="student_id" class="block text-sm font-semibold text-gray-700">Student</label>
                <input type="text" id="student_id" name="student_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="join_date" class="block text-sm font-semibold text-gray-700">Join Date</label>
                <input type="text" id="join_date" name="join_date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="fee" class="block text-sm font-semibold text-gray-700">Fee</label>
                <input type="text" id="fee" name="fee" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6 flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection