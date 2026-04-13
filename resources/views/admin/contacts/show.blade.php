@extends('admin.layout')

@section('title', 'Detail Pesan - Admin')
@section('page-title', 'Detail Pesan Kontak')
@section('page-subtitle', 'Informasi lengkap pesan dari pengunjung')

@section('content')
<div class="space-y-6">
    <div class="flex gap-4">
        <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition font-semibold">
            ← Kembali
        </a>
    </div>

    <div class="bg-white shadow-sm rounded-lg p-6">
        <!-- Header -->
        <div class="mb-6 pb-6 border-b border-gray-200">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold text-dark mb-2">{{ $contact->subject }}</h2>
                    <p class="text-gray-600">Dari: <strong>{{ $contact->name }}</strong></p>
                </div>
                <div class="text-right">
                    @if($contact->is_read)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800">✓ Sudah dibaca</span>
                    @else
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800">Belum dibaca</span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Sender Info -->
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="text-sm font-semibold text-gray-700 block mb-1">Nama Pengirim</label>
                <p class="text-gray-900">{{ $contact->name }}</p>
            </div>
            <div>
                <label class="text-sm font-semibold text-gray-700 block mb-1">Email</label>
                <p class="text-gray-900">
                    <a href="mailto:{{ $contact->email }}" class="text-gold hover:text-yellow-600">{{ $contact->email }}</a>
                </p>
            </div>
            <div>
                <label class="text-sm font-semibold text-gray-700 block mb-1">Nomor Telepon</label>
                <p class="text-gray-900">
                    @if($contact->phone)
                        <a href="tel:{{ $contact->phone }}" class="text-gold hover:text-yellow-600">{{ $contact->phone }}</a>
                    @else
                        <span class="text-gray-400">Tidak disediakan</span>
                    @endif
                </p>
            </div>
            <div>
                <label class="text-sm font-semibold text-gray-700 block mb-1">Tanggal Diterima</label>
                <p class="text-gray-900">{{ $contact->created_at->format('d M Y H:i') }}</p>
            </div>
                <p class="text-gray-900">{{ $contact->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <hr class="my-6">

        <!-- Message Content -->
        <div class="mb-6">
            <label class="text-sm font-semibold text-gray-700 block mb-3">Isi Pesan</label>
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <p class="text-gray-900 whitespace-pre-wrap leading-relaxed">{{ $contact->message }}</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex gap-4 pt-4 border-t border-gray-200">
            <a href="mailto:{{ $contact->email }}" class="inline-flex items-center px-6 py-2 bg-gold text-dark rounded hover:bg-yellow-500 transition font-semibold">
                Balas Pesan
            </a>
            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-6 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition font-semibold">
                    Hapus Pesan
                </button>
            </form>
            <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition font-semibold">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection
