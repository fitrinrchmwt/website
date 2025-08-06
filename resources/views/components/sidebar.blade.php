<aside class="w-1/4 p-4 border-r border-gray-300 bg-slate-100">
    {{-- Bagian Artikel --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 border-b pb-1 font-poppins">Artikel Terbaru</h3>
        <div x-data="{ showAll: false }" class="text-gray-700">
            <ul class="space-y-2">
                @foreach($articles->take(2) as $article)
                    <li class="hover:bg-gray-200 p-1 rounded transition">
                        <a href="{{ url('articles', $article->slug) }}" class="block text-blue-600 hover:underline">
                            {{ $article->title }}
                        </a>
                        <p class="text-xs text-gray-500 mt-1">
                            {{ $article->created_at->format('d M Y') }}
                        </p>
                    </li>
                @endforeach
                
                <div x-show="showAll" x-transition>
                    @foreach($articles->slice(2) as $article)
                        <li class="hover:bg-gray-200 p-1 rounded transition">
                            <a href="" class="block text-blue-600 hover:underline">
                                {{ $article->title }}
                            </a>
                            <p class="text-xs text-gray-500 mt-1">
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                        </li>
                    @endforeach
                </div>
            </ul>
            
            @if($articles->count() > 2)
                <button 
                    x-on:click="showAll = !showAll" 
                    class="mt-2 text-sm text-blue-600 hover:underline focus:outline-none"
                    x-text="showAll ? 'Sembunyikan' : 'Lihat lainnya (+{{ $articles->count() - 2 }})'">
                </button>
            @endif
            
            <a href="{{ url('articles') }}" class="block mt-2 text-sm text-blue-600 hover:underline">
                Semua Artikel →
            </a>
        </div>
    </div>

    {{-- Bagian Event, Galeri, Klien, Login --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 border-b pb-1 font-poppins">Menu Lainnya</h3>
        <ul class="list-disc list-inside space-y-1 text-gray-700">
            <li><a href="{{ url('/galeri') }}" class="text-blue-600 hover:underline">Event</a></li>
            <li><a href="{{ url('clients') }}" class="text-blue-600 hover:underline">Klien kami</a></li>
            <li><a href="{{ url('login') }}" class="text-blue-600 hover:underline">Login</a></li>
        </ul>
    </div>

    {{-- Bagian Sign in/Sign up --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 border-b pb-1 font-poppins">Akses</h3>
        <div class="space-x-2 text-gray-700">
            @auth
                <a href="{{ url('dashboard') }}" class="text-blue-600 hover:underline">Dashboard</a>
                <span class="text-gray-500">|</span>
                <form action="{{ url('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-600 hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ url('login') }}" class="text-blue-600 hover:underline">Sign in</a>
                <span class="text-gray-500">|</span>
                <a href="{{ url('register') }}" class="text-blue-600 hover:underline">Sign up</a>
            @endauth
        </div>
    </div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>