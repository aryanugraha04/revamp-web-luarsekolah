<section class="max-w-screen-xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

        <div class="flex flex-col gap-8">
            <div class="bg-[#005545] rounded-[32px] p-10 sm:p-14 flex items-center justify-center min-h-[420px]">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-5xl/[60px] lg:text-[56px]/[60px] font-bold text-[#E6E7E8]">
                            Belajar Skill Raih Karier Impian
                        </h1>
                        <p class="text-base text-white">
                            Ikuti kelas interaktif, program bootcamp, hingga magang nyata untuk mempersiapkan karier yang lebih baik.
                        </p>
                    </div>
                    <a href="#" class="bg-white rounded-md h-[60px] w-full sm:w-[258px] flex items-center p-2.5 group">
                        <span class="flex-grow text-center text-[#1F2738] text-lg font-medium">Daftar Sekarang</span>
                        <div class="bg-[#005545] w-10 h-10 rounded-full flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            @php
                $categories1 = ['Graphic Design', 'Digital Marketing', 'Web Development', 'UI/UX Design'];
            @endphp
            <div class="flex items-center gap-4 overflow-x-auto pb-2">
                @foreach($categories1 as $category)
                    <x-category-chip :name="$category" />
                @endforeach
            </div>

            @php
                $categories2 = ['Software Engineering', 'Social Media Marketing', 'Data Analytic', 'Accounting'];
            @endphp
             <div class="flex items-center gap-4 overflow-x-auto pb-2">
                @foreach($categories2 as $category)
                    <x-category-chip :name="$category" />
                @endforeach
            </div>
        </div>

        <div class="relative min-h-[500px] lg:min-h-0 w-full">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop" alt="Company Profile" class="absolute inset-0 w-full h-full object-cover rounded-[32px]">
            
            <div class="absolute inset-0 flex items-center justify-center">
                <button class="w-24 h-24 rounded-full border-2 border-white flex items-center justify-center bg-white/10 backdrop-blur-sm hover:bg-white/20 transition">
                    <svg class="w-14 h-14 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/50 to-transparent rounded-b-[32px]"></div>
                <div class="relative">
                     <h2 class="text-5xl/[60px] lg:text-[56px]/[60px] font-bold">
                        Company Profile <br> Luar Sekolah
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>