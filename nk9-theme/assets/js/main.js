(function () {
    'use strict';

    // ============================================================
    // HERO ANIMATIONS — fire immediately on DOMContentLoaded
    // ============================================================
    function initHeroAnimations() {
        const heroEls = document.querySelectorAll('[data-animate-hero]');
        heroEls.forEach((el, i) => {
            setTimeout(() => {
                el.classList.add('is-visible');
            }, i * 150);
        });
    }

    // ============================================================
    // SCROLL ANIMATIONS — IntersectionObserver
    // ============================================================
    function initScrollAnimations() {
        // Single elements
        const singleObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        singleObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15 }
        );

        document.querySelectorAll('[data-animate]').forEach((el) => {
            singleObserver.observe(el);
        });

        // Stagger groups — [data-stagger] wraps children with [data-animate-child]
        const staggerObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const children = entry.target.querySelectorAll('[data-animate-child]');
                        children.forEach((child, i) => {
                            setTimeout(() => {
                                child.classList.add('is-visible');
                            }, i * 120);
                        });
                        staggerObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1 }
        );

        document.querySelectorAll('[data-stagger]').forEach((parent) => {
            staggerObserver.observe(parent);
        });
    }

    // ============================================================
    // SMOOTH SCROLL — anchor links
    // ============================================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    // ============================================================
    // INIT
    // ============================================================
    document.addEventListener('DOMContentLoaded', function () {
        initHeroAnimations();
        initScrollAnimations();
        initSmoothScroll();
    });

})();
