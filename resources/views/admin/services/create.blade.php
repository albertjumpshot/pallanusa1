@extends('admin.layout')

@section('page-title', 'Tambah Layanan')
@section('page-subtitle', 'Buat layanan hukum baru')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-semibold text-dark mb-2">Nama Layanan *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Contoh: Konsultasi Hukum Bisnis">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category" class="block text-sm font-semibold text-dark mb-2">Kategori *</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Contoh: Hukum Perdata, Hukum Pidana, Hukum Bisnis">
                    @error('category')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-semibold text-dark mb-2">Deskripsi Layanan *</label>
                    <textarea id="description" name="description" rows="6" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                              placeholder="Jelaskan secara detail tentang layanan hukum ini, mencakup proses dan manfaatnya...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="submit" class="px-6 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
                        ✓ Buat Layanan
                    </button>
                    <a href="{{ route('admin.services.index') }}" class="px-6 py-2 bg-gray-300 text-dark font-semibold rounded-lg hover:bg-gray-400 transition">
                        ✕ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection