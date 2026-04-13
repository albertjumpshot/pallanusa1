@section('title', 'Services - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-serif font-bold">Layanan Hukum Kami</h1>
            <p class="text-gray-300 mt-2">Solusi hukum komprehensif untuk semua kebutuhan Anda</p>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-bold text-dark mb-4">Bidang Keahlian Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan layanan hukum profesional dalam berbagai bidang dengan pengalaman bertahun-tahun</p>
            </div>

            <!-- Civil Law -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div class="flex items-center justify-center">
                    <div class="bg-gradient-to-br from-gold to-yellow-400 w-full h-80 rounded-lg opacity-20"></div>
                </div>
                <div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">⚖️ Hukum Perdata</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kami menangani berbagai kasus hukum perdata termasuk sengketa kontrak, pengabaian janji perikatan, dan transaksi komersial. 
                        Tim kami ahli dalam negosiasi, mediasi, dan litigasi untuk mencapai solusi terbaik.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Sengketa kontrak dan transaksi bisnis</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Perselisihan hutang dan piutang</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Tanah dan properti</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Asuransi dan klaim</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">Konsultasi</a>
                </div>
            </div>

            <!-- Criminal Law -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">🔨 Hukum Pidana</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kami memberikan pertahanan hukum pidana yang kuat dan strategis untuk melindungi hak-hak klien kami. 
                        Pengalaman kami mencakup kasus pidana umum hingga kasus pidana khusus.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Kasus pidana umum dan khusus</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> White-collar crime</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Kejahatan properti intelektual</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Tindak pidana korupsi</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">Konsultasi</a>
                </div>
                <div class="flex items-center justify-center">
                    <div class="bg-gradient-to-br from-gold to-yellow-400 w-full h-80 rounded-lg opacity-20"></div>
                </div>
            </div>

            <!-- Business Law -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div class="flex items-center justify-center">
                    <div class="bg-gradient-to-br from-gold to-yellow-400 w-full h-80 rounded-lg opacity-20"></div>
                </div>
                <div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">💼 Hukum Bisnis</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kami memberikan konsultasi hukum bisnis komprehensif untuk membantu perusahaan berkembang dan mengelola risiko hukum. 
                        Layanan kami mencakup pembentukan perusahaan hingga merger dan akuisisi.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Pendirian dan pengelolaan perusahaan</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Merger dan akuisisi</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Perizinan dan kepatuhannya regulasi</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Kemitraan strategis bisnis</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">Konsultasi</a>
                </div>
            </div>

            <!-- Family Law -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div>
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">👨‍👩‍👧‍👦 Hukum Keluarga</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Kami memahami sensitivitas masalah hukum keluarga dan memberikan solusi yang empati serta profesional. 
                        Tim kami berpengalaman dalam mediasi dan litigasi kasus keluarga.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Perceraian dan setelah perceraian</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Hak asuh anak dan pengawasan</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Warisan dan pembagian harta</li>
                        <li class="flex items-center"><span class="text-gold mr-3">•</span> Perjanjian pra-nikah</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">Konsultasi</a>
                </div>
                <div class="flex items-center justify-center">
                    <div class="bg-gradient-to-br from-gold to-yellow-400 w-full h-80 rounded-lg opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @include('components.cta')


</x-app-layout>