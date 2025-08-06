<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <main class="bg-black">
            <!-- Banner/Carousel Section -->
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Isi carousel sesuai kebutuhan -->
            </div>
        </main>

        <section class="px-4 font-poppins bg-slate-100 py-10 lg:px-32">
            <hr class="h-[2px] mb-3 border border-gray-900">
            <h1 class="font-semibold text-2xl uppercase mb-4">Artikel Terbaru</h1>

            <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-8 lg:grid-cols-3 pb-10">
                @if ($articles->isEmpty())
                    <p class="text-gray-500">Tidak ada artikel tersedia saat ini.</p>
                @else
                    @foreach ($articles as $article)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            @if($article->image)
                                <img src="{{ asset( $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-xs text-gray-500">{{ $article->created_at->format('d M Y') }}</span>
                                    <span class="text-xs px-2 py-1 bg-[#00BCB5] text-white rounded-full">Artikel</span>
                                </div>
                                
                                <h3 class="text-xl font-semibold mb-2">
                                    <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-[#00BCB5] transition-colors">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ $article->excerpt ?? Str::limit(strip_tags($article->body), 150) }}
                                </p>
                                
                                <a href="{{ route('articles.show', $article->slug) }}" class="text-[#00BCB5] font-medium hover:underline flex items-center">
                                    Baca selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Pagination -->
            @if($articles->hasPages())
            <div class="pt-10 pb-10 text-center">
                {{ $articles->links() }}
            </div>
            @endif

            <hr class="h-[2px] mb-6 border border-gray-900">

            <!-- Additional Content -->
            <div class="grid grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-x-6 md:gap-y-0">
                <div class="bg-gray-900 rounded-lg shadow-b-md shadow-gray-900">
                    <img src="{{ asset('images/banner1.jpg') }}" alt="Wedrink" class="w-full h-[12em]">
                </div>
                <div class="bg-gray-900 rounded-lg shadow-b-md shadow-gray-900">
                    <img src="{{ asset('images/banner2.jpg') }}" alt="Wedrtink" class="w-full h-[12em]">
                </div>
            </div>
        </section>
    @endsection
</x-layout>