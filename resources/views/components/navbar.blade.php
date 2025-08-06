<nav class="fixed top-0 left-0 w-full bg-black/70 z-50 font-poppins backdrop-blur">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('beranda') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#00BCB5] rounded-lg md:hidden hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center hidden w-full md:flex md:w-auto md:order-1 md:ml-auto" id="navbar-cta">
            <ul
                class="flex flex-col text-xl font-medium p-4 md:p-0 mt-4 border border-gray-200 rounded-lg bg-slate-200 text-gray-900 md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent md:text-slate-100">
                <li>
                    <a href="{{ route('beranda') }}"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'beranda' ? 'bg-[#00BCB5] text-slate-100' : 'hover:text-slate-100 hover:bg-[#00BCB5]' }} md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent {{ $activePage === 'beranda' ? 'md:text-[#00BCB5]' : 'md:text-slate-100' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#profil"
                        class="block py-2 px-3 md:p-2 rounded hover:text-slate-100 hover:bg-[#00BCB5] md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:text-slate-100">
                        Profil
                    </a>
                </li>
                <li>
                    <a href="#visimisi"
                        class="block py-2 px-3 md:p-2 rounded hover:text-slate-100 hover:bg-[#00BCB5] md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:text-slate-100">
                        Visi Misi
                    </a>
                </li>
                <li>
                    <a href="{{ url('/aboutus') }}"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'aboutus' ? 'bg-[#00BCB5] text-slate-100' : 'hover:text-slate-100 hover:bg-[#00BCB5]' }} md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:text-slate-100">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="{{ route('pemesanan') }}"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'pemesanan' ? 'bg-[#00BCB5] text-slate-100' : 'hover:text-slate-100 hover:bg-[#00BCB5]' }} md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:text-slate-100">
                        Produk
                    </a>
                </li>

                <li>
                    <a href="{{ route('kontak') }}"
                        class="block py-2 px-3 md:p-2 rounded {{ $activePage === 'kontak' ? 'bg-[#00BCB5] text-slate-100' : 'hover:text-slate-100 hover:bg-[#00BCB5]' }} md:hover:bg-transparent md:hover:text-[#00BCB5] md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:text-slate-100">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>