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
                                <a href="{{ route('admin.services.edit', $service) }}" class="inline-flex items-center px-3 py-1 bg-blue-500 text-white rounded text-sm font-semibold hover:bg-blue-600 transition">
                                    Edit
                                </a>
                                <button type="button" onclick="openDeleteModal('{{ route('admin.services.destroy', $service) }}')" class="inline-flex items-center px-3 py-1 bg-red-500 text-white rounded text-sm font-semibold hover:bg-red-600 transition">
                                    Hapus
                                </button>
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

<!-- Delete Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full mx-4">
        <h3 class="text-lg font-bold text-dark mb-4">Konfirmasi Hapus</h3>
        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus layanan ini? Tindakan ini tidak dapat dibatalkan.</p>
        <div class="flex gap-4 justify-end">
            <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded font-semibold hover:bg-gray-400 transition h-10">
                Batal
            </button>
            <form id="deleteForm" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded font-semibold hover:bg-red-700 transition h-10">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function openDeleteModal(actionUrl) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        form.action = actionUrl;
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('deleteModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });
</script>