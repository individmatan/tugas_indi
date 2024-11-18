<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-gradient-to-r from-purple-500 to-indigo-600 shadow-lg">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-white">logo</h1>
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-4 py-2 rounded-md text-sm font-medium text-white bg-purple-700 hover:bg-purple-800 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="px-4 py-2 rounded-md text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 transition">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                   class="px-4 py-2 rounded-md text-sm font-medium text-white bg-green-600 hover:bg-green-500 transition">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="flex-1 flex flex-col items-center justify-center bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-800 dark:to-gray-900">
            <div class="max-w-4xl w-full px-6 text-center">
                <header class="py-12">
                    <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        Welcome to Laravel
                    </h1>
                    <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">
                        Build amazing web applications quickly and easily.
                    </p>
                </header>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-100 dark:bg-gray-800 text-center py-6 text-gray-600 dark:text-gray-400">
            <p>© 2024 Laravel Framework. Built with ❤️ by indi/Developer</p>
        </footer>
    </div>
</body>
</html>
