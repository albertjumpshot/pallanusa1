<!-- Call to Action Section -->
<section class="bg-white text-dark py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-serif font-bold mb-6">Butuh Bantuan Hukum?</h2>
        <p class="text-xl text-gray-600 mb-8">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi hukum terbaik untuk kasus Anda</p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="{{ route('contact') }}" class="bg-gold text-dark px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">
                Hubungi Kami
            </a>
            <a href="{{ route('chatbot') }}" class="border-2 border-dark text-dark px-8 py-3 rounded-lg font-semibold hover:bg-dark hover:text-white transition duration-300">
                AI Legal Assistant
            </a>
            <a href="tel:{{ config('contact.phone.primary') }}" class="border-2 border-dark text-dark px-8 py-3 rounded-lg font-semibold hover:bg-dark hover:text-white transition duration-300">
                {{ config('contact.phone.formatted') }}
            </a>
        </div>
    </div>
</section>