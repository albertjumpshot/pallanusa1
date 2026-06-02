@section('title', 'Chatbot KUHP - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="w-full px-6 lg:px-10 xl:px-16 text-center">
            <h1 class="text-3xl md:text-4xl font-serif font-bold mb-3">
                ⚖️ Chatbot KUHP
            </h1>
            <p class="text-lg text-gray-300 mb-4">
                Asisten Hukum Pidana - Konsultasi Pasal KUHP Secara Otomatis
            </p>
            <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base">
                Tanyakan tentang jenis kejahatan dan dapatkan informasi pasal KUHP yang relevan, termasuk bunyi pasal, ancaman hukuman, dan panduan singkat.
            </p>
        </div>
    </section>

    <!-- Chatbot Section -->
    <section class="py-16 bg-gray-50">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 xl:gap-8">

                <!-- Left Sidebar -->
                <aside class="lg:col-span-3 space-y-6">
                    <div class="bg-white rounded-[32px] border border-gray-200 shadow-xl p-6 h-full">
                        <h3 class="text-xl font-serif font-bold text-dark mb-5">Kategori Pasal</h3>

                        <div class="space-y-5 text-sm text-gray-700">
                            <div>
                                <h4 class="font-semibold text-dark mb-3">Kejahatan Harta</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" data-term="Pencurian" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pencurian</a></li>
                                    <li><a href="#" data-term="Penipuan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Penipuan</a></li>
                                    <li><a href="#" data-term="Penggelapan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Penggelapan</a></li>
                                    <li><a href="#" data-term="Pemerasan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pemerasan</a></li>
                                    <li><a href="#" data-term="Penadahan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Penadahan</a></li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-dark mb-3">Kejahatan Jiwa</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" data-term="Pembunuhan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pembunuhan</a></li>
                                    <li><a href="#" data-term="Penganiayaan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Penganiayaan</a></li>
                                    <li><a href="#" data-term="Pengeroyokan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pengeroyokan</a></li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-dark mb-3">Kesusilaan</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" data-term="Pemerkosaan" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pemerkosaan</a></li>
                                    <li><a href="#" data-term="Pelecehan Seksual" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pelecehan Seksual</a></li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-dark mb-3">Kehormatan</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" data-term="Pencemaran Nama" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pencemaran Nama</a></li>
                                    <li><a href="#" data-term="Fitnah" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Fitnah</a></li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-dark mb-3">Dokumen</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" data-term="Pemalsuan Surat" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Pemalsuan Surat</a></li>
                                    <li><a href="#" data-term="Sumpah Palsu" class="category-link block rounded-2xl px-4 py-2 hover:bg-gold hover:text-dark transition">Sumpah Palsu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Center Chat Panel -->
                <main class="lg:col-span-9 flex flex-col min-h-[78vh]">
                    <div class="bg-white rounded-[32px] border border-gray-200 shadow-xl p-6 flex flex-col flex-1">
                        <div class="mb-6">
                            <span class="inline-flex items-center px-4 py-2 rounded-full bg-gold/15 text-gold text-sm font-semibold">Konsultasi Hukum KUHP</span>
                            <h2 class="text-3xl md:text-4xl font-serif font-bold text-dark mt-5">Tanya tentang pasal KUHP & ketahui ancaman hukumnya.</h2>
                            <p class="text-gray-600 mt-4 max-w-2xl">Gunakan kata kunci perbuatan pidana atau pilih kategori untuk mendapatkan ringkasan pasal, bunyi pasal, dan ancaman hukuman yang relevan.</p>
                        </div>

                        <div class="flex-1 flex flex-col overflow-hidden">
                            <form id="chat-form" class="mb-4 flex gap-3 rounded-[28px] border border-gray-200 bg-white p-4 shadow-sm">
                                <input type="text" id="query-input" placeholder="Contoh: pencurian motor, penipuan online, penganiayaan..."
                                       class="flex-1 rounded-[24px] border border-gray-200 bg-slate-50 px-4 py-3 text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none"
                                       required>
                                <button type="submit" class="rounded-[24px] bg-gold px-6 py-3 text-sm font-semibold text-dark hover:bg-yellow-500 transition">
                                    🔍 Cari Pasal
                                </button>
                            </form>

                            <div id="whatsapp-cta" class="hidden mb-4 rounded-[28px] border border-gold bg-yellow-50 p-4 text-center">
                                <p class="text-sm text-dark mb-3 font-semibold">Dapatkan bantuan lanjutan via WhatsApp:</p>
                                <a id="whatsapp-link" href="https://wa.me/62895600544942" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-[24px] bg-gold px-5 py-3 text-sm font-semibold text-dark hover:bg-yellow-500 transition">
                                    Chat WhatsApp Sekarang
                                </a>
                            </div>

                            <div id="loading" class="hidden mb-6 rounded-3xl border border-gray-200 bg-slate-50 p-4 text-center text-sm text-gray-700">
                                <div class="inline-block animate-spin rounded-full h-6 w-6 border-b-2 border-gold"></div>
                                <span class="ml-2">Mencari pasal KUHP...</span>
                            </div>

                            <div id="chat-messages" class="min-h-[250px] overflow-y-auto space-y-4">
                            </div>

                            <div class="mt-6 rounded-[28px] border border-gray-200 bg-white p-5 shadow-sm">
                                <div class="grid gap-4 md:grid-cols-2">
                                    <div class="rounded-[24px] border border-gold/20 bg-gold/10 p-4">
                                        <h3 class="font-semibold text-dark">Bunyi Pasal</h3>
                                        <p class="text-sm text-gray-600 mt-3">Pasal 362 KUHP menyatakan bahwa barang siapa dengan maksud untuk memiliki barang sesuatu yang seluruhnya atau sebagian milik orang lain, mengambil barang tersebut...</p>
                                    </div>
                                    <div class="rounded-[24px] border border-red-200 bg-red-50 p-4">
                                        <h3 class="font-semibold text-dark">Ancaman Hukuman</h3>
                                        <p class="text-sm text-gray-600 mt-3">Pidana penjara paling lama lima tahun atau denda sesuai ketentuan KUHP.</p>
                                    </div>
                                </div>
                                <div class="mt-4 rounded-[24px] border border-yellow-200 bg-yellow-50 p-4">
                                    <h3 class="font-semibold text-dark">Disclaimer</h3>
                                    <p class="text-sm text-yellow-800 mt-2">Informasi ini hanya sebagai referensi umum. Untuk penanganan kasus konkret, konsultasikan dengan penasihat hukum resmi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
</x-app-layout>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatForm = document.getElementById('chat-form');
    const queryInput = document.getElementById('query-input');
    const chatMessages = document.getElementById('chat-messages');
    const loading = document.getElementById('loading');
    const whatsappCta = document.getElementById('whatsapp-cta');
    const categoryLinks = document.querySelectorAll('.category-link');

    if (categoryLinks.length > 0) {
        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                setActiveCategory(link);
                fillCategory(link.dataset.term || '');
            });
        });
        setActiveCategory(categoryLinks[0]);
    }

    queryInput.focus();

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
            showWhatsappCta();

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
        messageBubble.className = `max-w-xs lg:max-w-xl px-4 py-3 rounded-3xl ${
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

    function setActiveCategory(link) {
        categoryLinks.forEach(item => {
            item.classList.remove('bg-gold', 'text-dark', 'font-semibold');
            item.classList.add('hover:bg-gold', 'hover:text-dark');
        });
        link.classList.add('bg-gold', 'text-dark', 'font-semibold');
        link.classList.remove('hover:bg-gold', 'hover:text-dark');
    }

    function fillCategory(term) {
        queryInput.value = term;
        queryInput.focus();
    }

    function showWhatsappCta() {
        if (!whatsappCta.classList.contains('hidden')) return;
        whatsappCta.classList.remove('hidden');
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
                <div class="rounded-3xl border border-gray-200 bg-white p-4 shadow-sm">
                    <h4 class="font-bold text-dark">📋 ${result.pasal} - ${result.judul}</h4>
                    <p class="text-sm text-gray-600 mb-3">Kategori: ${result.kategori}</p>
                    <div class="mb-3 rounded-3xl bg-slate-50 p-4">
                        <p class="font-semibold text-sm">📖 Bunyi Pasal:</p>
                        <p class="text-sm text-gray-700 mt-2">${result.isi_pasal}</p>
                    </div>
                    <div class="mb-3 rounded-3xl bg-red-50 p-4">
                        <p class="font-semibold text-sm">⚖️ Ancaman Hukuman:</p>
                        <p class="text-sm text-red-800 mt-2">${result.ancaman_hukuman}</p>
                    </div>
                    <div class="rounded-3xl bg-yellow-50 p-4">
                        <p class="font-semibold text-sm">⚠️ Disclaimer:</p>
                        <p class="text-sm text-yellow-800 mt-2">Informasi ini bersifat umum. Untuk kasus hukum spesifik, konsultasikan dengan advokat.</p>
                    </div>
                </div>
            `;
            if (index < data.results.length - 1) {
                response += `<hr class="my-4">`;
            }
        });

        response += `</div>`;
        return response;
    }
});
</script>