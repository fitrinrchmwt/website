<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>
        <section class="bg-slate-100 font-cabin lg:px-20">
            <div class="w-full py-20">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506007.182312107!2d109.83281135559079!3d-7.770610692730174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f3d15e5869%3A0x3904e5fef1543773!2sWedrink%20Seturan!5e0!3m2!1sid!2sid!4v1754418552999!5m2!1sid!2sid"
                    height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                

                <div class="grid md:pt-20">
                    <div class="bg-white rounded-lg md:px-10">
                        <div class="py-10 px-4 space-y-4">
                            <h1 class="text-3xl font-playfair">Informasi Kontak</h1>
                            <p class="text-md">Hubungi kam, informasi
                                <br>Minuman, dan layanan
                                Wedrink terbaik dengan respon cepat
                            </p>
                        </div>
                        <div class="px-4 pb-6">
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path fill="#F6E05E" stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                                </svg>
                                <h2 class="text-xl">Email</h2>
                            </div>
                            <a href="mailto:alanzagi2007@gmail.com" target="_blank"
                                class="text-md">fitriananrchmwt@gmail.com
                        </div>

                        <div class="px-4 pb-6">
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path fill="#F6E05E" stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                </svg>

                                <h2 class="text-xl">Nomor</h2>
                            </div>
                            <a href="https://wa.me/62895390190469" target="_blank" class="text-md">0895380190469</a>
                        </div>

                        <div class="px-4 pb-12">
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path fill="#F6E05E" stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                                <h2 class="text-xl">Alamat</h2>
                            </div>
                            <a href="mailto:alanzagi2007@gmail.com" target="_blank" class="text-md">Sleman, Daerah Istimewa
                                Yogyakarta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layout>