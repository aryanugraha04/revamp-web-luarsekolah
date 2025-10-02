{{-- testimonial-section.blade.php --}}
<section class="py-16 px-4 md:px-8 lg:px-16 bg-gray-50 pt-[100px]">
    <div class="max-w-7xl mx-auto">
        {{-- Header Section --}}
        <div class="text-center mb-12">
            <div class="relative inline-flex items-center justify-center mb-6">
                <!-- Corner kiri bawah (L-shape) -->
                <div class="absolute -left-3 -bottom-3 w-8 h-8 
                            border-[6px] border-[#00CC99] 
                            border-t-0 border-r-0 rounded-sm z-0"></div>

                <!-- Corner kanan atas (L-shape) -->
                <div class="absolute -right-3 -top-3 w-8 h-8 
                            border-[6px] border-[#00CC99] 
                            border-b-0 border-l-0 rounded-sm z-0"></div>

                <!-- Isi -->
                <div class="relative z-10 px-4 py-0 bg-white">
                    <span class="text-gray-700 font-semibold font-poppins text-2xl">Testimoni</span>
                </div>
            </div>
            
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-2 mt-10 font-poppins">
                Testimoni Mereka Setelah Belajar di 
                <span class="text-[#00CC99]">LuarSekolah</span>
                <span class="text-yellow-400">✨</span>
            </h2>
        </div>

        {{-- Filter Tabs --}}
        {{-- Filter Tabs (Versi Baru) --}}
        <div class="mb-10">
            <div class="flex flex-wrap gap-3 justify-center">

                {{-- Tombol "Semua" dalam keadaan aktif --}}
                <button 
                    data-filter="all"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300 
                        bg-teal-500 text-white border border-teal-500"
                >
                    Semua
                </button>

                {{-- Tombol lainnya dalam keadaan tidak aktif --}}
                <button 
                    data-filter="graphic-design"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Graphic Design
                </button>
                <button 
                    data-filter="digital-marketing"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Digital Marketing
                </button>

                {{-- ... Tambahkan tombol-tombol lain dengan class yang sama seperti di atas ... --}}

                <button 
                    data-filter="web-development"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Web Development
                </button>
                <button 
                    data-filter="ui-ux-design"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    UI/UX Design
                </button>
                <button 
                    data-filter="software-engineering"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Software Engineering
                </button>
                <button 
                    data-filter="social-media-marketing"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Social Media Marketing
                </button>
                <button 
                    data-filter="marketing-communication"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Marketing Communication
                </button>
                <button 
                    data-filter="data-analytic"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Data Analytic
                </button>
                <button 
                    data-filter="content-writing"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Content Writing
                </button>
                <button 
                    data-filter="accounting"
                    class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition-all duration-300
                        bg-transparent text-slate-500 border border-slate-300 hover:border-teal-500 hover:text-teal-500"
                >
                    Accounting
                </button>
            </div>
        </div>

        {{-- Testimonials Grid --}}
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:grid-rows-2 gap-6">

                <div class="lg:row-span-2 bg-white p-8 rounded-2xl border border-gray-200 flex flex-col transition-all duration-300 hover:bg-teal-600 hover:text-white group" data-filter="graphic-design">
                    <h3 class="text-5xl font-bold text-gray-900 group-hover:text-white">4X</h3>
                    <p class="text-xl font-semibold mt-2 text-gray-800 group-hover:text-white">Peningkatan Portofolio dan Kesempatan Kerja</p>
                    <span class="text-5xl text-yellow-400 mt-6">”</span>
                    <p class="text-gray-600 mt-4 flex-grow group-hover:text-white">
                        "Sebelum ikut kelas Graphic Design di LuarSekolah, saya hanya bisa desain sederhana untuk kebutuhan pribadi. Setelah belajar, saya berhasil membangun portofolio profesional dan mendapatkan 3 proyek freelance pertama saya hanya dalam 2 bulan. Materi yang diajarkan sangat relevan dengan kebutuhan industri."
                    </p>
                    <div class="flex items-center gap-4 mt-8 pt-6">
                        <div class="w-12 h-12 bg-red-100 text-red-700 flex items-center justify-center rounded-full font-bold">SR</div>
                        <div>
                            <p class="font-semibold text-gray-900 group-hover:text-white">Saeful Rizal</p>
                            <p class="text-sm text-gray-500 group-hover:text-gray-200">Junior Graphic Designer di Telkomsel</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-gray-200 transition-all duration-300 hover:bg-teal-600 hover:text-white group">
                    <h3 class="text-3xl font-bold text-gray-900 group-hover:text-white">4X</h3>
                    <p class="font-semibold text-gray-700 mt-1 group-hover:text-white">Lebih Percaya Diri dalam Skill Desain</p>
                    <p class="text-gray-600 mt-4 group-hover:text-white">
                        “Kelas Graphic Design di LuarSekolah membuat saya jauh lebih percaya diri. Saya belajar tools industri seperti Photoshop & Illustrator, juga bagaimana membuat desain yang komunikatif. Sekarang, saya dipercaya menjadi designer tetap di perusahaan startup lokal.”
                    </p>
                    <div class="flex items-center gap-3 mt-6">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold">AP</div>
                        <div>
                            <p class="font-semibold text-gray-900 group-hover:text-white">Andi Prasetiyo</p>
                            <p class="text-sm text-gray-500 group-hover:text-gray-200">Graphic Designer, Startup Tech Bandung</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-200 transition-all duration-300 hover:bg-teal-600 hover:text-white group">
                    <p class="text-gray-600 group-hover:text-white">
                        “Kursus Software Engineering di LuarSekolah sangat komprehensif. Dari nol hingga mahir, saya diajarkan best practices dan clean code. Sekarang saya bekerja sebagai Full Stack Developer di perusahaan teknologi ternama.”
                    </p>
                    <div class="flex items-center gap-3 mt-6">
                        <div class="w-10 h-10 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold">AF</div>
                        <div>
                            <p class="font-semibold text-gray-900 group-hover:text-white">Ahmad Fauzi</p>
                            <p class="text-sm text-gray-500 group-hover:text-gray-200">Full Stack Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-2xl border border-gray-200 transition-all duration-300 hover:bg-teal-600 hover:text-white group">
                    <p class="text-gray-600 group-hover:text-white">
                    “Belajar Social Media Marketing di LuarSekolah mengubah cara pandang saya tentang digital marketing. Strategi yang diajarkan sangat aplikatif dan hasilnya terlihat dalam 2 minggu pertama implementasi.”
                    </p>
                    <div class="flex items-center gap-3 mt-6">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold">SN</div>
                        <div>
                            <p class="font-semibold text-gray-900 group-hover:text-white">Siti Nurhasanah</p>
                            <p class="text-sm text-gray-500 group-hover:text-gray-200">Social Media Manager</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- JavaScript for filtering --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => {
                b.classList.remove('bg-teal-600', 'text-white', 'border-teal-600', 'active');
                b.classList.add('text-gray-600', 'border-gray-300');
            });
            
            // Add active class to clicked button
            this.classList.add('bg-teal-600', 'text-white', 'border-teal-600', 'active');
            this.classList.remove('text-gray-600', 'border-gray-300');
            
            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Filter testimonials
            testimonialItems.forEach(item => {
                if (filterValue === 'all') {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    if (item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
    
    // Initialize with all testimonials visible
    testimonialItems.forEach(item => {
        item.style.transition = 'all 0.3s ease';
        item.style.opacity = '1';
        item.style.transform = 'translateY(0)';
    });
});
</script>
@endpush

{{-- Additional CSS for smoother transitions --}}
@push('styles')
<style>
    .testimonial-item {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .testimonial-card {
        cursor: default;
    }
    
    /* Ensure proper spacing in masonry layout */
    .columns-1 > .testimonial-item:not(:first-child),
    .md\:columns-2 > .testimonial-item:not(:first-child),
    .lg\:columns-3 > .testimonial-item:not(:first-child) {
        margin-top: 1.5rem;
    }
    
    /* Smooth hover transition for cards */
    .testimonial-card * {
        transition: color 0.3s ease;
    }
</style>
@endpush
@stack('styles')
@stack('scripts')