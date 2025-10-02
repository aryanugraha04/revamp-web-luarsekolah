<div class="bg-white py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-3xl font-semibold font-poppins leading-8 text-gray-900 mb-10">
            Partnership Luarsekolah
        </h2>

        {{-- Container untuk marquee/slider --}}
        <div class="marquee-container w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_5%,black_95%,transparent)]">
            {{-- Konten yang akan bergerak. Perhatikan ada 2x loop @foreach --}}
            <div class="marquee-content flex items-center">
                
                {{-- Loop Pertama: Menampilkan semua logo partner --}}
                @foreach ($partnerships as $partnership)
                    <div class="partner-logo flex-shrink-0 mx-8">
                        <img class="max-h-12 w-auto object-contain" 
                            src="{{ asset($partnership->image) }}" 
                            alt="{{ $partnership->name }}">
                    </div>
                @endforeach

                {{-- Loop Kedua: Duplikat semua logo untuk efek infinite scroll yang mulus --}}
                @foreach ($partnerships as $partnership)
                    <div class="partner-logo flex-shrink-0 mx-8" aria-hidden="true">
                        <img class="max-h-12 w-auto object-contain" 
                            src="{{ asset($partnership->image) }}" 
                            alt="{{ $partnership->name }}">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    @keyframes scrollLeft {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%); /* Bergerak sejauh 1 set logo */
        }
    }

    .marquee-content {
        /* Durasi animasi akan diatur oleh JavaScript agar dinamis */
        animation: scrollLeft linear infinite;
    }

    /* Opsi: Jeda animasi saat di-hover */
    /* .marquee-container:hover .marquee-content {
        animation-play-state: paused;
    } */
</style>
@endpush


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const marqueeContent = document.querySelector('.marquee-content');
        const partnerLogos = document.querySelectorAll('.partner-logo');
        
        // Menghitung jumlah logo asli (setengah dari total)
        const logoCount = partnerLogos.length / 2;
        
        if (logoCount > 0) {
            // Membuat durasi animasi dinamis berdasarkan jumlah logo
            // Semakin banyak logo, semakin lama durasinya agar kecepatan tetap konsisten
            // Anda bisa menyesuaikan angka '4' untuk membuatnya lebih cepat atau lambat
            const animationDuration = logoCount * 4; 
            
            marqueeContent.style.animationDuration = `${animationDuration}s`;
        }
    });
</script>
@endpush