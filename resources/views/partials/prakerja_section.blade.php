<div class="bg-gradient-to-br from-[#084C3C] to-[#084C3C] relative overflow-hidden">
    {{-- Background decorative circles  --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-emerald-700/20 rounded-full"></div>
        <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-emerald-600/20 rounded-full"></div>
        <div class="absolute top-1/2 -right-20 w-48 h-48 bg-emerald-700/15 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        {{-- Header Section  --}}
        <div class="mb-12 ml-[104px] mt-[41px] gap-[193px]">
            <h2 class="text-2xl font-semibold text-white mb-6 font-poppins">Program dari Luarsekolah</h2>
            <p class="text-emerald-100 text-lg max-w-2xl leading-relaxed font-poppins font-normal">
                Luarsekolah adalah platform belajar fleksibel dengan harga hemat.<br> Skill siap kerja kini bisa kamu punya.
            </p>
        </div>

        {{-- Tabs Section  --}}
        <div class="mb-12">
            <div class="flex space-x-8 border-b border-emerald-700 gap-[20px] ml-[104px]">
                <button class="tab-button active pb-4 px-2 text-white font-medium relative font-poppins" data-tab="prakerja">
                    Prakerja
                    <div class="absolute bottom-0 left-0 right-0 h-[8px] bg-white rounded-full"></div>
                </button>
                <button class="tab-button pb-4 px-2 text-[#E6E7E8] font-medium hover:text-white transition-colors font-poppins" data-tab="belajar-bekerja">
                    Belajar Bekerja
                </button>
                <button class="tab-button pb-4 px-2 text-[#E6E7E8] font-medium hover:text-white transition-colors font-poppins" data-tab="pbi">
                    PBI
                </button>
                <button class="tab-button pb-4 px-2 text-[#E6E7E8] font-medium hover:text-white transition-colors font-poppins" data-tab="prakerja-isw">
                    Prakerja ISW
                </button>
            </div>
        </div>

        {{-- Cards Container  --}}
        <div class="relative">
            {{-- Navigation Arrows  --}}
            <button id="scroll-left" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-20 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button id="scroll-right" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-20 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            {{-- Scrollable Cards Container  --}}
            <div id="cards-container" class="overflow-x-auto scrollbar-hide scroll-smooth">
                <div class="flex space-x-6 pb-4 ml-[104px]" style="width: max-content;">
                    
                    {{-- Tab Content: Prakerja  --}}
                    <div class="tab-content active" data-tab="prakerja">
                        <div class="flex space-x-6">
                            {{-- Card 1  --}}
                            @foreach ($courses as $course)
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-[293px] flex-shrink-0 flex flex-col">
                                    <div class="">
                                        <img src="{{ $course->image }}" alt="Pesticide course" class="w-full object-contain" />
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                                            <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                                                0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                                                11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                                                3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                                                4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                                                3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                                                7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                                                8.28675V8.66675Z" fill="white"/>
                                            </svg>
                                            <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                                        </div>
                                        <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                                        <p class="text-gray-600 text-sm ml-6 mb-2 font-poppins font-normal">Wisnu Febriyanto</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->total_rating }}</span>
                                                <div class="flex text-orange-500">
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp.{{ $course->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tab Content: Belajar Bekerja (Hidden by default)  --}}
                    <div class="tab-content hidden" data-tab="belajar-bekerja">
                        <div class="flex space-x-6">
                            {{-- Add similar cards for Belajar Bekerja tab  --}}
                            {{-- Card 1  --}}
                            @foreach ($courses as $course)
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-[293px] flex-shrink-0 flex flex-col">
                                    <div class="">
                                        <img src="{{ $course->image }}" alt="Pesticide course" class="w-full object-contain" />
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                                            <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                                                0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                                                11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                                                3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                                                4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                                                3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                                                7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                                                8.28675V8.66675Z" fill="white"/>
                                            </svg>
                                            <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                                        </div>
                                        <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                                        <p class="text-gray-600 text-sm ml-6 mb-2 font-poppins font-normal">Wisnu Febriyanto</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->total_rating }}</span>
                                                <div class="flex text-orange-500">
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp.{{ $course->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tab Content: PBI (Hidden by default)  --}}
                    <div class="tab-content hidden" data-tab="pbi">
                        <div class="flex space-x-6">
                            {{-- Add similar cards for PBI tab  --}}
                            {{-- Card 1  --}}
                            @foreach ($courses as $course)
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-[293px] flex-shrink-0 flex flex-col">
                                    <div class="">
                                        <img src="{{ $course->image }}" alt="Pesticide course" class="w-full object-contain" />
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                                            <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                                                0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                                                11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                                                3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                                                4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                                                3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                                                7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                                                8.28675V8.66675Z" fill="white"/>
                                            </svg>
                                            <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                                        </div>
                                        <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                                        <p class="text-gray-600 text-sm ml-6 mb-2 font-poppins font-normal">Wisnu Febriyanto</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->total_rating }}</span>
                                                <div class="flex text-orange-500">
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp.{{ $course->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Tab Content: Prakerja ISW (Hidden by default)  --}}
                    <div class="tab-content hidden" data-tab="prakerja-isw">
                        <div class="flex space-x-6">
                            {{-- Add similar cards for Prakerja ISW tab  --}}
                            {{-- Card 1  --}}
                            @foreach ($courses as $course)
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-[293px] flex-shrink-0 flex flex-col">
                                    <div class="">
                                        <img src="{{ $course->image }}" alt="Pesticide course" class="w-full object-contain" />
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                                            <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                                                0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                                                11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                                                3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                                                4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                                                3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                                                7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                                                8.28675V8.66675Z" fill="white"/>
                                            </svg>
                                            <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                                        </div>
                                        <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                                        <p class="text-gray-600 text-sm ml-6 mb-2 font-poppins font-normal">Wisnu Febriyanto</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->total_rating }}</span>
                                                <div class="flex text-orange-500">
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp.{{ $course->price }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- See All Button  --}}
        <a href="https://www.luarsekolah.com/kelas/cari?course_type=terpopuler&prakerja=1">
            <div class="text-center mt-12">
                <button class="bg-white text--[#000000] font-normal font-poppins px-8 py-3 rounded-[6px] 
                hover:bg-gray-200 transition-colors shadow-lg w-[398px] h-[48px]">
                    Lihat Semua
                </button>
            </div>
        </a>
    </div>

    {{-- JavaScript for functionality  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'text-white');
                        btn.classList.add('text-emerald-200');
                        const underline = btn.querySelector('div');
                        if (underline) underline.remove();
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button and corresponding content
                    this.classList.add('active', 'text-white');
                    this.classList.remove('text-emerald-200');
                    
                    // Add underline to active tab
                    const underline = document.createElement('div');
                    underline.className = 'absolute bottom-0 left-0 right-0 h-0.5 bg-white rounded-full';
                    this.appendChild(underline);
                    
                    // Show corresponding content
                    const targetContent = document.querySelector(`[data-tab="${targetTab}"]`);
                    if (targetContent && targetContent.classList.contains('tab-content')) {
                        targetContent.classList.add('active');
                        targetContent.classList.remove('hidden');
                    }
                });
            });
            
            // Scroll functionality
            const scrollLeftBtn = document.getElementById('scroll-left');
            const scrollRightBtn = document.getElementById('scroll-right');
            const cardsContainer = document.getElementById('cards-container');
            
            scrollLeftBtn.addEventListener('click', function() {
                cardsContainer.scrollBy({
                    left: -320, // Width of one card plus gap
                    behavior: 'smooth'
                });
            });
            
            scrollRightBtn.addEventListener('click', function() {
                cardsContainer.scrollBy({
                    left: 320, // Width of one card plus gap
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</div>

<div class="container mx-auto px-4 py-16 relative z-10">
    <div class="mb-12 ml-[104px] mt-[41px] gap-[193px]">
        <h2 class="text-2xl font-semibold text-[#000000] mb-6 font-poppins">Kelas Terbaru di Prakerja</h2>
        <div class="flex space-x-6">
            {{-- Card 1  --}}
            <div class="bg-white rounded-2xl overflow-hidden border-[1px] border-[#9BA1A9] w-[291px] h-[370px] flex-shrink-0 flex flex-col">
                <div class="">
                    <img src="{{ $course->image }}" alt="Secure Programming course" class="w-full object-contain" />
                </div>
                <div class="flex flex-col">
                    <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                        <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                            0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                            11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                            3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                            4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                            3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                            7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                            8.28675V8.66675Z" fill="white"/>
                        </svg>
                        <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                    </div>
                    <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                    <p class="text-gray-600 text-sm ml-6 mb-1 font-poppins font-normal">Wisnu Febriyanto</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->rating }}</span>
                            <div class="flex text-orange-500">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            </div>
                        </div>
                    </div>
                    <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp. {{ $course->price }}</span>
                </div>
            </div>
            {{-- Card 2  --}}
            <div class="bg-white rounded-2xl overflow-hidden border-[1px] border-[#9BA1A9] w-[291px] h-[370px] flex-shrink-0 flex flex-col">
                <div class="">
                    <img src="{{ $course->image }}" alt="Lingkungan course" class="w-full object-contain" />
                </div>
                <div class="flex flex-col">
                    <div class="flex w-[293px] h-[26px] mb-3 bg-[#077E60]">
                        <svg class="w-4 h-4 text-[#FFFFFF] pt-[5px] ml-6 mr-2" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 4.98675V2.00008C11 1.26675 10.4 0.666748 9.66667 0.666748H1.66667C0.933336 0.666748 
                            0.333336 1.26675 0.333336 2.00008V10.0001C0.333336 10.7334 0.933336 11.3334 1.66667 11.3334H9.66667C10.4 
                            11.3334 11 10.7334 11 10.0001V7.01342L13.6667 9.66675V2.33341L11 4.98675ZM5.66667 3.33341C6.4 3.33341 7 
                            3.93341 7 4.66675C7 5.40008 6.4 6.00008 5.66667 6.00008C4.93334 6.00008 4.33334 5.40008 4.33334 
                            4.66675C4.33334 3.93341 4.93334 3.33341 5.66667 3.33341ZM8.33334 8.66675H3V8.28675C3 7.74675 3.32 7.26675 
                            3.81334 7.05341C4.3979 6.79829 5.02885 6.6666 5.66667 6.6666C6.30449 6.6666 6.93543 6.79829 7.52 
                            7.05341C7.76153 7.15665 7.96739 7.32859 8.11199 7.54787C8.25659 7.76715 8.33357 8.02409 8.33334 
                            8.28675V8.66675Z" fill="white"/>
                        </svg>
                        <span class="text-[#FFFFFF] text-sm font-normal font-inter">Webinar</span>
                    </div>
                    <h4 class="font-semibold text-gray-900 ml-6 mb-2 font-poppins text-[14px]">{{ $course->name }}</h4>
                    <p class="text-gray-600 text-sm ml-6 mb-1 font-poppins font-normal">Wisnu Febriyanto</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-orange-500 font-bold ml-6 mr-1">{{ $course->rating }}</span>
                            <div class="flex text-orange-500">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="font-normal ml-6 text-gray-900 font-poppins mt-2 text-[18px]">Rp. {{ $course->price }}</span>
            </div>
        </div>
    </div>
</div>

