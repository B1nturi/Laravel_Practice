<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 dark:text-gray-100">
        <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow-lg border-b border-gray-100 dark:border-gray-700">
                    <div class="max-w-7xl mx-auto py-7 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endisset

            <main>
                <div class="py-12"> 
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>