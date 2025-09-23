<section class="bg-white py-16 sm:py-20">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="bg-teal-700 text-white p-10 rounded-2xl">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Belajar Skill <br> Raih Karier Impian
                </h1>
                <p class="mt-4 text-lg text-teal-100">
                    Ikuti kelas interaktif, program bootcamp, hingga magang nyata untuk mempersiapkan karier yang lebih baik.
                </p>
                <a href="#" class="mt-8 inline-flex items-center justify-between bg-white text-teal-700 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition duration-300 w-full sm:w-auto">
                    <span>Daftar Sekarang</span>
                    <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="relative rounded-2xl overflow-hidden h-96">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Suasana kantor modern" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col items-center justify-center text-white p-6">
                    <button class="bg-white bg-opacity-20 rounded-full p-4 hover:bg-opacity-30 backdrop-blur-sm transition">
                        <svg class="h-12 w-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <h2 class="mt-4 text-3xl font-bold">Company Profile</h2>
                    <h3 class="text-2xl font-semibold">Luar Sekolah</h3>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-wrap gap-4 justify-center">
            @php
                $categories = ['Graphic Design', 'Digital Marketing', 'Data Science', 'Web Development', 'UI/UX Design'];
            @endphp

            @foreach ($categories as $category)
                <a href="#" class="flex items-center px-5 py-2 border border-gray-300 rounded-full text-gray-700 font-semibold hover:bg-gray-100 hover:border-gray-400 transition">
                    <span>{{ $category }}</span>
                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            @endforeach
        </div>

    </div>
</section>

<section class="bg-black text-white py-16 sm:py-20">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-4xl md:text-5xl font-bold">3.600</p>
                <p class="mt-2 text-gray-400">Alumni</p>
            </div>
            <div>
                <p class="text-4xl md:text-5xl font-bold">88%</p>
                <p class="mt-2 text-gray-400">Kepuasan Talenta</p>
            </div>
            <div>
                <p class="text-4xl md:text-5xl font-bold">20+</p>
                <p class="mt-2 text-gray-400">Universitas Bekerjasama</p>
            </div>
            <div>
                <p class="text-4xl md:text-5xl font-bold">36+</p>
                <p class="mt-2 text-gray-400">Partnership</p>
            </div>
        </div>
    </div>
</section>