@extends('layout')
@section('content')

<div class="items-center justify-center bg-gray-100 min-h-screen">
    <!-- Table Section -->
    <div class="w-full max-w-6xl bg-white p-6 rounded-lg shadow-lg overflow-x-auto">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Enrollments AppleAction</h1>
        <a href="{{ route('enrollments.create') }}" class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Add A Enrollment
        </a>
        <table class="min-w-full mt-6">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">#</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">enroll No</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Batch</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Student</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Join Date</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Fee</th>
                    <th class="py-2 px-4 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollments as $enrollment)
                    <tr class="border-t">
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->id}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->enroll_no}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->batch->name}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->student->name}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->join_date}}</td>
                        <td class="py-2 px-4 text-gray-700">{{$enrollment->fee}}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('enrollments.show', $enrollment->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                View
                            </a>

                            <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                                Edit
                            </a>

                            <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" class="inline-block">
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

