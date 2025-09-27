<section class="program-slider-section bg-white py-24 w-full overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
            Mulai Perjalanan Kariermu Bersama <br>
            <span class="text-teal-500">Luar Sekolah</span>
        </h2>
    </div>

    <div class="mt-12">
        <div class="swiper swiper-container overflow-visible">
            <div class="swiper-wrapper">
                @php
                    $programs = [
                        ['image' => 'assets/svg/pbi-program(1).svg'],
                        ['image' => 'assets/svg/pbi-program(2).svg'],
                        ['image' => 'assets/svg/pbi-program(3).svg'],
                        ['image' => 'assets/svg/pbi-program(1).svg'],
                        ['image' => 'assets/svg/pbi-program(2).svg'],
                    ];
                @endphp

                @foreach ($programs as $program)
                    <div class="swiper-slide w-4/5 sm:w-3/5 md:w-1/2 lg:w-[45%] rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset($program['image']) }}" alt="Banner Program" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 flex justify-between items-center">
            <div class="swiper-pagination"></div>
            <div class="flex items-center gap-3">
                <div class="swiper-button-prev">
                    <svg width="5" height="8" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.09306 7.71102L6.75006 13.368L8.16406 11.954L3.21406 7.00401L8.16406 2.05401L6.75006 0.640015L1.09306 6.29701C0.905592 6.48454 0.800276 6.73885 0.800276 7.00401C0.800276 7.26918 0.905592 7.52349 1.09306 7.71102Z" fill="#E6E7E8"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 42 42" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
        </div>
    </div>
</section>