@section('title', $article->title . ' - Pallanusa Darmasastra Law Firm')

<x-app-layout>
    <!-- Article Header -->
    <section class="bg-gradient-to-r from-dark to-gray-900 text-white py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-4">
                <span class="bg-gold text-dark px-3 py-1 rounded text-xs font-semibold">{{ $article->category ?? 'Hukum' }}</span>
                @if($article->published_at)
                <span class="text-gray-300 text-sm ml-4">{{ $article->published_at->format('d M Y') }}</span>
                @endif
            </div>
            <h1 class="text-4xl font-serif font-bold">{{ $article->title }}</h1>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-96 object-cover rounded-lg mb-8 shadow-lg">
            @endif
            <article class="prose prose-lg max-w-none">
                {!! nl2br(e($article->content)) !!}
            </article>

            <!-- Source Link -->
            @if($article->url)
                <div class="mt-8 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                    <p class="text-sm text-gray-700 mb-2">📚 <strong>Sumber Artikel:</strong></p>
                    <a href="{{ $article->url }}" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 hover:underline break-all">
                        {{ $article->url }}
                    </a>
                </div>
            @endif

            <!-- Back to Blog -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <a href="{{ route('blog') }}" class="text-gold font-semibold hover:text-yellow-500 transition duration-300">
                    ← Kembali ke Blog
                </a>
            </div>

            <!-- Related Articles -->
            <div class="mt-12">
                <h3 class="text-2xl font-serif font-bold text-dark mb-6">Artikel Terkait</h3>
                @if($relatedArticles->isEmpty())
                    <p class="text-gray-600">Tidak ada artikel terkait untuk kategori ini.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($relatedArticles as $related)
                        <div class="bg-gray-50 p-6 rounded-lg hover:shadow-lg transition duration-300">
                            <span class="bg-gold text-dark px-3 py-1 rounded text-xs font-semibold">{{ $related->category ?? 'Hukum' }}</span>
                            <h4 class="text-lg font-serif font-bold text-dark mt-3 mb-2">{{ $related->title }}</h4>
                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($related->content, 100) }}</p>
                            <a href="{{ route('blog.show', $related) }}" class="text-gold font-semibold text-sm hover:text-yellow-500 transition duration-300">
                                Baca →
                            </a>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @include('components.cta')


</x-app-layout>