<section class="max-w-7xl mx-auto pt-[100px]">
    {{-- Header  --}}
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl text-[#000000] font-poppins font-semibold">Artikel Terkini</h2>
        <a href="https://www.luarsekolah.com/artikel" class="text-gray-600 hover:text-gray-800 flex items-center gap-1">
            Lihat Semua
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

    {{-- Main Content Grid  --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
        {{-- Featured Article (Left)  --}}
        <a href="https://www.luarsekolah.com/artikel/belajar-skill-buka-jalan-karier-baru" class="space-y-4">
            <div class="space-y-4">
                <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden">
                    <img src="{{ $articles[2]->image }}" alt="Featured Article" class="w-full h-full object-cover">
                </div>
                <div class="space-y-3">
                    <p class="text-sm text-gray-500 font-poppins font-normal">{{ $articles[2]->mentor->name }}, 18 September 2025</p>
                    <h3 class="text-xl text-gray-900 leading-tight font-poppins font-semibold">
                        {{ $articles[2]->title }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed font-poppins font-normal">
                        {{ Str::limit($articles[2]->content, 100) }}
                    </p>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Komunitas</span>
                    </div>
                </div>
            </div>
        </a>
        {{-- Side Articles (Right)  --}}
        <div class="space-y-6">
            {{-- Article 1  --}}
            <a href="https://www.luarsekolah.com/artikel/project-based-internship-bangun-portofolio-dan-pengalaman-nyata-tanpa-seleksi" class="flex gap-4">
                <div class="flex gap-4">
                    <div class="w-72 h-42 bg-yellow-400 rounded-lg overflow-hidden flex-shrink-0">
                        <img src="{{ $articles[3]->image }}" alt="Promo" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 space-y-2">
                        <p class="text-xs text-gray-500 font-poppins font-normal">{{ $articles[3]->mentor->name }}, 18 September 2025</p>
                        <h4 class="text-sm font-semibold text-gray-900 leading-tight font-poppins">
                            {{ $articles[3]->title }}
                        </h4>
                        <p class="text-xs text-gray-600 leading-relaxed font-poppins font-normal">
                            {{ Str::limit($articles[3]->content, 100) }}
                        </p>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Komunitas</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Belajar Bekerja</span>
                        </div>
                    </div>
                </div>
            </a>
            {{-- Article 2  --}}
            <a href="https://www.luarsekolah.com/artikel/luarsekolah-dan-universitas-brawijaya-gelar-webinar-pathfinder-navigating-your-career-journey" class="flex gap-4">
                <div class="flex gap-4">
                    <div class="w-72 h-42 bg-gray-800 rounded-lg overflow-hidden flex-shrink-0">
                        <img src="{{ $articles[4]->image }}" alt="Kolaborasi" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 space-y-2">
                        <p class="text-xs text-gray-500 font-poppins font-normal">{{ $articles[4]->mentor->name }}, 18 September 2025</p>
                        <h4 class="text-sm font-semibold text-gray-900 leading-tight font-poppins">
                            {{ $articles[4]->title }}
                        </h4>
                        <p class="text-xs text-gray-600 leading-relaxed font-poppins font-normal">
                            {{ Str::limit($articles[4]->content, 100) }}
                        </p>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Kolaborasi</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Komunitas</span>
                        </div>
                    </div>
                </div>
            </a>
            {{-- Article 3  --}}
            <a href="https://www.luarsekolah.com/artikel/work-in-motion-office-experience-day" class="flex gap-4">
                <div class="flex gap-4">
                    <div class="w-72 h-42 bg-gray-200 rounded-lg overflow-hidden flex-shrink-0">
                        <img src="{{ $articles[5]->image }}" alt="Office" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 space-y-2">
                        <p class="text-xs text-gray-500 font-poppins font-normal">{{ $articles[5]->mentor->name }}, 18 September 2025</p>
                        <h4 class="text-sm font-semibold text-gray-900 leading-tight font-poppins">
                            {{ $articles[5]->title }}
                        </h4>
                        <p class="text-xs text-gray-600 leading-relaxed font-poppins font-normal">
                            {{ Str::limit($articles[5]->content, 100) }}
                        </p>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Komunitas</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full border font-poppins font-normal">Project Based Internship</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Bottom CTA Cards  --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-20">
        {{-- Dark CTA Card  --}}
        <div class="relative bg-gray-800 rounded-2xl overflow-hidden w-[606px] h-[333px] ">
            <div class="absolute inset-0">
                <img src={{ asset('assets/svg/artikel-belajarbekerja.svg') }} alt="Background" class="w-full h-full object-cover opacity-30">
            </div>
            <div class="relative text-white mt-[81px] ml-[45px] w-[488px] h-[203px]">
                <h3 class="text-xl mb-4 leading-tight font-poppins font-medium">
                    Langsung disalurkan kerja setelah menyelesaikan program
                </h3>
                <p class="text-sm text-gray-200 mb-6 leading-relaxed font-poppins font-normal">
                    Program Belajar Bekerja Bootcamp dari Luarsekolah hadir untuk membantumu dalam meraih pekerjaan impian hanya dalam waktu 6 bulan*
                </p>
                <a href="https://belajarbekerja.com" class="bg-white text-gray-900 px-6 py-2 rounded-lg font-normal hover:bg-gray-100 transition-colors font-poppins">
                    Cek Program Tersedia
                </a>
            </div>
        </div>

        {{-- Yellow CTA Card  --}}
        <div class="relative rounded-2xl overflow-hidden w-[606px] h-[333px] 
        bg-[linear-gradient(-270deg,#FFA500_0%,rgba(255,180,0,0.7)_70%,rgba(255,165,0,0)_100%)]
        ">
            <div class="absolute inset-0">
                <img src={{ asset('assets/svg/artikel-pbi.svg') }} alt="Background" class="w-full h-full object-cover opacity-20 scale-x-[-1]">
            </div>
            <div class="relative text-gray-900 mt-[81px] ml-[45px] w-[488px] h-[203px]">
                <h3 class="text-xl mb-4 leading-tight font-poppins font-medium">
                    Dapatkan pengalaman magang dari real case industry
                </h3>
                <p class="text-sm text-gray-800 mb-6 leading-relaxed font-poppins font-normal">
                    Program Project-based Internship memberikan kamu untuk memiliki pengalaman "magang" dengan hanya mengerjakan project dari top company*
                </p>
                <a href="https://pbi.belajarbekerja.com/" class="bg-[#006752] text-white px-6 py-2 rounded-lg font-normal hover:bg-teal-700 transition-colors font-poppins">
                    Cek Program Tersedia
                </a>
            </div>
        </div>
    </div>
</section>
