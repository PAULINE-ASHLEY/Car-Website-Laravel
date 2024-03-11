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
            <div class="bg-blue-600 md:w-[40%] lg:w-[40%] xl:w-[40%] 2xl:w-[40%] py-24">
                <h1 class="text-white text-center text-3xl font-600">Ash Car Rental</h1>
                <div class="px-10">
                <img src="{{ asset('/front/assets/images/background2.png') }}">
                </div>
                <p class="text-white text-center text-xl font-600 px-4">It is an online system through which customers can view available cars and book cars.</p>
            </div>
            <div class="md:w-[60%] lg:w-[60%] xl:w-[60%] 2xl:w-[60%] p-10">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
