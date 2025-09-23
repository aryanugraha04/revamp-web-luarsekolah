<nav class="bg-white border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center space-x-8">
                <a href="/" class="flex-shrink-0">
                    {{-- Ganti dengan tag SVG logo Anda jika ada --}}
                    <img class="h-8 w-auto" src="{{ asset('assets/svg/logo-luarsekolah.svg') }}" alt="Logo Luarsekolah">
                </a>

                <div class="hidden md:flex">
                    <button class="flex items-center text-gray-700 font-semibold hover:text-green-600">
                        <span>Program</span>
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex-1 max-w-lg mx-8 hidden lg:flex">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Cari Kelas yang ingin kamu pelajari" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="px-6 py-2 border border-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-50">
                    Masuk
                </a>
                <a href="#" class="px-6 py-2 bg-teal-600 text-white font-semibold rounded-md hover:bg-teal-700">
                    Daftar
                </a>
            </div>
        </div>
    </div>
</nav>