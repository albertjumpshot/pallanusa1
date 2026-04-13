@section('title', 'Tim Pengacara - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-serif font-bold">Tim Pengacara Kami</h1>
            <p class="text-gray-300 mt-2">Profesional berpengalaman siap memberikan layanan hukum terbaik</p>
        </div>
    </section>

    <!-- Lawyers Team -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($lawyers->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($lawyers as $lawyer)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        @if($lawyer->photo)
                            <img src="{{ asset('storage/' . $lawyer->photo) }}" alt="{{ $lawyer->name }}" class="w-full h-64 object-cover">
                        @else
                            <div class="h-64 bg-gradient-to-br from-gold to-yellow-400 opacity-30 flex items-center justify-center">
                                <span class="text-6xl">👨‍⚖️</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-serif font-bold text-dark mb-2">{{ $lawyer->name }}</h3>
                            <p class="text-gold font-semibold text-sm mb-4">{{ $lawyer->specialization }}</p>
                            
                            <div class="mb-4">
                                <h4 class="text-sm font-semibold text-dark mb-2">Pendidikan</h4>
                                <p class="text-gray-600 text-sm">{{ Str::limit($lawyer->education, 100) }}</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="text-sm font-semibold text-dark mb-2">Pengalaman</h4>
                                <p class="text-gray-600 text-sm">{{ Str::limit($lawyer->experience, 100) }}</p>
                            </div>

                            <a href=\"mailto:{{ config('contact.email.primary') }}\" class=\"bg-gold text-dark px-4 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300 text-sm inline-block\">
                                Hubungi
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-600 text-lg mb-4">Tim pengacara akan ditampilkan di sini.</p>
                    <p class="text-gray-500">Untuk saat ini, hubungi kami melalui formulir kontak atau telepon.</p>
                </div>

                <!-- Display Sample Lawyers -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    @php
                        $sampleLawyers = [
                            [
                                'name' => 'Budi Santoso, S.H., M.H.',
                                'specialization' => 'Hukum Bisnis & Perdata',
                                'education' => 'S.H. Universitas Indonesia, M.H. Universitas Gadjah Mada',
                                'experience' => 'Pengalaman 20+ tahun dalam praktik hukum bisnis, merger & akuisisi, dan sengketa komersial'
                            ],
                            [
                                'name' => 'Ratna Wijaya, S.H.',
                                'specialization' => 'Hukum Keluarga & Warisan',
                                'education' => 'S.H. Universitas Hasanuddin',
                                'experience' => 'Spesialis hukum keluarga dan warisan dengan pengalaman 15 tahun, ahli mediasi perceraian'
                            ],
                            [
                                'name' => 'Dr. Andi Gunawan, S.H., M.H.',
                                'specialization' => 'Hukum Pidana',
                                'education' => 'S.H. Universitas Diponegoro, M.H. & Dr. Universitas Padjajaran',
                                'experience' => 'Advokat pidana berpengalaman 18 tahun, ahli dalam kasus pidana khusus dan white-collar crime'
                            ],
                            [
                                'name' => 'Siti Nurhaliza, S.H.',
                                'specialization' => 'Hukum Perdata & Properti',
                                'education' => 'S.H. Universitas Andalas',
                                'experience' => 'Pengalaman 12 tahun dalam kasus properti, tanah, dan sengketa perdata lainnya'
                            ],
                            [
                                'name' => 'Bambang Hermawan, S.H., LLM.',
                                'specialization' => 'Hukum Bisnis & Investasi',
                                'education' => 'S.H. Universitas Brawijaya, LLM Universitas New South Wales Australia',
                                'experience' => 'Expert dalam corporate law, investasi asing, dan kontrak internasional (10 tahun pengalaman)'
                            ],
                            [
                                'name' => 'Dewi Lestari, S.H.',
                                'specialization' => 'Hukum Perburuhan & Ketenagakerjaan',
                                'education' => 'S.H. Universitas Trisakti',
                                'experience' => 'Spesialis hukum perburuhan dan hubungan industrial dengan pengalaman 8 tahun'
                            ],
                        ]
                    @endphp
                    @foreach($sampleLawyers as $lawyer)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="h-64 bg-gradient-to-br from-gold to-yellow-400 opacity-30 flex items-center justify-center">
                            <span class="text-6xl">👨‍⚖️</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-serif font-bold text-dark mb-2">{{ $lawyer['name'] }}</h3>
                            <p class="text-gold font-semibold text-sm mb-4">{{ $lawyer['specialization'] }}</p>
                            
                            <div class="mb-4">
                                <h4 class="text-sm font-semibold text-dark mb-2">Pendidikan</h4>
                                <p class="text-gray-600 text-sm">{{ $lawyer['education'] }}</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="text-sm font-semibold text-dark mb-2">Pengalaman</h4>
                                <p class="text-gray-600 text-sm">{{ $lawyer['experience'] }}</p>
                            </div>

                            <a href=\"mailto:{{ config('contact.email.primary') }}\" class=\"bg-gold text-dark px-4 py-2 rounded font-semibold hover:bg-yellow-500 transition duration-300 text-sm inline-block\">
                                Hubungi
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold text-gold mb-2">50+</div>
                <p class="text-gray-600">Profesional Hukum</p>
            </div>
            <div>
                <div class="text-5xl font-bold text-gold mb-2">20+</div>
                <p class="text-gray-600">Tahun Pengalaman</p>
            </div>
            <div>
                <div class="text-5xl font-bold text-gold mb-2">3000+</div>
                <p class="text-gray-600">Kasus Ditangani</p>
            </div>
            <div>
                <div class="text-5xl font-bold text-gold mb-2">95%</div>
                <p class="text-gray-600">Tingkat Kepuasan</p>
            </div>
        </div>
    </div>
</section>
</x-app-layout>