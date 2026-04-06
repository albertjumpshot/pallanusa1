@section('title', 'Chatbot KUHP - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-16 mt-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">
                ⚖️ Chatbot KUHP
            </h1>
            <p class="text-xl text-gray-300 mb-6">
                Asisten Hukum Pidana - Konsultasi Pasal KUHP Secara Otomatis
            </p>
            <p class="text-gray-400">
                Tanyakan tentang jenis kejahatan dan dapatkan informasi pasal KUHP yang relevan
            </p>
        </div>
    </section>

    <!-- Chatbot Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Chat Interface -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-serif font-bold text-dark mb-6">Konsultasi Hukum KUHP</h2>

                        <!-- Chat Messages Container -->
                        <div id="chat-messages" class="space-y-4 mb-6 max-h-96 overflow-y-auto border rounded-lg p-4 bg-gray-50">
                            <div class="text-center text-gray-500 py-8">
                                <p>👋 Selamat datang di Chatbot KUHP!</p>
                                <p class="text-sm mt-2">Ketik jenis kejahatan atau pertanyaan hukum di bawah ini.</p>
                            </div>
                        </div>

                        <!-- Input Form -->
                        <form id="chat-form" class="flex gap-2">
                            <input type="text" id="query-input" placeholder="Contoh: pencurian motor, penipuan online, penganiayaan..."
                                   class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-transparent"
                                   required>
                            <button type="submit" class="bg-gold text-dark px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">
                                🔍 Cari Pasal
                            </button>
                        </form>

                        <!-- Loading Indicator -->
                        <div id="loading" class="hidden mt-4 text-center">
                            <div class="inline-block animate-spin rounded-full h-6 w-6 border-b-2 border-gold"></div>
                            <span class="ml-2 text-gray-600">Mencari pasal KUHP...</span>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-lg font-serif font-bold text-dark mb-4">📚 Kategori Pasal</h3>
                        <div class="space-y-3 text-sm">
                            <div>
                                <h4 class="font-semibold text-dark mb-2">Kejahatan Harta:</h4>
                                <ul class="text-gray-600 space-y-1">
                                    <li>• Pencurian</li>
                                    <li>• Penipuan</li>
                                    <li>• Penggelapan</li>
                                    <li>• Pemerasan</li>
                                    <li>• Penadahan</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-2">Kejahatan Jiwa:</h4>
                                <ul class="text-gray-600 space-y-1">
                                    <li>• Pembunuhan</li>
                                    <li>• Penganiayaan</li>
                                    <li>• Pengeroyokan</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-2">Kesusilaan:</h4>
                                <ul class="text-gray-600 space-y-1">
                                    <li>• Pemerkosaan</li>
                                    <li>• Pelecehan Seksual</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-2">Kehormatan:</h4>
                                <ul class="text-gray-600 space-y-1">
                                    <li>• Pencemaran Nama</li>
                                    <li>• Fitnah</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-dark mb-2">Dokumen:</h4>
                                <ul class="text-gray-600 space-y-1">
                                    <li>• Pemalsuan Surat</li>
                                    <li>• Sumpah Palsu</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6">
                        <h4 class="font-semibold text-yellow-800 mb-2">⚠️ Disclaimer</h4>
                        <p class="text-sm text-yellow-700">
                            Informasi ini bersifat umum. Untuk kasus hukum spesifik, konsultasikan dengan tim advokat kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-dark text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-serif font-bold mb-4">Butuh Konsultasi Hukum Lebih Lanjut?</h2>
            <p class="text-gray-300 mb-8">Tim advokat profesional kami siap membantu Anda dengan kasus hukum apa pun</p>
            <a href="{{ route('contact') }}" class="bg-gold text-dark px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>
</x-app-layout>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chat-form');
    const queryInput = document.getElementById('query-input');
    const chatMessages = document.getElementById('chat-messages');
    const loading = document.getElementById('loading');

    chatForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        const query = queryInput.value.trim();
        if (!query) return;

        // Add user message
        addMessage('user', query);
        queryInput.value = '';

        // Show loading
        loading.classList.remove('hidden');

        try {
            const response = await fetch('{{ route("chatbot.search") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ query: query })
            });

            const data = await response.json();

            // Hide loading
            loading.classList.add('hidden');

            // Add bot response
            const botResponse = formatBotResponse(data);
            addMessage('bot', botResponse);

        } catch (error) {
            loading.classList.add('hidden');
            addMessage('bot', 'Maaf, terjadi kesalahan. Silakan coba lagi.');
            console.error('Error:', error);
        }
    });

    function addMessage(type, content) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `flex ${type === 'user' ? 'justify-end' : 'justify-start'}`;

        const messageBubble = document.createElement('div');
        messageBubble.className = `max-w-xs lg:max-w-md px-4 py-2 rounded-lg ${
            type === 'user'
                ? 'bg-gold text-dark'
                : 'bg-white border border-gray-200 text-gray-800'
        }`;

        messageBubble.innerHTML = content;
        messageDiv.appendChild(messageBubble);
        chatMessages.appendChild(messageDiv);

        // Scroll to bottom
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function formatBotResponse(data) {
        if (!data.results || data.results.length === 0) {
            return `
                <div class="text-red-600">
                    <p>Maaf, saya tidak menemukan pasal KUHP yang relevan dengan '${data.query}'.</p>
                    <p class="text-sm mt-2">Coba gunakan kata kunci yang lebih spesifik seperti:</p>
                    <ul class="text-sm mt-1 list-disc list-inside">
                        <li>pencurian, penipuan, penggelapan</li>
                        <li>pembunuhan, penganiayaan</li>
                        <li>pemerasan, pemerkosaan</li>
                        <li>pemalsuan, fitnah, pencemaran nama baik</li>
                    </ul>
                </div>
            `;
        }

        let response = `<div class="space-y-4">`;
        response += `<p class="font-semibold">🔍 Hasil pencarian untuk: '${data.query}'</p>`;
        response += `<p>Ditemukan ${data.results.length} pasal KUHP yang relevan:</p>`;
        response += `<hr class="my-2">`;

        data.results.forEach((result, index) => {
            response += `
                <div class="border-l-4 border-gold pl-4">
                    <h4 class="font-bold text-dark">📋 ${result.pasal} - ${result.judul}</h4>
                    <p class="text-sm text-gray-600 mb-2">Kategori: ${result.kategori}</p>
                    <div class="mb-2">
                        <p class="font-semibold text-sm">📖 Bunyi Pasal:</p>
                        <p class="text-sm bg-gray-100 p-2 rounded">${result.isi_pasal}</p>
                    </div>
                    <div>
                        <p class="font-semibold text-sm">⚖️ Ancaman Hukuman:</p>
                        <p class="text-sm bg-red-50 text-red-800 p-2 rounded font-semibold">${result.ancaman_hukuman}</p>
                    </div>
                </div>
            `;
            if (index < data.results.length - 1) {
                response += `<hr class="my-3">`;
            }
        });

        response += `<hr class="my-2">`;
        response += `<p class="text-sm text-yellow-600 font-semibold">⚠️ Disclaimer: Informasi ini bersifat umum. Untuk kasus hukum spesifik, konsultasikan dengan advokat kami.</p>`;
        response += `</div>`;

        return response;
    }
});
</script>