<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        <div class="lg:col-span-5 flex flex-col gap-8">
            
            <div class="bg-teal-800 text-white p-8 md:p-12 rounded-3xl flex flex-col items-start gap-8">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Belajar Skill <br> Raih Karier Impian
                </h1>
                <p class="text-gray-200">
                    Ikuti kelas interaktif, program bootcamp, hingga magang nyata untuk mempersiapkan karier yang lebih baik.
                </p>
                <a href="#" class="bg-white text-teal-800 font-semibold px-6 py-3 rounded-lg flex items-center gap-3 group transition-transform hover:scale-105">
                    <span>Daftar Sekarang</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="flex flex-wrap gap-4">
                {{--
                    =====================================================
                    DI SINI TEMPAT ANDA MEMASUKKAN ASET KATEGORI
                    =====================================================
                    Anda bisa mengganti array ini dengan data dari database.
                --}}
                @php
                    $categories = ['Graphic Design', 'Digital Marketing', 'Data Science', 'Web Development', 'UI/UX Design'];
                @endphp

                @foreach ($categories as $category)
                    <a href="#" class="flex-shrink-0 flex items-center justify-center gap-[10px] h-[67px] py-2 px-4 border-2 border-[#00CC99] rounded-full transition-colors hover:bg-[#00CC99]/10">
                        <span class="text-black text-xl font-medium">
                            Graphic Design
                        </span>
                        <svg class="w-8 h-8 text-black transform rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                        </svg>
                    </a>
                @endforeach
            </div>

        </div>

        <div class="lg:col-span-7 relative">
            {{-- 
                =====================================================
                DI SINI TEMPAT ANDA MEMASUKKAN ASET GAMBAR
                =====================================================
                Ganti `src` di bawah dengan path gambar Anda.
            --}}
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop" 
                alt="Company Profile Luar Sekolah" 
                class="rounded-3xl w-full h-full object-cover aspect-[4/3] lg:aspect-auto">

            <div class="absolute inset-0 flex items-center justify-center">
                <button class="bg-white/30 backdrop-blur-sm rounded-full p-4 hover:bg-white/40 transition">
                    <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="absolute bottom-8 left-8">
                <h2 class="text-white text-4xl md:text-5xl font-bold drop-shadow-lg">
                    Company Profile <br> Luar Sekolah
                </h2>
            </div>
        </div>

    </div>
</section>