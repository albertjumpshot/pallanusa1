<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Pallanusa Darmasastra Law Firm')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#C9A84C',
                        'dark': '#0A0A0A',
                    },
                    fontFamily: {
                        'serif': ['Lora', 'serif'],
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased bg-white text-gray-900 font-sans">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 w-full bg-dark text-white shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-gold font-serif text-2xl font-bold">
                        Pallanusa
                    </a>
                </div>
                <div class="hidden sm:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">About</a>
                    <a href="{{ route('team') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">Team</a>
                    <a href="{{ route('services') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">Services</a>
                    <a href="{{ route('blog') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">Blog</a>
                    <a href="{{ route('chatbot') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">Chatbot KUHP</a>
                    <a href="{{ route('contact') }}" class="bg-gold text-dark px-6 py-2 rounded hover:bg-yellow-500 transition duration-300 font-semibold text-sm">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('components.footer')
</body>
</html>