<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start Hero Section --}}
        <main class="relative h-[60vh] bg-cover bg-center overflow-x-hidden bg-about md:h-[75vh]">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="relative z-10 flex items-center justify-center h-full md:pt-12">
                <div class="text-center max-w-2xl w-full px-5 md:pl-10 lg:pl-7">
                    <h1 class="text-6xl text-[#00BCB5] font-medium tracking-tight mb-2 font-euphoria lg:mb-5 md:text-8xl">
                        Tentang Kami</h1>
                    <p class="text-xl font-poppins font-semibold uppercase text-slate-100 md:text-4xl">WeDrink Indonesia</p>
                </div>
            </div>
        </main>
        {{-- End Hero Section --}}

        {{-- Start Tentang Section --}}
        <section class="bg-slate-100 py-14">
            <div class="container mx-auto px-6 lg:px-32 grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex justify-center">
                    <img src="{{ asset('images/tentang-kami.jpg') }}" alt="Tentang Kami" class="rounded-lg shadow-md w-full h-auto object-cover">
                </div>
                <div class="flex flex-col justify-center space-y-4 font-poppins">
                    <h2 class="text-3xl font-bold text-gray-800 uppercase">Siapa Kami?</h2>
                    <p class="text-gray-700 text-lg">
                        <strong>WeDrink</strong> adalah perusahaan minuman lokal yang berdedikasi menghadirkan produk minuman sehat, segar, dan inovatif untuk masyarakat Indonesia. 
                        Dengan semangat <em>"Minum Sehat, Hidup Hebat"</em>, kami percaya bahwa setiap tegukan membawa energi dan kebahagiaan.
                    </p>
                    <p class="text-gray-700 text-lg">
                        Berdiri sejak tahun 2015, WeDrink telah menjangkau ribuan pelanggan dan terus berkembang dengan produk unggulan serta pelayanan terbaik.
                    </p>
                </div>
            </div>
        </section>
        {{-- End Tentang Section --}}

        {{-- Start Visi Misi --}}
        <section class="bg-white py-14">
            <div class="container mx-auto px-6 lg:px-32 grid grid-cols-1 md:grid-cols-2 gap-10 font-poppins">
                <div>
                    <h3 class="text-2xl font-bold text-[#00BCB5] mb-3">Visi Kami</h3>
                    <p class="text-gray-700 text-lg">
                        Menjadi brand minuman lokal terdepan yang menginspirasi gaya hidup sehat dan berkelanjutan di Indonesia.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-[#00BCB5] mb-3">Misi Kami</h3>
                    <ul class="list-disc pl-6 text-gray-700 text-lg space-y-2">
                        <li>Menghadirkan produk minuman sehat berbahan alami berkualitas.</li>
                        <li>Memberikan pelayanan profesional dan cepat kepada pelanggan.</li>
                        <li>Mendukung pelestarian lingkungan melalui proses produksi yang ramah lingkungan.</li>
                        <li>Berinovasi sesuai tren dan kebutuhan konsumen.</li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- End Visi Misi --}}

        {{-- Start Statistik --}}
        <section class="bg-slate-100 py-14 font-poppins">
            <div class="container mx-auto px-6 lg:px-32 text-center">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                    <div>
                        <h1 class="text-5xl font-bold text-[#00BCB5] counter" data-target="10">0</h1>
                        <p class="uppercase font-semibold text-gray-700 mt-2">Tahun Berpengalaman</p>
                    </div>
                    <div>
                        <h1 class="text-5xl font-bold text-[#00BCB5] counter" data-target="20">0</h1>
                        <p class="uppercase font-semibold text-gray-700 mt-2">Varian Produk</p>
                    </div>
                    <div>
                        <h1 class="text-5xl font-bold text-[#00BCB5] counter" data-target="15">0</h1>
                        <p class="uppercase font-semibold text-gray-700 mt-2">Cabang di Indonesia</p>
                    </div>
                    <div>
                        <h1 class="text-5xl font-bold text-[#00BCB5] counter" data-target="30">0</h1>
                        <p class="uppercase font-semibold text-gray-700 mt-2">Karyawan Profesional</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Statistik --}}

        {{-- Start Ajakan --}}
        <section class="relative bg-catering2 bg-cover bg-center bg-fixed h-auto">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex items-center justify-center h-full py-16">
                <div class="text-center text-white font-poppins px-6 space-y-3 bg-black bg-opacity-70 rounded-lg py-10">
                    <h2 class="text-3xl font-euphoria text-[#00BCB5]">Bergabung Bersama Kami</h2>
                    <h1 class="text-2xl uppercase font-semibold">WeDrink Indonesia</h1>
                    <p class="text-lg">Mari bersama menciptakan generasi sehat dan aktif dengan minuman alami dan berkualitas.</p>
                    <a href="/kontak" class="text-[#00BCB5] underline font-semibold">Hubungi Kami</a>
                </div>
            </div>
        </section>
        {{-- End Ajakan --}}
    @endsection
</x-layout>
