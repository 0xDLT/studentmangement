@extends('layout')
@section('content')

<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">

        <!-- Card container for displaying details -->
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Student Details</h1>

            <div class="space-y-4">
                @if ($student)
                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Name:</h2>
                        <p class="text-lg text-gray-600">{{ $student->name }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Address:</h2>
                        <p class="text-lg text-gray-600">{{ $student->address }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Mobile:</h2>
                        <p class="text-lg text-gray-600">{{ $student->mobile }}</p>
                    </div>
                @else
                    <p class="text-lg text-red-600">Student not found.</p>
                @endif
            </div>

            <div class="mt-6">
                <a href="/students" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Back to List
                </a>
            </div>

        </div>
    </div>

</body>

@endsection
