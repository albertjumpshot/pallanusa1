@section('title', 'Home - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-dark text-white py-20 mt-0 overflow-hidden" style="background-image: url('{{ asset('images/hero.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-5xl md:text-6xl font-serif font-bold mb-6 leading-tight">
                        Pallanusa Darmasastra
                    </h1>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Firma hukum profesional dengan pengalaman lebih dari 20 tahun melayani klien dengan integritas, keahlian, dan komitmen terhadap keunggulan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="{{ route('contact') }}" class="bg-gold text-dark px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">Konsultasi Gratis</a>
                        <a href="{{ route('services') }}" class="border-2 border-gold text-gold px-8 py-3 rounded-lg font-semibold hover:bg-gold hover:text-dark transition duration-300">Lihat Layanan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-bold text-dark mb-4">Mengapa Memilih Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan solusi hukum berkualitas tinggi dengan pendekatan personal dan hasil yang terukur</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-light-gray p-8 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-gold text-4xl font-bold mb-4">✓</div>
                    <h3 class="text-xl font-serif font-bold mb-3 text-dark">Kepercayaan & Kredibilitas</h3>
                    <p class="text-gray-600">Dipercaya oleh ribuan klien dengan track record sukses dalam menangani kasus kompleks di berbagai bidang hukum.</p>
                </div>
                <div class="bg-light-gray p-8 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-gold text-4xl font-bold mb-4">✓</div>
                    <h3 class="text-xl font-serif font-bold mb-3 text-dark">Tim Profesional</h3>
                    <p class="text-gray-600">Pengacara berpengalaman dengan keahlian spesifik di berbagai bidang hukum dan sertifikasi internasional.</p>
                </div>
                <div class="bg-light-gray p-8 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-gold text-4xl font-bold mb-4">✓</div>
                    <h3 class="text-xl font-serif font-bold mb-3 text-dark">Solusi Inovatif</h3>
                    <p class="text-gray-600">Menggunakan teknologi terkini dan pendekatan strategis untuk memberikan solusi hukum yang efektif dan efisien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-bold text-dark mb-4">Layanan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan layanan hukum komprehensif dalam berbagai bidang untuk memenuhi kebutuhan klien</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $services = [
                        ['icon' => '⚖️', 'title' => 'Hukum Perdata', 'desc' => 'Kasus perdata sipil dan transaksi komersial'],
                        ['icon' => '🔨', 'title' => 'Hukum Pidana', 'desc' => 'Pertahanan dan penuntutan dalam perkara pidana'],
                        ['icon' => '💼', 'title' => 'Hukum Bisnis', 'desc' => 'Konsultasi bisnis dan corporate governance'],
                        ['icon' => '👨‍👩‍👧‍👦', 'title' => 'Hukum Keluarga', 'desc' => 'Perceraian, warisan, dan hukum keluarga'],
                    ]
                @endphp
                @foreach($services as $service)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                    <h3 class="text-lg font-serif font-bold text-dark mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-10">
                <a href="{{ route('services') }}" class="bg-gold text-dark px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-serif font-bold mb-6">Butuh Bantuan Hukum?</h2>
            <p class="text-xl text-gray-300 mb-8">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi hukum terbaik untuk kasus Anda</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('contact') }}" class="bg-gold text-dark px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">Hubungi Kami</a>
                <a href="{{ route('chatbot') }}" class="border-2 border-gold text-gold px-8 py-3 rounded-lg font-semibold hover:bg-gold hover:text-dark transition duration-300">AI Legal Assistant</a>
                <a href="tel:+6212134567890" class="border-2 border-gold text-gold px-8 py-3 rounded-lg font-semibold hover:bg-gold hover:text-dark transition duration-300">+62 (21) 123-45678</a>
            </div>
        </div>
    </section>
</x-app-layout>