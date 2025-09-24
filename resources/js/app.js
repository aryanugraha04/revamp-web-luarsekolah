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