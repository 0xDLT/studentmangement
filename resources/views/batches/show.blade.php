@extends('layout')
@section('content')

<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">

        <!-- Card container for displaying details -->
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Sourse Details</h1>

            <div class="space-y-4">
                @if ($batch)
                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Name:</h2>
                        <p class="text-lg text-gray-600">{{ $batch->name }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Course Name:</h2>
                        <p class="text-lg text-gray-600">{{ $batch->course->name}}</p>
                    </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-medium text-gray-700">Start Date:</h2>
                        <p class="text-lg text-gray-600">{{ $batch->start_date }}</p>
                    </div>
                @else
                    <p class="text-lg text-red-600">batch not found.</p>
                @endif

                <div class="mt-6">
                <a href="/batches" class="bg-blue-500 text-white px-6 py-2 rounded-md mt-6 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Back to List
                </a>
                </div>
            </div>

    </div>


</body>

@endsection
