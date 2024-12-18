<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
        <nav
        class="relative flex w-full flex-wrap items-center justify-between bg-slate-700 py-2 shadow-dark-mild  lg:py-4">
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <span class="ms-2 text-xl text-white ">Student Mangement</span>
                <div class="ms-5 flex w-[30%] items-center justify-between">
                <input
                    type="search"
                    class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-white focus:shadow-inset focus:outline-none motion-reduce:transition-none "
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="button-addon2" />

                <span
                    class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-white  [&>svg]:w-5"
                    id="basic-addon2">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
                </div>
            </div>
        </nav>
    <div class="flex">
    <!-- The sidebar -->
    <div class="w-64 bg-gray-800 text-white h-screen p-4">
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="{{ url('/') }}">Home</a>
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="{{ url('/students') }}">Students</a>
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="{{ url('/teachers') }}">Teacher</a>
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="#contact">Courses</a>
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="#about">Enrollment</a>
        <a class="block py-2 px-4 rounded bg-gray-700 mb-2 text-white hover:bg-gray-600" href="#about">Payment</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
    </div>



</body>
</html>