<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard - Pallanusa Darmasastra')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-dark text-white shadow-lg flex flex-col">
            <!-- Logo -->
            <div class="px-6 py-8 border-b border-gray-700">
                <h1 class="text-2xl font-bold text-gold">Pallanusa Admin</h1>
                <p class="text-gray-400 text-sm mt-2">Dashboard Admin</p>
            </div>

            <!-- Menu -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" 
                   class="block px-4 py-3 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-gold text-dark font-semibold' : 'text-gray-300 hover:bg-gray-800' }} transition">
                    📊 Dashboard
                </a>
                <a href="{{ route('admin.articles.index') }}" 
                   class="block px-4 py-3 rounded {{ request()->routeIs('admin.articles.*') ? 'bg-gold text-dark font-semibold' : 'text-gray-300 hover:bg-gray-800' }} transition">
                    📝 Artikel
                </a>
                <a href="{{ route('admin.lawyers.index') }}" 
                   class="block px-4 py-3 rounded {{ request()->routeIs('admin.lawyers.*') ? 'bg-gold text-dark font-semibold' : 'text-gray-300 hover:bg-gray-800' }} transition">
                    👨‍⚖️ Pengacara
                </a>
                <a href="{{ route('admin.services.index') }}" 
                   class="block px-4 py-3 rounded {{ request()->routeIs('admin.services.*') ? 'bg-gold text-dark font-semibold' : 'text-gray-300 hover:bg-gray-800' }} transition">
                    ⚖️ Layanan
                </a>
            </nav>

            <!-- User Info & Logout -->
            <div class="px-4 py-6 border-t border-gray-700">
                <div class="mb-4">
                    <p class="text-sm text-gray-400">Logged in as</p>
                    <p class="font-semibold text-white">{{ auth()->user()->name }}</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition font-semibold">
                        🚪 Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Top Navigation -->
            <div class="bg-white shadow-sm border-b border-gray-200">
                <div class="px-8 py-6">
                    <h2 class="text-2xl font-bold text-dark">@yield('page-title', 'Dashboard')</h2>
                    <p class="text-gray-500 text-sm mt-1">@yield('page-subtitle', '')</p>
                </div>
            </div>

            <!-- Content Area -->
            <div class="p-8">
                <!-- Flash Messages -->
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-center">
                        <span class="text-green-600 font-semibold">✓ {{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg flex items-center">
                        <span class="text-red-600 font-semibold">✕ {{ session('error') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <p class="text-red-600 font-semibold mb-2">Terjadi kesalahan:</p>
                        <ul class="text-red-600 text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Page Content -->
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>