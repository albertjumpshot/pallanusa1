@extends('admin.layout')

@section('title', 'Pesan Kontak - Admin')
@section('page-title', 'Pesan Kontak')
@section('page-subtitle', 'Kelola pesan masuk dari pengunjung')

@section('content')
<div class="space-y-6">
    @if($contacts->isEmpty())
        <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg text-center">
            <p class="text-blue-700 font-semibold">Belum ada pesan masuk.</p>
        </div>
    @else
        <div class="bg-white shadow-sm rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nama</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Telepon</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Subjek</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Tanggal</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $contact->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    <a href="mailto:{{ $contact->email }}" class="text-gold hover:text-yellow-600">{{ $contact->email }}</a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    @if($contact->phone)
                                        <a href="tel:{{ $contact->phone }}" class="text-gold hover:text-yellow-600">{{ $contact->phone }}</a>
                                    @else
                                        <span class="text-gray-400">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ Str::limit($contact->subject, 40) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    {{ $contact->created_at->format('d M Y H:i') }}
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    @if($contact->is_read)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800">✓ Dibaca</span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800">Belum dibaca</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-center space-x-2">
                                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="inline-flex items-center px-3 py-1 bg-gold text-dark rounded text-sm font-semibold hover:bg-yellow-500 transition">
                                        Lihat
                                    </a>
                                    <button type="button" onclick="openDeleteModal('{{ route('admin.contacts.destroy', $contact->id) }}')" class="inline-flex items-center px-3 py-1 bg-red-500 text-white rounded text-sm font-semibold hover:bg-red-600 transition">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            {{ $contacts->links() }}
        </div>
    @endif
</div>
@endsection

<!-- Delete Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full mx-4">
        <h3 class="text-lg font-bold text-dark mb-4">Konfirmasi Hapus</h3>
        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus pesan ini? Tindakan ini tidak dapat dibatalkan.</p>
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
