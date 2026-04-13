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
                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-500 text-white rounded text-sm font-semibold hover:bg-red-600 transition">
                                            Hapus
                                        </button>
                                    </form>
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
