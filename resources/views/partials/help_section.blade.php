<section class="bg-white py-12 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-[#005545] rounded-3xl p-8 md:p-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <div class="flex flex-col h-full">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-semibold text-white leading-tight font-sf-pro">
                            Butuh Bantuan atau Info LuarSekolah?
                        </h2>
                        <p class="mt-4 text-gray-200 font-normal font-poppins">
                            Tim kami siap membantu menjawab pertanyaanmu kapan saja, mulai dari informasi kelas, proses pendaftaran, hingga detail program yang kamu butuhkan.
                        </p>
                    </div>
                    <div class="mt-auto pt-8 flex gap-4 items-end">
                        {{-- Ganti <img> di bawah dengan path aset maskot Anda --}}
                        <img src={{ asset('assets/svg/green-mascot.svg') }} alt="Maskot 1" class="h-52 object-contain">
                        <img src={{ asset('assets/svg/yellow-mascot.svg') }} alt="Maskot 2" class="h-44 object-contain">
                        <img src={{ asset('assets/svg/red-mascot.svg') }} alt="Maskot 3" class="h-56 object-contain">
                    </div>
                </div>

                <div>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <input type="text" name="name" id="name" placeholder="Nama" class="w-full bg-white rounded-lg border-transparent px-4 py-3 focus:ring-2 focus:ring-amber-400 font-poppins font-normal">
                        </div>
                        <div>
                            <input type="email" name="email" id="email" placeholder="Email" class="w-full bg-white rounded-lg border-transparent px-4 py-3 focus:ring-2 focus:ring-amber-400 font-poppins font-normal">
                        </div>
                        <div>
                            <input type="tel" name="phone" id="phone" placeholder="Nomor Telepon" class="w-full bg-white rounded-lg border-transparent px-4 py-3 focus:ring-2 focus:ring-amber-400 font-poppins font-normal">
                        </div>
                        <div>
                            <textarea name="message" id="message" rows="4" placeholder="Masukkan pertanyaan" class="w-full bg-white rounded-lg border-transparent px-4 py-3 focus:ring-2 focus:ring-amber-400 font-poppins font-normal"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-[#FFC200] text-gray-900 py-4 rounded-lg text-lg hover:bg-amber-500 transition-colors font-poppins font-normal">
                                Kirim Pertanyaan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>