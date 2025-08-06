<x-layout :title="'Galeri Kegiatan'" :activePage="'galeri'">
    @section('page')
        <section class="bg-slate-100 font-poppins">
            {{-- Hero Section --}}
            <div class="relative bg-[asset('/images/banner3.jpg')] bg-cover bg-center h-64 pt-20">
                <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
                <div class="relative flex flex-col justify-center items-center h-full text-white z-10">
                    <h1 class="font-euphoria text-5xl mb-2">Event</h1>
                    <h2 class="text-3xl font-semibold">Gallery Wedrink</h2>
                </div>
            </div>

            {{-- Galeri Grid --}}
            <div class="container mx-auto py-12 px-4 md:px-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    {{-- Gambar 1 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto5.jfif') }}" alt="foto 1" class="w-full h-60 object-cover">
                    </div>

                    {{-- Gambar 2 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto6.jfif') }}" alt="foto 2" class="w-full h-60 object-cover">
                    </div>

                    {{-- Gambar 3 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto4.jfif') }}" alt="foto 3" class="w-full h-60 object-cover">
                    </div>

                    {{-- Gambar 4 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto4.jfif') }}" alt="foto 4" class="w-full h-60 object-cover">
                    </div>

                    {{-- Gambar 5 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto5.jfif') }}" alt="foto 5" class="w-full h-60 object-cover">
                    </div>

                    {{-- Gambar 6 --}}
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300 bg-white">
                        <img src="{{ asset('images/foto6.jfif') }}" alt="foto 6" class="w-full h-60 object-cover">
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
