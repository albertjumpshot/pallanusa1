<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Pallanusa Darmasastra</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
<body class="bg-gradient-to-br from-dark to-gray-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gold mb-2">Pallanusa</h1>
            <p class="text-gray-400">Admin Panel</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gold text-dark px-8 py-6">
                <h2 class="text-2xl font-bold">Login Admin</h2>
                <p class="text-dark text-sm mt-1 opacity-80">Masukkan kredensial Anda untuk mengakses dashboard</p>
            </div>

            <!-- Form -->
            <div class="px-8 py-8">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        @foreach ($errors->all() as $error)
                            <p class="text-red-600 text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-dark mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                               placeholder="admin@pallanusa.com">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-dark mb-2">Password</label>
                        <input type="password" id="password" name="password" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                               placeholder="Password Anda">
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" 
                               class="w-4 h-4 text-gold focus:ring-gold cursor-pointer">
                        <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">
                            Ingat saya
                        </label>
                    </div>

                    <button type="submit" class="w-full py-3 bg-gold text-dark font-bold rounded-lg hover:bg-yellow-500 transition duration-300 mt-6">
                        Login
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 text-center border-t border-gray-200">
                <p class="text-gray-600 text-sm">
                    Kembali ke <a href="{{ route('home') }}" class="text-gold hover:underline font-semibold">halaman utama</a>
                </p>
            </div>
        </div>

        <!-- Security Info -->
        <div class="mt-8 text-center text-gray-400 text-sm">
            <p>Login Anda dijamin aman dan terenkripsi</p>
        </div>
    </div>
</body>
</html>