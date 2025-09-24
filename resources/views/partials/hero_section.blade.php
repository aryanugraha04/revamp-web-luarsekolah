<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <div class="flex flex-col gap-8">
            <div class="bg-teal-800 text-white p-8 md:p-12 rounded-3xl flex flex-col items-start gap-8">
                <h1 class="text-4xl md:text-5xl font-[590] leading-tight font-sf-pro ">Belajar Skill <br> Raih Karier Impian</h1>
                <p class="text-gray-200 font-poppins font-normal">Ikuti kelas interaktif, program bootcamp, hingga magang nyata untuk mempersiapkan karier yang lebih baik.</p>
                <a href="#" class="bg-white rounded-md h-[60px] w-full sm:w-[258px] flex items-center justify-between p-2.5 group transition-transform duration-300 ease-in-out hover:scale-105">
                    <span class="pl-4 text-[#1F2738] font-medium font-poppins">
                        Daftar Sekarang
                    </span>
                    <div class="flex items-center justify-center w-10 h-10 bg-[#005545] rounded-full transition-transform duration-300 group-hover:translate-x-1 pr-px">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="flex flex-col gap-4 w-full">
                @php
                    $categories = ['Graphic Design', 'Digital Marketing', 'Data Science', 'Web Development', 'UI/UX Design', 'Software Engineering'];
                @endphp

                <div class="w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]">
                    <div class="flex animate-marquee">
                        @foreach ($categories as $category)
                            <a href="#" class="flex-shrink-0 flex items-center justify-center gap-[10px] h-[67px] py-2 px-4 mx-2 border-2 border-[#00CC99] rounded-full transition-colors hover:bg-[#00CC99]/10">
                                <span class="text-black font-medium whitespace-nowrap font-poppins">{{ $category }}</span>
                                <svg class="w-8 h-8 text-black transform rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                </svg>
                            </a>
                        @endforeach
                        @foreach ($categories as $category)
                            <a href="#" class="flex-shrink-0 flex items-center justify-center gap-[10px] h-[67px] py-2 px-4 mx-2 border-2 border-[#00CC99] rounded-full transition-colors hover:bg-[#00CC99]/10">
                                <span class="text-black font-medium whitespace-nowrap font-poppins">{{ $category }}</span>
                                <svg class="w-8 h-8 text-black transform rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]">
                    <div class="flex animate-marquee-reverse">
                        @foreach ($categories as $category)
                            <a href="#" class="flex-shrink-0 flex items-center justify-center gap-[10px] h-[67px] py-2 px-4 mx-2 border-2 border-[#00CC99] rounded-full transition-colors hover:bg-[#00CC99]/10">
                                <span class="text-black font-medium whitespace-nowrap font-poppins">{{ $category }}</span>
                                <svg class="w-8 h-8 text-black transform rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                </svg>
                            </a>
                        @endforeach
                        @foreach ($categories as $category)
                            <a href="#" class="flex-shrink-0 flex items-center justify-center gap-[10px] h-[67px] py-2 px-4 mx-2 border-2 border-[#00CC99] rounded-full transition-colors hover:bg-[#00CC99]/10">
                                <span class="text-black font-medium whitespace-nowrap font-poppins">{{ $category }}</span>
                                <svg class="w-8 h-8 text-black transform rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-full h-full">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop" alt="Company Profile Luar Sekolah" class="absolute inset-0 w-full h-full object-cover rounded-3xl">
            <div class="absolute inset-0 flex items-center justify-center">
                <button class="bg-white/30 backdrop-blur-sm rounded-full p-4 hover:bg-white/40 transition">
                    <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="absolute bottom-8 left-8">
                <h2 class="text-white text-4xl md:text-5xl font-semibold font-sf-pro drop-shadow-lg">Company Profile <br> Luar Sekolah</h2>
            </div>
        </div>

    </div>
</section>

<section id="stats-section" class="bg-black text-white py-16 sm:py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            
            <div>
                <span class="text-4xl md:text-5xl font-semibold counter font-sf-pro" data-target="3600">0</span>
                <p class="mt-2 text-gray-400 font-normal font-poppins">Alumni</p>
            </div>

            <div>
                <span class="text-4xl md:text-5xl font-semibold counter font-sf-pro" data-target="88" data-suffix="%">0%</span>
                <p class="mt-2 text-gray-400 font-normal font-poppins">Kepuasan Talenta</p>
            </div>

            <div>
                <span class="text-4xl md:text-5xl font-semibold counter font-sf-pro" data-target="20" data-suffix="+">0+</span>
                <p class="mt-2 text-gray-400 font-normal font-poppins">Universitas Bekerjasama</p>
            </div>
            
            <div>
                <span class="text-4xl md:text-5xl font-semibold counter font-sf-pro" data-target="36" data-suffix="+">0+</span>
                <p class="mt-2 text-gray-400 font-normal font-poppins">Partnership</p>
            </div>

        </div>
    </div>
</section>