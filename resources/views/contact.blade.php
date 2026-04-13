@section('title', 'Contact - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-serif font-bold">Hubungi Kami</h1>
            <p class="text-gray-300 mt-2">Siap membantu Anda dengan kebutuhan hukum</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <!-- Contact Info -->
                <div>
                    <div class="mb-8">
                        <h3 class="text-xl font-serif font-bold text-dark mb-3">📍 Lokasi Kantor</h3>
                        <p class="text-gray-600">{{ config('contact.address.street') }}<br>{{ config('contact.address.city') }} {{ config('contact.address.postal_code') }}<br>{{ config('contact.address.country') }}</p>
                    </div>
                    <div class="mb-8">
                        <h3 class="text-xl font-serif font-bold text-dark mb-3">📞 Telepon</h3>
                        <p class="text-gray-600">
                            <a href="tel:{{ config('contact.phone.primary') }}" class="text-gold hover:text-yellow-500">{{ config('contact.phone.formatted') }}</a>
                        </p>
                    </div>
                    <div class="mb-8">
                        <h3 class="text-xl font-serif font-bold text-dark mb-3">✉️ Email</h3>
                        <p class="text-gray-600">
                            <a href="mailto:{{ config('contact.email.primary') }}" class="text-gold hover:text-yellow-500">{{ config('contact.email.primary') }}</a><br>
                            <a href="mailto:{{ config('contact.email.secondary') }}" class="text-gold hover:text-yellow-500">{{ config('contact.email.secondary') }}</a>
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="md:col-span-2">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-serif font-bold text-dark mb-6">Kirim Pesan Untuk Kami</h3>
                        
                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded">
                                <p class="text-red-700 font-semibold mb-2">Terjadi kesalahan:</p>
                                <ul class="text-red-600 text-sm">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded">
                                <p class="text-green-700 font-semibold">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('contact') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-semibold text-dark mb-2">Nama Lengkap *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-gold" placeholder="Masukkan nama Anda">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-gold" placeholder="Masukkan email Anda">
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-2">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-gold" placeholder="Contoh: 08123456789">
                                <p class="text-gray-500 text-xs mt-1">Opsional, untuk memudahkan kami menghubungi Anda</p>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-semibold text-dark mb-2">Subjek *</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-gold" placeholder="Topik atau subjek pertanyaan Anda">
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-dark mb-2">Pesan *</label>
                                <textarea id="message" name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-gold" placeholder="Deskripsikan pertanyaan atau kebutuhan hukum Anda dengan jelas">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="w-full bg-gold text-dark px-4 py-3 rounded font-semibold hover:bg-yellow-500 transition duration-300">
                                Kirim Pesan
                            </button>
                        </form>

                        <p class="text-gray-600 text-xs mt-4 text-center">
                            Kami akan merespon pesan Anda dalam waktu 24 jam kerja.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Office Hours -->
            <div class="bg-dark text-white p-8 rounded-lg">
                <h3 class="text-2xl font-serif font-bold mb-6">Jam Operasional</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-gold font-semibold mb-3">Senin - Jumat</h4>
                        <p class="text-gray-300">08:00 - 17:00 WIB</p>
                        <p class="text-gray-400 text-sm mt-2">Istirahat: 12:00 - 13:00 WIB</p>
                    </div>
                    <div>
                        <h4 class="text-gold font-semibold mb-3">Sabtu - Minggu</h4>
                        <p class="text-gray-300">Tutup</p>
                        <p class="text-gray-400 text-sm mt-2">Buka untuk konsultasi khusus atas perjanjian</p>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-gray-700">
                    <h4 class="text-gold font-semibold mb-3">Butuh Bantuan Cepat?</h4>
                    <p class="text-gray-300 text-sm mb-4">Gunakan AI Legal Assistant kami untuk informasi hukum dasar</p>
                    <a href="{{ route('chatbot') }}" class="inline-block bg-gold text-dark px-6 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300">
                        🤖 AI Legal Assistant
                    </a>
                </div>
            </div>

            <!-- Map Section -->
            <div class="mt-16">
                <h3 class="text-2xl font-serif font-bold text-dark mb-6">Lokasi Kami</h3>
                <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0162181505157!2d104.00566717581707!3d1.1489025621870483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98900651a11b5%3A0xa2f138d86bb68010!2sKantor%20Hukum%20Pallanusa%20Darmasastra!5e0!3m2!1sid!2sid!4v1775905824470!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>