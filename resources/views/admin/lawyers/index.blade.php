@extends('admin.layout')

@section('page-title', 'Manajemen Pengacara')
@section('page-subtitle', 'Kelola tim pengacara firma Pallanusa Darmasastra')

@section('content')
    <!-- Button Create -->
    <div class="mb-6 flex justify-between items-center">
        <h3 class="text-lg font-bold text-dark">Daftar Pengacara</h3>
        <a href="{{ route('admin.lawyers.create') }}" class="px-6 py-2 bg-gold text-dark rounded-lg font-semibold hover:bg-yellow-500 transition">
            + Tambah Pengacara
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($lawyers->count() > 0)
            <table class="w-full">
                <thead class="bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Nama</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Spesialisasi</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Pendidikan</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($lawyers as $lawyer)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <p class="font-semibold text-dark">{{ $lawyer->name }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">
                                {{ $lawyer->specialization }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">
                            {{ $lawyer->education }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.lawyers.edit', $lawyer) }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                                    Edit
                                </a>
                                <form action="{{ route('admin.lawyers.destroy', $lawyer) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus pengacara ini?')">
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
                {{ $lawyers->links() }}
            </div>
        @else
            <div class="px-6 py-12 text-center">
                <p class="text-gray-600 mb-4">Belum ada pengacara</p>
                <a href="{{ route('admin.lawyers.create') }}" class="text-gold font-semibold hover:underline">
                    Tambahkan pengacara pertama →
                </a>
            </div>
        @endif
    </div>
@endsection