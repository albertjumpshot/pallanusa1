@extends('admin.layout')

@section('page-title', 'Edit Artikel')
@section('page-subtitle', 'Ubah artikel yang sudah ada')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-semibold text-dark mb-2">Judul Artikel *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Masukkan judul artikel">
                </div>

                <div>
                    <label for="category" class="block text-sm font-semibold text-dark mb-2">Kategori *</label>
                    <select id="category" name="category" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20">
                        <option value="" disabled {{ old('category', $article->category) ? '' : 'selected' }}>Pilih kategori artikel</option>
                        @foreach($categories as $categoryOption)
                            <option value="{{ $categoryOption }}" {{ old('category', $article->category) === $categoryOption ? 'selected' : '' }}>{{ $categoryOption }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="image" class="block text-sm font-semibold text-dark mb-2">Gambar Artikel</label>
                    @if($article->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="h-40 rounded-lg object-cover">
                            <p class="text-gray-600 text-sm mt-2">Gambar saat ini</p>
                        </div>
                    @endif
                    <input type="file" id="image" name="image" accept="image/*"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20">
                    <p class="text-gray-500 text-sm mt-1">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB. Biarkan kosong jika tidak ingin mengubah gambar.</p>
                </div>

                <div>
                    <label for="url" class="block text-sm font-semibold text-dark mb-2">URL Sumber Artikel</label>
                    <input type="url" id="url" name="url" value="{{ old('url', $article->url) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="https://contoh.com/artikel">
                    <p class="text-gray-500 text-sm mt-1">Link sumber artikel (opsional)</p>
                </div>

                <div>
                    <label for="content" class="block text-sm font-semibold text-dark mb-2">Konten *</label>
                    <textarea id="content" name="content" rows="8" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                              placeholder="Tulis konten artikel Anda di sini...">{{ old('content', $article->content) }}</textarea>
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="submit" class="px-6 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
                        ✓ Perbarui Artikel
                    </button>
                    <a href="{{ route('admin.articles.index') }}" class="px-6 py-2 bg-gray-300 text-dark font-semibold rounded-lg hover:bg-gray-400 transition">
                        ✕ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection