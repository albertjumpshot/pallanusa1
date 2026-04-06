@extends('admin.layout')

@section('page-title', 'Manajemen Artikel')
@section('page-subtitle', 'Kelola artikel blog website Pallanusa Darmasastra')

@section('content')
    <!-- Button Create -->
    <div class="mb-6 flex justify-between items-center">
        <h3 class="text-lg font-bold text-dark">Daftar Artikel</h3>
        <a href="{{ route('admin.articles.create') }}" class="px-6 py-2 bg-gold text-dark rounded-lg font-semibold hover:bg-yellow-500 transition">
            + Buat Artikel Baru
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($articles->count() > 0)
            <table class="w-full">
                <thead class="bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Judul</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Kategori</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Dibuat</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($articles as $article)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="max-w-sm truncate">
                                <p class="font-semibold text-dark">{{ $article->title }}</p>
                                <p class="text-gray-600 text-sm line-clamp-1">{{ $article->content }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">
                                {{ $article->category }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            {{ $article->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                                    Edit
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $articles->links() }}
            </div>
        @else
            <div class="px-6 py-12 text-center">
                <p class="text-gray-600 mb-4">Belum ada artikel</p>
                <a href="{{ route('admin.articles.create') }}" class="text-gold font-semibold hover:underline">
                    Buat artikel pertama Anda →
                </a>
            </div>
        @endif
    </div>
@endsection