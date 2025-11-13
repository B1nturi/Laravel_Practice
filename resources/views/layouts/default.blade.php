<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Practice')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-indigo-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <img width="30" height="30" src="{{ asset('images/search.png') }}" alt="Logo">
            <h1 class="text-2xl font-semibold">@yield('header-title', 'Home')</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li>
                        <a href="{{ url('/post') }}" class="hover:text-indigo-200 transition">Post</a>
                    </li>
                    <li>
                        <a href="{{ route('testpage') }}" class="hover:text-indigo-200 transition">Go to Test Page
                            (Route)</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-10">
        @yield('main-content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 text-center py-4">
        @yield('footer')
    </footer>

</body>

</html>