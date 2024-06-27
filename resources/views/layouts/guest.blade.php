<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <wireui:scripts />
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url('{{ asset('login.jpg') }}'); background-size: cover; background-position: center;">
            <div class="w-full   sm:max-w-md mt-6 animate-fade-left px-6 py-4 bg-white  shadow-xl  border-2 border-green-100 overflow-hidden sm:rounded-lg">


                <div class=" flex flex-col sm:justify-center items-center pb-6">
                    <div>
                        <a href="/" wire:navigate>
                            <img src="{{asset('atclogo.jpg')}}" class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </div>
                    <p class="font-semibold sm:text-2xl ">ATC - Help Desk</p>
                    <p>"<span class="italic text-sm">Skills make the difference</span>"</p>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
