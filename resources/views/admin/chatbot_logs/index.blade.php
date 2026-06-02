@extends('admin.layout')

@section('title', 'Riwayat Chatbot - Admin')
@section('page-title', 'Riwayat Chatbot')
@section('page-subtitle', 'Melihat riwayat pencarian pengguna di Chatbot KUHP')

@section('content')
<div class="space-y-6">
    @if($logs->isEmpty())
        <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg text-center">
            <p class="text-blue-700 font-semibold">Belum ada riwayat chatbot.</p>
        </div>
    @else
        <div class="bg-white shadow-sm rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Query</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Hasil Teratas</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Jumlah Hasil</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Tanggal</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($logs as $log)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit($log->query, 60) }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $log->top_result ?? '-' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $log->result_count }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $log->created_at->format('d M Y H:i') }}</td>
                                <td class="px-6 py-4 text-sm text-center space-x-2">
                                    <a href="{{ route('admin.chatbot_logs.show', $log->id) }}" class="inline-flex items-center px-3 py-1 bg-gold text-dark rounded text-sm font-semibold hover:bg-yellow-500 transition">Lihat</a>
                                    <button type="button" onclick="openDeleteModal('{{ route('admin.chatbot_logs.destroy', $log->id) }}')" class="inline-flex items-center px-3 py-1 bg-red-500 text-white rounded text-sm font-semibold hover:bg-red-600 transition">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            {{ $logs->links() }}
        </div>
    @endif
</div>
@endsection

<!-- Delete Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full mx-4">
        <h3 class="text-lg font-bold text-dark mb-4">Konfirmasi Hapus</h3>
        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus riwayat chatbot ini? Tindakan ini tidak dapat dibatalkan.</p>
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
