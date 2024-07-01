<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<div class="min-h-[70vh]">
    <div class="px-4 py-2 sticky top-0 shadow-lg w-full bg-white mx-auto md:px-24 lg:px-8 z-50">
        <div class="relative flex items-center justify-between">
            <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                <img src="{{ asset('atclogo.jpg') }}" alt="Company Logo" class="w-12 h-12">
            </a>

            <div>
                @if(auth()->user())
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-green-700 border border-green-700 justify-center w-full h-12 px-6 font-medium tracking-wide transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none" aria-label="Dashboard" title="Dashboard">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center text-green-700 border border-green-700 justify-center w-full h-12 px-6 font-medium tracking-wide transition duration-200 rounded shadow-md focus:shadow-outline focus:outline-none" aria-label="Login" title="Login">
                        Login
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
        <div class="grid gap-5 row-gap-8  items-center lg:grid-cols-2">
            <div class="flex flex-col justify-center">
                <div class="max-w-xl mb-6">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Arusha Technical<br class="hidden md:block" />
                        <span class="relative px-1">
            <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-teal-accent-400"></div>
                            <span class="relative  inline-block text-deep-purple-accent-400">  College <span class="text-green-700">Help </span> Desk</span>
          </span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Welcome to the Arusha Technical College Help Desk, your go-to resource for all the essential materials and information you need during your time at our esteemed institution.
                        Our goal is to support your academic journey and ensure you have access to everything you need to succeed.
                    </p>
                </div>

                <div class="grid gap-5 row-gap-8 sm:grid-cols-2">
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                Documents
                            </h6>
                            <p class="text-sm text-gray-900">
                                Find important documents, including course materials, lecture notes, and study guides, to keep you on track with your studies.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                Timetables
                            </h6>
                            <p class="text-sm text-gray-900">
                                Stay organized with up-to-date timetables for your classes, exams, and college events.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                Venue Locations
                            </h6>
                            <p class="text-sm text-gray-900">
                                Easily locate your classrooms and other important venues within the college.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                        <div class="h-full p-5 border border-l-0 rounded-r">
                            <h6 class="mb-2 font-semibold leading-5">
                                Video Tutorials
                            </h6>
                            <p class="text-sm text-gray-900">
                                Access a wide range of educational videos to help you understand complex topics and enhance your learning experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-10">
                <img class="object-cover hidden sm:flex w-full h-56 rounded shadow-lg sm:h-96" src="{{asset('wel.jpg')}}" alt="" />
            </div>
        </div>
    </div>
</div>
<footer class="bg-white border-t-2 rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{asset('atclogo.jpg')}}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Arusha Technical College</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>

            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://atc.ac.tz/" class="hover:underline">ATC ™</a>. All Rights Reserved.</span>
    </div>
</footer>

</body>
</html>
