@extends('admin.layout')

@section('page-title', 'Buat Artikel Baru')
@section('page-subtitle', 'Tambahkan artikel blog baru untuk website')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('admin.articles.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-sm font-semibold text-dark mb-2">Judul Artikel *</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Masukkan judul artikel">
                </div>

                <div>
                    <label for="category" class="block text-sm font-semibold text-dark mb-2">Kategori *</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Contoh: Hukum Bisnis, Hukum Keluarga, dll">
                </div>

                <div>
                    <label for="content" class="block text-sm font-semibold text-dark mb-2">Konten *</label>
                    <textarea id="content" name="content" rows="8" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                              placeholder="Tulis konten artikel Anda di sini...">{{ old('content') }}</textarea>
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="submit" class="px-6 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
                        ✓ Simpan Artikel
                    </button>
                    <a href="{{ route('admin.articles.index') }}" class="px-6 py-2 bg-gray-300 text-dark font-semibold rounded-lg hover:bg-gray-400 transition">
                        ✕ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection