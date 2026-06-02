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
                        <td class="px-6 py-4 text-sm text-center space-x-2">
                            <a href="{{ route('admin.lawyers.edit', $lawyer) }}" class="inline-flex items-center px-3 py-1 bg-blue-500 text-white rounded text-sm font-semibold hover:bg-blue-600 transition">
                                Edit
                            </a>
                            <button type="button" onclick="openDeleteModal('{{ route('admin.lawyers.destroy', $lawyer) }}')" class="inline-flex items-center px-3 py-1 bg-red-500 text-white rounded text-sm font-semibold hover:bg-red-600 transition">
                                Hapus
                            </button>
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

<!-- Delete Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full mx-4">
        <h3 class="text-lg font-bold text-dark mb-4">Konfirmasi Hapus</h3>
        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus pengacara ini? Tindakan ini tidak dapat dibatalkan.</p>
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