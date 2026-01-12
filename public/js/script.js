// Multi-slider initialization: each `.image-slider` runs independently
document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.image-slider');
    sliders.forEach((slider) => initializeSlider(slider));

    // Smooth scrolling for navigation links (hanya untuk anchor di halaman yang sama)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return; // biarkan default untuk "#" kosong

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    // Auto-set tahun di footer copyright
    (() => {
        const el = document.getElementById('current-year');
        if (!el) return;
        el.textContent = String(new Date().getFullYear());
    })();
});

// Mulai dari atas hanya saat "first load" dalam 1 sesi tab, dan hanya jika URL tidak punya hash.
// - Jika membuka link seperti index.html#kontak, jangan diubah (biar langsung ke section).
// - Jika user sudah berinteraksi/scroll lalu refresh, jangan dipaksa balik ke atas.
window.addEventListener('load', () => {
    try {
        const hasHash = Boolean(window.location.hash);
        if (hasHash) return;

        const key = 'fpg_has_visited';
        const hasVisited = sessionStorage.getItem(key) === '1';
        if (!hasVisited) {
            window.scrollTo(0, 0);
            sessionStorage.setItem(key, '1');
        }
    } catch {
        // Jika sessionStorage tidak tersedia, fallback: tidak memaksa scroll.
    }
});

function initializeSlider(slider) {
    // Matikan auto slider (autoplay)
    const AUTO_PLAY = false;

    const slides = Array.from(slider.querySelectorAll('.slide'));
    const dots = Array.from(slider.querySelectorAll('.dot'));
    const prevBtn = slider.querySelector('.prev-btn');
    const nextBtn = slider.querySelector('.next-btn');
    let currentIndex = 0;
    let autoId = null;

    if (!slides.length) return;

    const showSlide = (index) => {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        const i = (index + slides.length) % slides.length;
        slides[i].classList.add('active');
        if (dots[i]) dots[i].classList.add('active');
        currentIndex = i;
    };

    const changeSlide = (delta) => {
        showSlide(currentIndex + delta);
        resetAuto();
    };

    const goTo = (i) => {
        showSlide(i);
        resetAuto();
    };

    const startAuto = () => {
        if (!AUTO_PLAY) return;
        stopAuto();
        autoId = setInterval(() => changeSlide(1), 5000);
    };

    const stopAuto = () => {
        if (autoId) clearInterval(autoId);
        autoId = null;
    };

    const resetAuto = () => {
        if (!AUTO_PLAY) return;
        stopAuto();
        startAuto();
    };

    // Buttons
    if (prevBtn) prevBtn.addEventListener('click', () => changeSlide(-1));
    if (nextBtn) nextBtn.addEventListener('click', () => changeSlide(1));

    // Dots
    dots.forEach((dot, idx) => dot.addEventListener('click', () => goTo(idx)));

    // Pause and resume on hover (tetap aman; kalau AUTO_PLAY=false tidak melakukan apa-apa)
    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', startAuto);

    // Swipe support
    let startX = 0;
    slider.addEventListener('touchstart', (e) => startX = e.touches[0].clientX);
    slider.addEventListener('touchend', (e) => {
        const diff = startX - e.changedTouches[0].clientX;
        const threshold = 50;
        if (Math.abs(diff) > threshold) changeSlide(diff > 0 ? 1 : -1);
    });

    // Initialize
    showSlide(0);
    startAuto();
}

// Navbar tidak digunakan pada project ini, jadi tidak perlu handler scroll untuk navbar.

// Biarkan browser menangani restore scroll (back/forward) agar UX natural di one-page.
if ('scrollRestoration' in history) history.scrollRestoration = 'auto';