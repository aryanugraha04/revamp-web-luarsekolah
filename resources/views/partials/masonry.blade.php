<section class="w-full bg-[#FFFFFF] text-neutral-50">
  <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 md:py-16">

    {{-- Tabs + underline + arrows --}}
    <div class="relative">
      <div class="flex items-center gap-3">
        <button id="tabPrev" type="button"
          class="hidden md:inline-flex size-10 rounded-full bg-teal-600/80 hover:bg-teal-500 shadow-lg shadow-teal-900/30 items-center justify-center">
          {{-- left chevron --}}
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="opacity-95">
            <path d="M15 6L9 12L15 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>

        <div id="tabsTrack"
          class="relative flex-1 overflow-x-auto scrollbar-none">
          <ul id="tabsList"
            class="flex items-center gap-6 min-w-max px-2 pb-3">
            {{-- Active tab uses text-white and underline bar below --}}
            <li class="relative">
              <button data-tab="digital" class="tab-btn text-lg font-semibold text-neutral-300 hover:text-white transition-colors">
                Digital Marketing
              </button>
              <span class="tab-underline absolute -bottom-1.5 left-0 h-1 w-28 rounded-full bg-teal-500"></span>
            </li>
            <li><button data-tab="web" class="tab-btn text-lg font-semibold text-neutral-300 hover:text-white">Web Development</button></li>
            <li><button data-tab="uiux" class="tab-btn text-lg font-semibold text-neutral-300 hover:text-white">UI/UX Design</button></li>
            <li><button data-tab="se" class="tab-btn text-lg font-semibold text-neutral-300 hover:text-white">Software Engineering</button></li>
            <li><button data-tab="smm" class="tab-btn text-lg font-semibold text-neutral-300 hover:text-white">Social Media Marketing</button></li>
          </ul>
        </div>

        <button id="tabNext" type="button"
          class="hidden md:inline-flex size-10 rounded-full bg-teal-600/80 hover:bg-teal-500 shadow-lg shadow-teal-900/30 items-center justify-center">
          {{-- right chevron --}}
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="opacity-95">
            <path d="M9 6L15 12L9 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>

    {{-- Masonry: 2 columns, small column gap, items avoid breaking --}}
    <div class="mt-10 md:mt-12 columns-1 md:columns-2 gap-x-6 lg:gap-x-8 [column-fill:_balance]">

      {{-- LEFT COLUMN: Tall white card --}}
      <article class="break-inside-avoid mb-6">
        <div class="bg-white text-neutral-900 rounded-3xl border border-neutral-200 shadow-xl p-8 md:p-10 w-[397px] h-[634px]">
          <h3 class="text-5xl md:text-6xl font-black tracking-tight">4X</h3>
          <p class="mt-3 text-2xl font-semibold">Peningkatan Portofolio dan Kesempatan Kerja</p>

          <div class="mt-6">
            <span class="inline-block text-yellow-400 text-5xl leading-none">”</span>
            <span class="inline-block text-yellow-400 text-5xl -ml-2 leading-none">”</span>
          </div>

          <p class="mt-6 text-neutral-700 leading-relaxed">
            “Sebelum ikut kelas Graphic Design di LuarSekolah, saya hanya bisa desain sederhana untuk kebutuhan pribadi.
            Setelah belajar, saya berhasil membangun portofolio profesional dan mendapatkan 3 proyek freelance
            pertama saya hanya dalam 2 bulan. Materi yang diajarkan sangat relevan dengan kebutuhan industri!”
          </p>

          <div class="mt-10 pt-6 border-t border-neutral-200 flex items-center gap-4">
            <img src="https://ui-avatars.com/api/?name=Saeful+Rizal&background=random"
                 alt="Saeful Rizal" class="w-12 h-12 rounded-full">
            <div>
              <p class="font-semibold">Saeful Rizal</p>
              <p class="text-sm text-neutral-500">Junior Graphic Designer di Telkomsel</p>
            </div>
          </div>
        </div>
      </article>

      {{-- RIGHT COLUMN: Top wide light card --}}
      <article class="break-inside-avoid mb-6">
        <div class=" bg-neutral-100 text-neutral-900 rounded-3xl border border-neutral-200 shadow-xl p-8 w-[815px] h-[309px]">
          <h4 class="text-4xl font-black tracking-tight">4X</h4>
          <p class="mt-2 text-lg md:text-xl font-semibold">Lebih Percaya Diri dalam Skill Desain</p>
          <div class="mt-4">
            <span class="inline-block text-yellow-400 text-4xl leading-none">”</span>
            <span class="inline-block text-yellow-400 text-4xl -ml-2 leading-none">”</span>
          </div>
          <p class="mt-5 text-neutral-700 leading-relaxed">
            “Kelas Graphic Design di LuarSekolah membuat saya jauh lebih percaya diri. Saya belajar tools industri
            seperti Photoshop &amp; Illustrator, juga bagaimana membuat desain yang komunikatif. Sekarang,
            saya dipercaya menjadi designer tetap di perusahaan startup lokal.”
          </p>
          <div class="mt-6 flex items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=Andi+Prasetyo&background=random"
                 class="w-10 h-10 rounded-full" alt="Andi Prasetyo">
            <div>
              <p class="font-semibold">Andi Prasetyo</p>
              <p class="text-xs text-neutral-500">Graphic Designer, Startup Tech Bandung</p>
            </div>
          </div>
        </div>
      </article>

      {{-- RIGHT COLUMN: Bottom row with 2 smaller cards side-by-side (nest grid inside one masonry item) --}}
      <div class="break-inside-avoid mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          {{-- Left small dark card with dotted glow --}}
          <div class="relative rounded-3xl overflow-hidden">
            <div class="absolute inset-0 rounded-[28px] border-2 border-dotted border-neutral-700/60 pointer-events-none"></div>
            <div class="relative bg-neutral-900 rounded-3xl p-7 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.7)]">
              <div class="text-yellow-400 text-3xl leading-none">”</div>
              <p class="mt-4 text-neutral-300 text-sm leading-relaxed">
                “Kursus Software Engineering di LuarSekolah sangat komprehensif. Dari nol hingga mahir, saya diajarkan
                best practices dan clean code. Sekarang saya bekerja sebagai Full Stack Developer di perusahaan teknologi ternama.”
              </p>
              <div class="mt-6 flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Ahmad+Fauzi&background=random"
                     class="w-9 h-9 rounded-full" alt="Ahmad Fauzi">
                <div>
                  <p class="font-semibold text-neutral-50">Ahmad Fauzi</p>
                  <p class="text-xs text-neutral-400">Full Stack Developer</p>
                </div>
              </div>
            </div>
          </div>

          {{-- Right small green card --}}
          <div class="bg-teal-700/90 text-white rounded-3xl p-7 shadow-[0_10px_30px_-10px_rgba(13,148,136,0.65)]">
            <div class="text-yellow-300 text-3xl leading-none">”</div>
            <p class="mt-4 text-sm leading-relaxed">
              “Kelas Graphic Design di LuarSekolah membuat saya jauh lebih percaya diri. Saya belajar tools industri
              seperti Photoshop &amp; Illustrator, juga bagaimana membuat desain yang komunikatif. Sekarang, saya
              dipercaya menjadi designer tetap di perusahaan startup lokal.”
            </p>
            <div class="mt-6 flex items-center gap-3">
              <img src="https://ui-avatars.com/api/?name=Bima+Setiawan&background=random"
                   class="w-9 h-9 rounded-full" alt="Bima Setiawan">
              <div>
                <p class="font-semibold">Bima Setiawan</p>
                <p class="text-xs text-teal-100">Brand &amp; Graphic Designer di Fundex</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- Tiny JS for scrolling tab-list underline and arrow controls --}}
  <script>
    (function () {
      const list = document.getElementById('tabsList');
      const prev = document.getElementById('tabPrev');
      const next = document.getElementById('tabNext');
      const underline = list?.querySelector('.tab-underline');
      const activeBtn = list?.querySelector('.tab-btn');

      function positionUnderline() {
        if (!underline || !activeBtn) return;
        const r = activeBtn.getBoundingClientRect();
        const pr = list.getBoundingClientRect();
        underline.style.width = r.width + 'px';
        underline.style.transform = `translateX(${r.left - pr.left}px)`;
      }

      positionUnderline();
      window.addEventListener('resize', positionUnderline);

      const track = document.getElementById('tabsTrack');
      function scrollByAmount(x) {
        track?.scrollBy({ left: x, behavior: 'smooth' });
      }
      prev?.addEventListener('click', () => scrollByAmount(-200));
      next?.addEventListener('click', () => scrollByAmount(200));
    })();
  </script>
</section>
