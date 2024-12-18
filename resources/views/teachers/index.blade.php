@extends('layout')
@section('content')

<div class="items-center justify-center bg-gray-100 min-h-screen">
    <!-- Table Section -->
    <div class="w-full max-w-6xl bg-white p-6 rounded-lg shadow-lg overflow-x-auto">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Teachers AppleAction</h1>
        <a href="{{ route('teachers.create') }}" class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Add A Teacher
        </a>
        <table class="min-w-full mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">#</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Name</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Address</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Mobile</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr class="border-t">
                        <td class="py-2 px-4 text-gray-700">{{$teacher->id}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$teacher->name}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$teacher->address}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$teacher->mobile}}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('teachers.show', $teacher->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                View
                            </a>

                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                                Edit
                            </a>

                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

