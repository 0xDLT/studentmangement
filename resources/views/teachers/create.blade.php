@extends('layout')
@section('content')

<div class="flex items-center justify-center bg-gray-100 min-h-screen">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Teacher AppleAction</h1>
        
        <form method="POST" action="{{ route('teachers.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-semibold text-gray-700">Address</label>
                <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="mobile" class="block text-sm font-semibold text-gray-700">Mobile</label>
                <input type="text" id="mobile" name="mobile" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
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