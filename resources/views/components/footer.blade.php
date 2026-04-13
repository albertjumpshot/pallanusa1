<!-- Footer -->
<footer class="bg-dark text-white py-12 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Company Info -->
            <div>
                <h3 class="text-gold font-serif text-xl font-bold mb-2">{{ config('contact.company.name') }}</h3>
                <p class="text-gray-400 text-sm">{{ config('contact.company.description') }}</p>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-gold font-semibold mb-4">Hubungi Kami</h4>
                <p class="text-gray-400 text-sm mb-2">
                    Email: 
                    <a href="mailto:{{ config('contact.email.primary') }}" class="text-gold hover:text-yellow-500">
                        {{ config('contact.email.primary') }}
                    </a>
                </p>
                <p class="text-gray-400 text-sm mb-2">
                    Phone: 
                    <a href="tel:{{ config('contact.phone.primary') }}" class="text-gold hover:text-yellow-500">
                        {{ config('contact.phone.formatted') }}
                    </a>
                </p>
                <p class="text-gray-400 text-sm">{{ config('contact.address.city') }}, {{ config('contact.address.country') }}</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-gold font-semibold mb-4">Tautan Cepat</h4>
                <a href="{{ route('home') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Home</a>
                <a href="{{ route('services') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Layanan</a>
                <a href="{{ route('team') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Tim Pengacara</a>
                <a href="{{ route('blog') }}" class="text-gray-400 text-sm block hover:text-gold mb-2">Blog</a>
                <a href="{{ route('chatbot') }}" class="text-gray-400 text-sm block hover:text-gold">Chatbot KUHP</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} {{ config('contact.company.name') }}. Semua hak dilindungi.</p>
        </div>
    </div>
</footer>
