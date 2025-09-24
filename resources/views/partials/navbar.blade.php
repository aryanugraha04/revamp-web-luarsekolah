<nav class="bg-white h-[104px] flex items-center shadow-[0px_8px_16px_rgba(31,39,56,0.08)]">
    
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="flex items-center justify-between gap-4">

            <div class="flex items-center gap-8">
                <a href="/">
                    <img class="w-[149px] h-[75px] object-contain" src="{{ asset('assets/svg/logo-luarsekolah.svg') }}" alt="Logo Luarsekolah">
                </a>

                <div class="hidden md:flex">
                    <button class="flex items-center gap-1.5 text-lg text-black font-normal font-poppins">
                        <span>Program</span>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex-1 max-w-[621px] hidden lg:flex">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-6 h-6 text-[#9BA1A9]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari Kelas yang ingin kamu pelajari" class="w-full h-11 pl-11 pr-4 border border-[#9BA1A9] rounded-md text-sm placeholder:text-[#9BA1A9] focus:ring-green-500 focus:border-green-500">
                </div>
            </div>

            <div class="hidden md:flex items-center gap-4">
                <a href="#" class="w-[139px] h-11 flex justify-center items-center border border-[#9BA1A9] rounded-md text-[#1F2738] text-sm font-semibold font-poppins hover:bg-gray-50">
                    Masuk
                </a>
                <a href="#" class="w-[139px] h-11 flex justify-center items-center bg-[#005545] rounded-md text-[#E6E7E8] text-sm font-semibold font-poppins hover:bg-[#004437]">
                    Daftar
                </a>
            </div>

        </div>
    </div>
</nav>