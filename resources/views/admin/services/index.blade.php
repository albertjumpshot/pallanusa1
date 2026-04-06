@extends('admin.layout')

@section('page-title', 'Kelola Layanan')
@section('page-subtitle', 'Daftar semua layanan hukum yang ditawarkan')

@section('content')
    <div class="space-y-4 mb-6">
        <a href="{{ route('admin.services.create') }}" class="inline-block px-4 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
            + Tambah Layanan Baru
        </a>
    </div>

    @if($services->count() > 0)
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100 border-b border-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Nama Layanan</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Kategori</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-dark">Deskripsi</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-dark">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($services as $service)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-dark font-semibold">{{ $service->name }}</td>
                            <td class="px-6 py-4">
                                <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">
                                    {{ $service->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-600 text-sm">
                                {{ Str::limit($service->description, 50) }}
                            </td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <a href="{{ route('admin.services.edit', $service) }}" class="inline-block px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded hover:bg-blue-600 transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus layanan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white text-xs font-semibold rounded hover:bg-red-600 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($services->hasPages())
            <div class="mt-6">
                {{ $services->render() }}
            </div>
        @endif
    @else
        <div class="bg-gray-100 rounded-lg p-8 text-center">
            <p class="text-gray-600 mb-4">Belum ada layanan. Mulai tambahkan layanan baru!</p>
            <a href="{{ route('admin.services.create') }}" class="inline-block px-4 py-2 bg-gold text-dark font-semibold rounded-lg hover:bg-yellow-500 transition">
                + Tambah Layanan Pertama
            </a>
        </div>
    @endif
@endsection