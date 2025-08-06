<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <div class="flex">
            {{-- Start Main Content --}}
            <section class="bg-slate-100 font-poppins flex-1">
                <div class="px-6 lg:px-10 py-8 lg:pt-14">
                    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 lg:p-10">
                        {{-- Breadcrumb --}}
                        <nav class="flex mb-6" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                    <a href="{{ route('beranda') }}" class="inline-flex items-center text-sm text-gray-700 hover:text-[#00BCB5]">
                                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <a href="{{ route('articles.index') }}" class="ms-1 text-sm text-gray-700 hover:text-[#00BCB5] md:ms-2">Artikel</a>
                                    </div>
                                </li>
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">{{ Str::limit($article->title, 20) }}</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>

                        {{-- Article Header --}}
                        <div class="mb-8">
                            <span class="text-sm text-gray-500">{{ $article->created_at->format('d F Y') }}</span>
                            <h1 class="text-3xl font-bold mt-2 text-gray-800">{{ $article->title ?? 'Judul Artikel Tidak Tersedia' }}</h1>
                            <div class="mt-3 flex items-center">
                                <span class="text-xs px-2 py-1 bg-[#00BCB5] text-white rounded-full">Artikel</span>
                            </div>
                        </div>

                        {{-- Article Image --}}
                        @if($article->image)
                            <img src="{{ asset( $article->image) }}" alt="{{ $article->title }}" 
                                class="w-full h-auto max-h-96 object-cover rounded-lg mb-8 shadow-md">
                        @else
                            <div class="w-full h-64 bg-gray-200 rounded-lg mb-8 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif

                        {{-- Article Content --}}
                        <div class="prose max-w-none text-gray-700">
                            {!! $article->content ?? '<p class="text-gray-500">Konten artikel tidak tersedia</p>' !!}
                        </div>

                        {{-- Back Button --}}
                        <div class="mt-10 pt-6 border-t border-gray-200">
                            <a href="{{ route('articles.index') }}" 
                               class="text-[#00BCB5] font-medium hover:underline flex items-center transition-colors duration-300 hover:text-[#008a8a]">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                Kembali ke Daftar Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            {{-- End Main Content --}}
        </div>
    @endsection
</x-layout>