import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Lokasi: resources/js/app.js

// Fungsi untuk menganimasikan angka dari 0 ke target
const animateCount = (element) => {
    const target = +element.dataset.target; // Ambil angka target dari atribut data-target
    const suffix = element.dataset.suffix || ''; // Ambil suffix seperti '%' atau '+'
    const duration = 2000; // Durasi animasi dalam milidetik (2 detik)
    const start = 0;
    let startTime = null;

    const step = (timestamp) => {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const currentValue = Math.floor(progress * (target - start) + start);
        
        // Format angka ribuan dengan titik (contoh: 3.600)
        element.innerText = currentValue.toLocaleString('de-DE') + suffix;

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };

    window.requestAnimationFrame(step);
};

// Intersection Observer untuk mendeteksi kapan section terlihat
const statsSection = document.getElementById('stats-section');
const counters = document.querySelectorAll('.counter');

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        // Jika section masuk ke dalam viewport
        if (entry.isIntersecting) {
            // Jalankan animasi untuk setiap counter
            counters.forEach(counter => {
                animateCount(counter);
            });
            // Hentikan pengamatan setelah animasi berjalan sekali
            observer.unobserve(statsSection);
        }
    });
}, {
    threshold: 0.5 // Animasi berjalan saat 50% section terlihat
});

// Mulai mengamati section statistik
if (statsSection) {
    observer.observe(statsSection);
}

// Lokasi: resources/js/app.js

// 1. Impor Swiper dan modul yang dibutuhkan
// Lokasi: resources/js/app.js
// Lokasi: resources/js/app.js
import Swiper from 'swiper';
import { Navigation, Pagination, EffectCoverflow } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-coverflow';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiper = new Swiper('.swiper-container', {
    modules: [Navigation, Pagination, EffectCoverflow],
    
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    
    slidesPerView: 1.2, // Mulai dengan lebih sedikit slide terlihat untuk mobile
    spaceBetween: 20, // Jarak antar slide

    // PERUBAHAN UTAMA DI SINI UNTUK EFEK COVERFLOW
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 250,         // <-- Perbesar kedalaman untuk efek 3D yang lebih jelas
        modifier: 2.5,      // <-- Ini PENTING: Perbesar modifier untuk membuat slide tengah jauh lebih besar
        slideShadows: false,
    },
    
    breakpoints: {
        640: {
        slidesPerView: 2.2, // Sesuaikan jumlah slide terlihat
        spaceBetween: 30,
        },
        1024: {
        slidesPerView: 2.8, // Sesuaikan jumlah slide terlihat
        spaceBetween: 40,
        },
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});