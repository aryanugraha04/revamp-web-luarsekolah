<div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-semibold font-poppins text-gray-900 mb-2">
                Mulai Perjalanan Kariermu Bersama
            </h2>
            <h3 class="text-3xl md:text-4xl font-semibold font-poppins text-[#00CC99]">
                Luar Sekolah
            </h3>
        </div>

        <!-- Banner Slider Section -->
        <div class="relative mb-8">
            <!-- Parallax slider container with fixed height -->
            <div id="slider-container" class="relative w-full" style="height: 450px;">
                <div class="absolute inset-0 flex items-center justify-center overflow-visible">
                    <div id="parallaxSlider" class="flex items-center gap-6 will-change-transform" style="transition: transform 0.7s ease-in-out;">
                        
                        {{-- <!-- Duplicate last slide for infinite loop -->
                        <div class="parallax-slide flex-shrink-0" style="width: 350px; height: 250px; opacity: 0.7; transform: scale(0.9); transition: all 0.5s ease-in-out;">
                            <div class="relative w-full h-full rounded-2xl overflow-hidden shadow-xl bg-gradient-to-r from-yellow-400 to-yellow-600">
                                <img src="{{ asset('assets/svg/pbi-program-3.svg') }}" 
                                    alt="Program Banner 3" 
                                    class="absolute inset-0 w-full h-full object-cover"
                                    style="display: block;">
                            </div>
                        </div> --}}

                        <!-- Slide 1 -->
                        <a href="{{ $banners[0]->link }}">
                            <div class="parallax-slide flex-shrink-0" data-index="0" style="width: 500px; height: 300px; opacity: 1; transform: scale(1); z-index: 10; transition: all 0.5s ease-in-out;">
                                <div class="relative w-full h-full rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                                    <img src="{{ asset($banners[0]->image) }}" 
                                        alt="Program Banner 1" 
                                        class="absolute inset-0 w-full h-full object-cover"
                                        style="display: block;">
                                </div>
                            </div>
                        </a>
                        
                        <!-- Slide 2 -->
                        <a href="{{ $banners[1]->link }}">
                            <div class="parallax-slide flex-shrink-0" data-index="1" style="width: 350px; height: 250px; opacity: 0.7; transform: scale(0.9); transition: all 0.5s ease-in-out;">
                                <div class="relative w-full h-full rounded-2xl overflow-hidden shadow-xl bg-gradient-to-r from-blue-400 to-blue-600">
                                    <img src="{{ asset($banners[1]->image) }}" 
                                        alt="Program Banner 2" 
                                        class="absolute inset-0 w-full h-full object-cover"
                                        style="display: block;">
                                </div>
                            </div>
                        </a>
                        
                        <!-- Slide 3 -->
                        <a href="{{ $banners[2]->link }}">
                            <div class="parallax-slide flex-shrink-0" data-index="2" style="width: 350px; height: 250px; opacity: 0.7; transform: scale(0.9); transition: all 0.5s ease-in-out;">
                                <div class="relative w-full h-full rounded-2xl overflow-hidden shadow-xl bg-gradient-to-r from-yellow-400 to-yellow-600">
                                    <img src="{{ asset($banners[2]->image) }}" 
                                        alt="Program Banner 3" 
                                        class="absolute inset-0 w-full h-full object-cover"
                                        style="display: block;">
                                </div>
                            </div>
                        </a>
                        

                        {{-- <!-- Duplicate first slide for infinite loop -->
                        <div class="parallax-slide flex-shrink-0" style="width: 350px; height: 250px; opacity: 0.7; transform: scale(0.9); transition: all 0.5s ease-in-out;">
                            <div class="relative w-full h-full rounded-2xl overflow-hidden shadow-xl bg-gradient-to-r from-teal-400 to-teal-600">
                                <img src="{{ asset('assets/svg/pbi-program-1.svg') }}" 
                                    alt="Program Banner 1" 
                                    class="absolute inset-0 w-full h-full object-cover"
                                    style="display: block;">
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls Container -->
        <div class="flex justify-between items-center mb-16">
            <!-- Pagination Dots - Bottom Left -->
            <div class="flex space-x-2">
                <button class="pagination-dot w-3 h-3 rounded-full bg-teal-500 transition-colors" data-slide="0"></button>
                <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300 transition-colors" data-slide="1"></button>
                <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300 transition-colors" data-slide="2"></button>
                {{-- <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300 transition-colors" data-slide="3"></button>
                <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300 transition-colors" data-slide="4"></button> --}}
            </div>

            <!-- Navigation Arrows - Bottom Right -->
            <div class="flex space-x-2">
                <button id="prevBtn" class="w-12 h-12 bg-teal-600 hover:bg-teal-700 text-white rounded-full flex items-center justify-center transition-colors shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="w-12 h-12 bg-teal-600 hover:bg-teal-700 text-white rounded-full flex items-center justify-center transition-colors shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Program Cards Section  --}}
        <div class="mb-16 mt-[100px]">
            {{-- Floating Program Tags  --}}
            <div class="relative mb-12">
                <div class="absolute -top-16 -right-20 w-[450px] h-[150px] hidden md:block">
                    <img src="{{ asset('assets/svg/programs-list.svg') }}" 
                         alt="Program Tags" 
                         class="w-[355px] h-[165px] object-cover"
                         style="display: block;">
                </div>
                <h3 class="text-2xl md:text-2xl font-semibold font-poppins text-gray-800">
                    Program dari Luarsekolah
                </h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[26px] mt-[100px]">
                {{-- Kartu Prakerja  --}}
                <a href="{{ $programs[0]->link }}">
                    <div href class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out border border-[#9BA1A9] w-[394px] h-[380px] card-program prakerja">
                        <div class="text-center mb-6">
                            <img src="{{ $programs[0]->image }}" alt="mascot-prakerja">
                        </div>
                        <div class="border-t border-[#9BA1A9] px-6 pt-6 pb-6 mt-9">
                            <h4 class="text-xl font-medium font-poppins text-gray-900 mb-3">{{ $programs[0]->name }}</h4>
                            <p class="text-gray-600 text-sm font-poppins font-normal">
                                {{ $programs[0]->description }}
                            </p>
                        </div>
                    </div>
                </a>
                

                {{-- Belajar Bekerja  --}}
                <a href="{{ $programs[1]->link }}">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out border border-[#9BA1A9] w-[394px] h-[380px] card-program belajarbekerja">
                        <div class="text-center mb-6">
                            <img src="{{ $programs[1]->image }}" alt="mascot-belajarbekerja">
                        </div>
                        <div class="border-t border-[#9BA1A9] px-6 pt-6 pb-6 mt-14">
                            <h4 class="text-xl font-medium font-poppins text-gray-900 mb-3">{{ $programs[1]->name }}</h4>
                            <p class="text-gray-600 text-sm font-poppins font-normal">
                                {{ $programs[1]->description }}
                            </p>
                        </div>
                    </div>
                </a>
                

                {{-- Prakerja ISW  --}}
                <a href="{{ $programs[2]->link }}">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out border border-[#9BA1A9] w-[394px] h-[380px] card-program isw">
                        <div class="text-center">
                            <img src="{{ $programs[2]->image }}" alt="mascot-isw">
                        </div>
                        <div class="border-t border-[#9BA1A9] px-6 pt-6 pb-6">
                            <h4 class="text-xl font-medium font-poppins text-gray-900 mb-3">{{ $programs[2]->name }}</h4>
                            <p class="text-gray-600 text-sm font-normal font-poppins">
                                {{ $programs[2]->description }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tambahkan referensi ke kontainer slider
    const sliderContainer = document.getElementById('slider-container');
    const slider = document.getElementById('parallaxSlider');
    const slides = document.querySelectorAll('.parallax-slide[data-index]');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const paginationDots = document.querySelectorAll('.pagination-dot');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let isTransitioning = false;
    
    // --- FUNGSI INI TELAH DIPERBARUI SECARA SIGNIFIKAN ---
    function getSlidePosition(targetIndex) {
        // Jika kontainer tidak ditemukan, jangan lakukan apa-apa
        if (!sliderContainer) return 0;

        // 1. Dapatkan lebar kontainer saat ini, BUKAN lebar window.
        const containerWidth = sliderContainer.offsetWidth;

        // 2. Hitung posisi tengah berdasarkan lebar kontainer.
        const centerPoint = containerWidth / 2;
        const activeSlideWidth = 500;
        const centerOffset = centerPoint - (activeSlideWidth / 2);

        // 3. Logika sisa untuk menghitung offset slide sebelumnya tetap sama.
        let totalOffsetLeft = 0;
        const inactiveSlideWidth = 350;
        const gap = 24; // Nilai dari kelas Tailwind 'gap-6'

        for (let i = 0; i < targetIndex; i++) {
            totalOffsetLeft += inactiveSlideWidth + gap;
        }

        return centerOffset - totalOffsetLeft;
    }
    
    function initializeSlider() {
        updateSlider();
    }
    
    function updateSlider() {
        const position = getSlidePosition(currentSlide);
        slider.style.transform = `translateX(${position}px)`;
        
        slides.forEach((slide) => {
            const slideIndex = parseInt(slide.getAttribute('data-index'));
            if (slideIndex === currentSlide) {
                slide.style.width = '500px';
                slide.style.height = '300px';
                slide.style.opacity = '1';
                slide.style.transform = 'scale(1)';
                slide.style.zIndex = '10';
            } else {
                slide.style.width = '350px';
                slide.style.height = '250px';
                slide.style.opacity = '0.7';
                slide.style.transform = 'scale(0.9)';
                slide.style.zIndex = '5';
            }
        });
        
        updatePaginationDots();
    }
    
    function updatePaginationDots() {
        paginationDots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.remove('bg-gray-300');
                dot.classList.add('bg-teal-500');
            } else {
                dot.classList.remove('bg-teal-500');
                dot.classList.add('bg-gray-300');
            }
        });
    }
    
    // Sisa kode (event listener, etc.) tetap sama...
    
    nextBtn.addEventListener('click', function() {
        if (isTransitioning) return;
        isTransitioning = true;
        
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
        
        setTimeout(() => {
            isTransitioning = false;
        }, 700);
    });
    
    prevBtn.addEventListener('click', function() {
        if (isTransitioning) return;
        isTransitioning = true;
        
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
        
        setTimeout(() => {
            isTransitioning = false;
        }, 700);
    });
    
    paginationDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            if (isTransitioning) return;
            isTransitioning = true;
            
            currentSlide = index;
            updateSlider();
            
            setTimeout(() => {
                isTransitioning = false;
            }, 700);
        });
    });
    
    initializeSlider();
    
    setInterval(function() {
        if (!document.hidden && !isTransitioning) {
            nextBtn.click();
        }
    }, 4000);
    
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            updateSlider();
        }, 250);
    });
});
</script>

@push('styles')
<style>

.card-program.prakerja:hover {
    box-shadow: 0 10px 15px -3px rgba(53, 211, 163, 0.3), 0 4px 6px -2px rgba(53, 211, 163, 0.15);
}
.card-program.belajarbekerja:hover {
    box-shadow: 0 10px 15px -3px rgba(255, 209, 89, 0.4), 0 4px 6px -2px rgba(255, 209, 89, 0.2);
}
.card-program.isw:hover {
    box-shadow: 0 10px 15px -3px rgba(255, 99, 89, 0.35), 0 4px 6px -2px rgba(255, 99, 89, 0.18);
}
</style>
@endpush