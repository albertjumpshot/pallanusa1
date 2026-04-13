@extends('admin.layout')

@section('page-title', 'Dashboard')
@section('page-subtitle', 'Selamat datang di Admin Panel Pallanusa Darmasastra')

@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Articles -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-gold">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Total Artikel</p>
                    <p class="text-4xl font-bold text-dark mt-2">{{ $totalArticles }}</p>
                </div>
                <div class="text-4xl opacity-20"></div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.articles.index') }}" class="text-gold font-semibold text-sm hover:underline">
                    Kelola Artikel →
                </a>
            </div>
        </div>

        <!-- Total Lawyers -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Total Pengacara</p>
                    <p class="text-4xl font-bold text-dark mt-2">{{ $totalLawyers }}</p>
                </div>
                <div class="text-4xl opacity-20"></div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.lawyers.index') }}" class="text-blue-500 font-semibold text-sm hover:underline">
                    Kelola Pengacara →
                </a>
            </div>
        </div>

        <!-- Total Services -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Total Layanan</p>
                    <p class="text-4xl font-bold text-dark mt-2">{{ $totalServices }}</p>
                </div>
                <div class="text-4xl opacity-20"></div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.services.index') }}" class="text-green-500 font-semibold text-sm hover:underline">
                    Kelola Layanan →
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-lg font-bold text-dark mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('admin.articles.create') }}" class="block p-4 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 transition text-center">
                <div class="text-2xl mb-2"></div>
                <p class="font-semibold text-dark text-sm">Buat Artikel</p>
            </a>
            <a href="{{ route('admin.lawyers.create') }}" class="block p-4 bg-purple-50 border border-purple-200 rounded-lg hover:bg-purple-100 transition text-center">
                <div class="text-2xl mb-2"></div>
                <p class="font-semibold text-dark text-sm">Tambah Pengacara</p>
            </a>
            <a href="{{ route('admin.services.create') }}" class="block p-4 bg-green-50 border border-green-200 rounded-lg hover:bg-green-100 transition text-center">
                <div class="text-2xl mb-2"></div>
                <p class="font-semibold text-dark text-sm">Tambah Layanan</p>
            </a>
            <a href="{{ route('home') }}" target="_blank" class="block p-4 bg-gold bg-opacity-20 border border-gold rounded-lg hover:bg-opacity-30 transition text-center">
                <div class="text-2xl mb-2"></div>
                <p class="font-semibold text-dark text-sm">Lihat Website</p>
            </a>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-gold to-yellow-400 rounded-lg shadow-md p-8 text-dark">
        <h3 class="text-2xl font-bold mb-2">Selamat Datang di Dashboard Admin</h3>
        <p class="mb-4 opacity-90">
            Anda dapat mengelola semua konten website Pallanusa Darmasastra Law Firm dari sini. 
            Gunakan menu di sebelah kiri untuk menavigasi ke halaman manajemen konten.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-white bg-opacity-20 p-4 rounded">
                <h4 class="font-bold mb-2">Artikel Blog</h4>
                <p class="text-sm opacity-90">Kelola artikel hukum dan blog content</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded">
                <h4 class="font-bold mb-2">Tim Pengacara</h4>
                <p class="text-sm opacity-90">Kelola data tim pengacara firma</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded">
                <h4 class="font-bold mb-2">Layanan Hukum</h4>
                <p class="text-sm opacity-90">Kelola daftar layanan hukum</p>
            </div>
        </div>
    </div>
@endsection