@section('title', 'Blog - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-serif font-bold">Blog & Artikel Hukum</h1>
            <p class="text-gray-300 mt-2">Informasi dan edukasi hukum untuk masyarakat umum</p>
        </div>
    </section>

    <!-- Blog Articles -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($articles as $article)
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="h-48 bg-gradient-to-br from-gold to-yellow-400 opacity-20 flex items-center justify-center">
                            <span class="text-5xl">📰</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-gold text-dark px-3 py-1 rounded text-xs font-semibold">{{ $article->category ?? 'Hukum' }}</span>
                                <span class="text-gray-500 text-xs ml-3">{{ $article->published_at ? $article->published_at->diffForHumans() : 'Baru' }}</span>
                            </div>
                            <h3 class="text-xl font-serif font-bold text-dark mb-3">{{ $article->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($article->content, 120) }}</p>
                            <a href="{{ route('blog.show', $article) }}" class="text-gold font-semibold hover:text-yellow-500 transition duration-300">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <p class="text-gray-600 text-lg mb-4">Artikel akan ditampilkan di sini.</p>
                    <p class="text-gray-500 mb-8">Untuk saat ini, lihat contoh artikel di bawah</p>

                    <!-- Sample Articles -->
                    @php
                        $sampleArticles = [
                            [
                                'title' => 'Memahami Hak-Hak Konsumen Indonesia',
                                'category' => 'Hukum Konsumen',
                                'content' => 'Sebagai konsumen, Anda memiliki hak yang dilindungi oleh undang-undang. Artikel ini menjelaskan hak-hak dasar konsumen dan cara melindunginya dari praktik bisnis yang tidak etis. Perlindungan konsumen adalah aspek penting dari sistem hukum yang adil...',
                                'date' => '2 hari lalu'
                            ],
                            [
                                'title' => 'Langkah-Langkah Pendirian Perusahaan PT di Indonesia',
                                'category' => 'Hukum Bisnis',
                                'content' => 'Mengurus pendirian perusahaan PT memerlukan beberapa tahapan penting. Panduan lengkap ini menjelaskan prosedur, dokumen yang diperlukan, dan waktu yang dibutuhkan untuk mendirikan PT yang sah menurut hukum Indonesia...',
                                'date' => '1 minggu lalu'
                            ],
                            [
                                'title' => 'Hak dan Kewajiban dalam Kontrak Kerja',
                                'category' => 'Hukum Ketenagakerjaan',
                                'content' => 'Banyak pekerja yang tidak memahami hak dan kewajiban mereka berdasarkan kontrak kerja. Artikel ini membahas poin-poin penting dalam kontrak kerja yang harus Anda perhatikan untuk melindungi kepentingan Anda sebagai pekerja...',
                                'date' => '2 minggu lalu'
                            ],
                            [
                                'title' => 'Prosedur Perceraian Menurut Hukum Islam dan Sipil',
                                'category' => 'Hukum Keluarga',
                                'content' => 'Perceraian adalah permasalahan sensitif yang perlu ditangani dengan hati-hati. Kami menjelaskan perbedaan prosedur perceraian menurut hukum Islam dan hukum perdata sipil Indonesia, serta hak-hak yang perlu Anda lindungi...',
                                'date' => '3 minggu lalu'
                            ],
                            [
                                'title' => 'Pentingnya Dokumentasi Dalam Transaksi Bisnis',
                                'category' => 'Hukum Bisnis',
                                'content' => 'Dokumentasi yang baik adalah kunci untuk melindungi kepentingan bisnis Anda. Artikel ini menjelaskan mengapa dokumentasi penting, jenis-jenis dokumen bisnis yang perlu Anda miliki, dan bagaimana cara menyimpannya dengan aman...',
                                'date' => '1 bulan lalu'
                            ],
                            [
                                'title' => 'Memahami Hukum Warisan di Indonesia',
                                'category' => 'Hukum Keluarga',
                                'content' => 'Hukum warisan di Indonesia mengikuti berbagai sistem tergantung agama dan adat. Panduan ini menjelaskan cara pembagian warisan, hak-hak ahli waris, dan prosedur administrasi yang diperlukan untuk mencegah sengketa warisan di kemudian hari...',
                                'date' => '1 bulan lalu'
                            ],
                        ]
                    @endphp

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($sampleArticles as $index => $article)
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-br from-gold to-yellow-400 opacity-20 flex items-center justify-center">
                                <span class="text-5xl">📰</span>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span class="bg-gold text-dark px-3 py-1 rounded text-xs font-semibold">{{ $article['category'] }}</span>
                                    <span class="text-gray-500 text-xs ml-3">{{ $article['date'] }}</span>
                                </div>
                                <h3 class="text-xl font-serif font-bold text-dark mb-3">{{ $article['title'] }}</h3>
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($article['content'], 120) }}</p>
                                <button onclick="alert('Fitur pembacaan artikel lengkap akan tersedia setelah database diisi')" class="text-gold font-semibold hover:text-yellow-500 transition duration-300">
                                    Baca Selengkapnya →
                                </button>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>