@extends('admin.layout')

@section('title', 'Detail Riwayat Chatbot - Admin')
@section('page-title', 'Detail Riwayat Chatbot')
@section('page-subtitle', 'Melihat detail riwayat pencarian Chatbot KUHP')

@section('content')
<div class="space-y-6">
    <div class="bg-white shadow-sm rounded-lg p-6">
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-dark">Query</h3>
            <p class="text-gray-700 mt-2">{{ $log->query }}</p>
        </div>

        <div class="mb-6 grid gap-4 md:grid-cols-3">
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <p class="text-sm text-gray-500">Jumlah hasil</p>
                <p class="text-2xl font-semibold text-dark">{{ $log->result_count }}</p>
            </div>
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <p class="text-sm text-gray-500">Hasil teratas</p>
                <p class="text-xl font-semibold text-dark">{{ $log->top_result ?? '-' }}</p>
            </div>
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <p class="text-sm text-gray-500">Tanggal</p>
                <p class="text-xl font-semibold text-dark">{{ $log->created_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h4 class="text-md font-semibold text-dark">Detail hasil respon</h4>
            </div>
            <div class="p-6">
                @if(empty($log->response))
                    <p class="text-gray-500">Tidak ada hasil.</p>
                @else
                    <div class="space-y-4">
                        @foreach($log->response as $result)
                            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <p class="font-semibold text-dark">{{ $result['judul'] ?? 'Tidak diketahui' }}</p>
                                <p class="text-sm text-gray-600">{{ $result['pasal'] ?? '' }} | {{ $result['kategori'] ?? '' }}</p>
                                <p class="text-sm text-gray-500 mt-2">Similarity: {{ $result['similarity_score'] ?? 0 }}%</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('admin.chatbot_logs.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition font-semibold">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection
