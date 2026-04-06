@section('title', 'About - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-serif font-bold">Tentang Kami</h1>
            <p class="text-gray-300 mt-2">Mengenal lebih dekat tentang firma hukum profesional kami</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div>
                    <h2 class="text-3xl font-serif font-bold text-dark mb-6">Sejarah Kami</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Pallanusa Darmasastra Law Firm didirikan pada tahun 2004 dengan visi menjadi firma hukum terkemuka di Indonesia. 
                        Diawali dengan tim kecil pengacara berdedikasi, kami terus berkembang menjadi firma dengan lebih dari 50 profesional hukum.
                    </p>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Dengan pengalaman lebih dari dua dekade, kami telah menangani ribuan kasus dan memberikan bantuan hukum kepada klien individu, 
                        UMKM, hingga perusahaan multinasional.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Komitmen kami adalah memberikan layanan hukum berkualitas tinggi dengan integritas, profesionalisme, dan hasil yang terukur.
                    </p>
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/about.png') }}" alt="Sejarah Pallanusa Darmasastra Law Firm" class="w-full h-80 rounded-lg shadow-lg object-cover">
                </div>
            </div>

            <!-- Vision & Mission -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">Visi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Menjadi firma hukum pilihan utama yang memberikan solusi hukum inovatif, terpercaya, dan berkontribusi positif 
                        terhadap perkembangan sistem hukum di Indonesia.
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-serif font-bold text-dark mb-4">Misi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Memberikan layanan hukum profesional, kompehen­sif, dan terjangkau dengan tim yang berpengalaman dan teknologi 
                        terkini untuk membantu klien mencapai tujuan mereka.
                    </p>
                </div>
            </div>

            <!-- Core Values -->
            <div class="bg-dark text-white py-12 px-8 rounded-lg">
                <h2 class="text-3xl font-serif font-bold mb-8 text-center">Nilai-Nilai Profesional Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-gold text-dark rounded-full w-12 h-12 flex items-center justify-center font-bold mx-auto mb-4">1</div>
                        <h4 class="font-semibold mb-2">Integritas</h4>
                        <p class="text-gray-300 text-sm">Menjunjung tinggi etika profesi dan kejujuran dalam setiap tindakan</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gold text-dark rounded-full w-12 h-12 flex items-center justify-center font-bold mx-auto mb-4">2</div>
                        <h4 class="font-semibold mb-2">Keahlian</h4>
                        <p class="text-gray-300 text-sm">Memberikan solusi hukum berbasis pengetahuan mendalam dan pengalaman</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gold text-dark rounded-full w-12 h-12 flex items-center justify-center font-bold mx-auto mb-4">3</div>
                        <h4 class="font-semibold mb-2">Komitmen</h4>
                        <p class="text-gray-300 text-sm">Berdedikasi penuh untuk kepentingan dan kesuksesan klien kami</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-gold text-dark rounded-full w-12 h-12 flex items-center justify-center font-bold mx-auto mb-4">4</div>
                        <h4 class="font-semibold mb-2">Inovasi</h4>
                        <p class="text-gray-300 text-sm">Terus berkembang dengan mengadopsi teknologi dan metodologi terbaru</p>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                    <h3 class="text-xl font-semibold mb-4">Ingin Tahu Lebih Banyak?</h3>
                    <p class="text-gray-300 text-sm mb-6">Gunakan AI Legal Assistant kami untuk informasi hukum dasar atau hubungi tim kami</p>
                    <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('chatbot') }}" class="bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">
                            🤖 AI Legal Assistant
                        </a>
                        <a href="{{ route('contact') }}" class="border-2 border-gold text-gold px-6 py-2 rounded font-semibold hover:bg-gold hover:text-dark transition duration-300">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>