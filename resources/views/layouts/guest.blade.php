<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ash Car Rental') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div  class='flex flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row h-screen'>
            <div class="bg-blue-600 md:w-[40%] lg:w-[40%] xl:w-[40%] 2xl:w-[40%] py-10">

            </div>
            <div class="md:w-[60%] lg:w-[60%] xl:w-[60%] 2xl:w-[60%] p-10">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
