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
                    <a href="{{ route('chatbot') }}" class="text-white hover:text-gold transition duration-300 text-sm font-medium">AI Assistant</a>
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
    <footer class="bg-dark text-white py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-gold font-serif text-xl font-bold mb-2">Pallanusa Darmasastra</h3>
                    <p class="text-gray-400 text-sm">Firma Hukum Profesional dengan Keunggulan dalam Praktik Hukum Modern</p>
                </div>
                <div>
                    <h4 class="text-gold font-semibold mb-4">Hubungi Kami</h4>
                    <p class="text-gray-400 text-sm mb-2">Email: info@pallanusa.com</p>
                    <p class="text-gray-400 text-sm mb-2">Phone: +62 (21) 1234-5678</p>
                    <p class="text-gray-400 text-sm">Jakarta, Indonesia</p>
                </div>
                <div>
                    <h4 class="text-gold font-semibold mb-4">Tautan Cepat</h4>
                    <a href="{{ route('home') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Home</a>
                    <a href="{{ route('services') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Layanan</a>
                    <a href="{{ route('team') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Tim Pengacara</a>
                    <a href="{{ route('blog') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Blog</a>
                    <a href="{{ route('chatbot') }}" class="text-gray-400 text-sm block hover:text-gold">AI Legal Assistant</a>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2024 Pallanusa Darmasastra Law Firm. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- AI Chatbot Floating Button -->
    <div id="chatbot-btn" class="fixed bottom-6 right-6 bg-gold text-dark p-4 rounded-full shadow-lg cursor-pointer hover:bg-yellow-500 transition duration-300 z-40">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11z"/>
        </svg>
    </div>

    <!-- Chatbot Modal -->
    <div id="chatbot-modal" class="hidden fixed bottom-20 right-6 w-96 bg-white rounded-lg shadow-2xl z-40 flex flex-col" style="max-height: 500px;">
        <div class="bg-gold text-dark p-4 rounded-t-lg flex justify-between items-center">
            <span class="font-semibold">AI Legal Assistant</span>
            <button id="chatbot-close" class="text-dark hover:text-gray-700 text-xl">&times;</button>
        </div>
        <div class="flex-grow p-4 overflow-y-auto bg-gray-50">
            <div class="flex justify-start mb-4">
                <div class="bg-gray-200 text-gray-800 p-3 rounded-lg text-sm max-w-xs">
                    Halo! Kami adalah asisten AI hukum digital. Fitur ini akan segera diluncurkan. Silakan hubungi kami untuk konsultasi.
                </div>
            </div>
        </div>
        <div class="border-t p-4">
            <p class="text-gray-600 text-sm italic">Fitur AI sedang dalam pengembangan. Hubungi kami untuk konsultasi langsung.</p>
        </div>
    </div>

    <script>
        const chatbotBtn = document.getElementById('chatbot-btn');
        const chatbotModal = document.getElementById('chatbot-modal');
        const chatbotClose = document.getElementById('chatbot-close');

        chatbotBtn.addEventListener('click', function() {
            chatbotModal.classList.toggle('hidden');
        });

        chatbotClose.addEventListener('click', function() {
            chatbotModal.classList.add('hidden');
        });
    </script>
</body>
</html>