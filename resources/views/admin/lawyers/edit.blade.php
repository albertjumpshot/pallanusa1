@extends('admin.layout')

@section('page-title', 'Edit Pengacara')
@section('page-subtitle', 'Ubah profil pengacara yang sudah ada')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('admin.lawyers.update', $lawyer) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-semibold text-dark mb-2">Nama Lengkap *</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $lawyer->name) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Contoh: Budi Santoso, S.H., M.H.">
                </div>

                <div>
                    <label for="specialization" class="block text-sm font-semibold text-dark mb-2">Spesialisasi *</label>
                    <input type="text" id="specialization" name="specialization" value="{{ old('specialization', $lawyer->specialization) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="Contoh: Hukum Bisnis & Perdata">
                </div>

                <div>
                    <label for="education" class="block text-sm font-semibold text-dark mb-2">Pendidikan *</label>
                    <textarea id="education" name="education" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                              placeholder="Contoh: S.H. Universitas Indonesia, M.H. Universitas Gadjah Mada">{{ old('education', $lawyer->education) }}</textarea>
                </div>

                <div>
                    <label for="experience" class="block text-sm font-semibold text-dark mb-2">Pengalaman *</label>
                    <textarea id="experience" name="experience" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                              placeholder="Deskripsikan pengalaman kerja pengacara ini">{{ old('experience', $lawyer->experience) }}</textarea>
                </div>

                <div>
                    <label for="photo" class="block text-sm font-semibold text-dark mb-2">URL Foto (Opsional)</label>
                    <input type="text" id="photo" name="photo" value="{{ old('photo', $lawyer->photo) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold focus:ring-opacity-20"
                           placeholder="https://...">
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="submit" class="px-6 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
                        ✓ Perbarui Pengacara
                    </button>
                    <a href="{{ route('admin.lawyers.index') }}" class="px-6 py-2 bg-gray-300 text-dark font-semibold rounded-lg hover:bg-gray-400 transition">
                        ✕ Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection