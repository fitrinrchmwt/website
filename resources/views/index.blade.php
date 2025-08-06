<x-layout :title="$title" :activePage="$activePage">

    {{-- Start Main --}}
    @section('page')
        {{-- Start Main --}}
        <main class="h-screen bg-catering font-poppins flex items-end">
    <div class="absolute inset-0 bg-black opacity-40 z-0 h-screen"></div>

    <div class="relative text-slate-100 z-10 flex flex-col items-start pl-4 pb-20">
        <h2 class="text-3xl md:text-5xl mb-2">Selamat Datang Di</h2>
        <h1 class="text-5xl md:text-7xl font-bold mb-2 text-[#00BCB5]">Wedrink</h1>
        <p class="text-xl md:text-3xl">We Drink, We Share, We Care.</p>
    </div>
</main>


        {{-- End Main --}}

        <div class="flex">
            <x-sidebar :articles="$articles" />
            {{-- Start Section I --}}
            <section class="bg-slate-100 font-poppins flex-1">
                <div class="px-6 lg:px-10 py-8 text-center space-y-2 lg:pt-14">
                    <p class="text-xl font-semibold uppercase">"kualitas menu terbaik <br>dengan harga yang
                        terjangkau."</p>
                    <h2 class="text-sm text-[#00BCB5] font-semibold uppercase">- Minuman Favorit Kita -</h2>
                    <h1 class="text-4xl font-euphoria">Wedrink</h1>
                </div>

                <div
                    class="px-6 lg:px-10 p-10 bg-slate-100 border border-gray-200 rounded-lg shadow flex flex-col justify-center items-center max-w-screen-lg mx-auto">
                    <img src="{{ asset('images/banner4.jpg') }}" alt="Logo WeDrink" class="mx-auto h-auto mb-4">
                    <p class="text-center text-gray-700 text-base leading-relaxed">
                        WeDrink adalah perusahaan minuman yang menghadirkan produk-produk segar dan sehat. Kami berkomitmen
                        untuk menjaga kualitas bahan baku, serta menghadirkan inovasi dalam setiap produk yang kami rilis.
                        Visi
                        kami adalah menjadi pelopor minuman sehat di Indonesia.
                    </p>
                </div>

                <div class="px-6 lg:px-10 pb-10 grid grid-cols-1 md:grid-cols-2 gap-6 lg:pb-10">
                    <div
                        class="md:col-span-2 p-10 bg-slate-100 border border-gray-200 rounded-lg shadow flex flex-col items-center w-full">
                        <!-- Judul -->
                        <div id="profil" class="text-center space-y-3 px-5 mb-6">
                            <h5 class="-mb-5 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">Mengenal</h5>
                            <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700 lg:text-3xl">Profil Wedrink</h1>
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                        </div>

                        <!-- Deskripsi -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-lg text-gray-700 text-justify w-full">
                            <p>
                                PT Runxiang International, adalah perusahaan terdiversifikasi yang mengintegrasikan
                                penelitian
                                dan pengembangan di bidang F&B, produksi bahan baku, manajemen operasi merek, dan pasokan
                                logistik. Runxiang International berkantor pusat di Zhengzhou, Henan, China, dan memiliki
                                cabang
                                di Xinjiang, China, Vancouver, Kanada, dan Jakarta, Indonesia.
                            </p>
                            <p>
                                PT Runxiang International memiliki pengalaman bertahun-tahun dalam produksi produk dan
                                operasi
                                merek. Saat ini, telah membuka banyak pabrik bahan baku di seluruh dunia, dan memiliki lebih
                                dari 3.000 toko kemitraan franchise, yang semuanya menerapkan operasi standar. Reputasi baik
                                di
                                market dan diterima dengan baik oleh konsumen dan dicintai oleh konsumen.
                            </p>
                            <p>
                                PT Runxiang International Indonesia, didirikan pada September 2022, berlokasi di PIK1,
                                Distrik
                                Utara, DKI Jakarta, Indonesia, merupakan kantor pusat operasi dan manajemen merek “WEDRINK”
                                di
                                Indonesia.
                            </p>
                            <p>
                                Perusahaan “WEDRINK” menganut konsep layanan utama kepada pelanggan, menjadikan mitra dan
                                konsumen sebagai inti, beroperasi dengan integritas, dan melayani dengan tulus, menjadikan
                                mitra
                                kaya dan membawakan rasa manis dan kegembiraan bagi konsumen.
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Start Section: Tentang Kami --}}
                <section id="aboutus" class="bg-slate-100 font-poppins">
                    <div class="px-6 lg:px-10 py-10 max-w-screen-lg mx-auto">
                        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Tentang Kami</h2>
                        <p class="text-center text-gray-600 mb-10">
                            WeDrink adalah brand minuman yang hadir dengan misi menghadirkan kesegaran dan kesehatan dalam
                            setiap tegukan. Kami percaya bahwa minuman bukan hanya sekadar pelepas dahaga, tetapi juga
                            bagian dari gaya hidup sehat dan menyenangkan.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700 text-justify">
                            <p>
                                Berdiri di bawah naungan PT Runxiang International Indonesia, WeDrink telah berkembang pesat
                                sejak pertama kali hadir di Jakarta pada tahun 2022. Berbekal pengalaman global dan dukungan
                                dari ribuan outlet franchise di berbagai negara, kami terus memperluas jangkauan serta
                                menjaga standar kualitas internasional.
                            </p>
                            <p>
                                Dengan memadukan cita rasa lokal dan internasional, inovasi dalam produk, serta pelayanan
                                yang tulus, WeDrink ingin menjadi pilihan utama masyarakat Indonesia untuk menikmati minuman
                                yang tidak hanya enak, tapi juga sehat dan berkualitas.
                            </p>
                        </div>
                    </div>
                </section>
                {{-- End Section: Tentang Kami --}}



                <div id="visimisi"
                    class="px-106 lg:px-10 p-10 bg-slate-100 border border-gray-200 rounded-lg shadow flex flex-col justify-center items-center max-w-screen-lg mx-auto lg:pb-20">
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Visi & Misi</h2>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-700">Visi</h3>
                        <p class="text-gray-600 mt-2">
                            Menjadi perusahaan minuman terdepan di Indonesia yang menyegarkan, menyehatkan, dan
                            menginspirasi gaya hidup sehat masyarakat.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">Misi</h3>
                        <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                            <li>Menyediakan produk minuman berkualitas tinggi dengan bahan alami dan proses yang higienis.
                            </li>
                            <li>Mengedepankan inovasi dalam pengembangan rasa dan kemasan yang menarik.</li>
                            <li>Membangun hubungan jangka panjang dengan pelanggan melalui layanan yang ramah dan
                                profesional.</li>
                            <li>Berkontribusi pada kesejahteraan masyarakat dan pelestarian lingkungan.</li>
                        </ul>
                    </div>
                </div>


                {{-- Start Section: Client Kami --}}

                <section class="bg-slate-100 font-poppins">

                    <div id="clientkami" class="px-6 lg:px-10 py-10 max-w-screen-lg mx-auto">
                        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Client Kami</h2>
                        <p class="text-center text-gray-600 mb-10">
                            Kami bangga telah dipercaya oleh berbagai mitra bisnis dan institusi dalam menyediakan minuman
                            berkualitas tinggi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center justify-center">
                            <div class="bg-white p-4 border border-gray-200 rounded-lg shadow text-center">
                                <img src="{{ asset('images/hotel.jfif') }}" alt="Client 1"
                                    class="mx-auto h-20 object-contain">
                                <p class="mt-2 text-sm font-semibold">Hotel Grand Mercure</p>
                            </div>
                            <div class="bg-white p-4 border border-gray-200 rounded-lg shadow text-center">
                                <img src="{{ asset('images/ui.jfif') }}" alt="Client 2" class="mx-auto h-20 object-contain">
                                <p class="mt-2 text-sm font-semibold">Universitas Indonesia</p>
                            </div>
                            <div class="bg-white p-4 border border-gray-200 rounded-lg shadow text-center">
                                <img src="{{ asset('images/tokopedia.jfif') }}" alt="Client 3"
                                    class="mx-auto h-20 object-contain">
                                <p class="mt-2 text-sm font-semibold">PT Tokopedia</p>
                            </div>
                            <div class="bg-white p-4 border border-gray-200 rounded-lg shadow text-center">
                                <img src="{{ asset('images/rsu.jfif') }}" alt="Client 4"
                                    class="mx-auto h-20 object-contain">
                                <p class="mt-2 text-sm font-semibold">RSUP Dr. Sardjito</p>
                            </div>
                        </div>
                    </div>
        </div>
        </section>
        {{-- End Section: Client Kami --}}




        </section>



        {{-- End Section I --}}
        </div>

        {{-- Start Section II --}}
        <section class="bg-slate-100 font-poppins">
            <div class="relative bg-catering2">
                <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
                <div class="relative p-20 text-slate-100 text-center z-10">
                    <h1 class="font-euphoria text-5xl">Berbagai</h1>
                    <h1 class="text-4xl font-semibold">Menu Favorit</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 py-4 px-4 gap-y-8 pb-10 md:grid-cols-4 md:gap-y-8 md:gap-x-6 md:px-10 md:py-10">
                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/foto1.png"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Wedrink Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Grape Lemon Tea</h1>
                    <p class="text-sm">Manis / Segar / Nikmat</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/foto2.png"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="wedrink photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Jeruk</h1>
                    <p class="text-sm">Manis / Segar / Nikmat</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/foto3.png"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="wedrink">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">ce Fresh Passion Fruit Tea</h1>
                    <p class="text-sm">Manis / Segar / Nikmat</p>
                </div>

                <div>
                    <div class="overflow-hidden rounded-lg">
                        <img src="images/foto4.jfif"
                            class="rounded-lg w-full h-[10em] object-cover transition-transform duration-300 hover:scale-110"
                            alt="Wedrink Photo">
                    </div>
                    <h1 class="text-xl font-semibold pt-2">Chocolate Oreo Sundae</h1>
                    <p class="text-sm">Manis / Segar / Nikmat</p>
                </div>
            </div>

        </section>
        {{-- End Section II --}}

        {{-- Start Section III --}}
        <section class="bg-slate-100 font-poppins">
            <div class="relative bg-catering3">
                <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
                <div class="relative p-20 text-slate-100 text-center z-10">
                    <h1 class="font-euphoria text-5xl">Berbagai</h1>
                    <h1 class="text-4xl font-semibold">Pengalaman Terbaik</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-y-6 py-14 lg:gap-y-4">
                <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                    <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko1.jpg" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko2.png" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko3.png" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko4.png" alt="">
                    </div>

                    <div
                        class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-[#00BCB5] -500 flex flex-col justify-center h-full">
                        <div class="text-center space-y-3 px-5">
                            <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                                Berbagai
                            </h5>
                            <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">menu kami</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                            <div class="text-lg space-y-2">
                                <div>Kami berkomitmen untuk menyajikan minuman segar, sehat, dan berkualitas
                                    tinggi dengan layanan profesional untuk setiap kebutuhan Anda.</div>
                                <div>
                                    <a href="/pemesanan" class="underline text-[#00BCB5] font-semibold">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                    <div
                        class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-[#00BCB5] -500 flex flex-col justify-center h-full">
                        <div class="text-center space-y-3 px-5">
                            <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                                Kunjungi
                            </h5>
                            <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Wedrink Kami</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                            <ul class="text-lg space-y-2">
                                <li>Sleman, Yogyakarta</li>
                                <li>0895380190469 (Whatsapp)</li>
                                <li>
                                    <a href="/kontak" class="text-[#00BCB5] -400 underline font-semibold">
                                        Lihat Lokasi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko1.jpg" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko3.png" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko4.png" alt="">
                        <img class="rounded-lg object-cover w-full h-full" src="images/toko2.png" alt="">
                    </div>
                </div>
            </div>


        </section>
        {{-- End Section III --}}
    @endsection
</x-layout>