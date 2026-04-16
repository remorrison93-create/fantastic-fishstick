/**
 * NK9 Theme — main.js
 * Nav scroll behavior + scroll-reveal animations via IntersectionObserver
 */

(function () {
  'use strict';

  // ─────────────────────────────────────────────
  // Scroll-reveal via IntersectionObserver
  // ─────────────────────────────────────────────
  function initReveal() {
    const revealEls = document.querySelectorAll('.reveal, .reveal-right');
    if (!revealEls.length) return;

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px',
      }
    );

    revealEls.forEach(function (el) {
      observer.observe(el);
    });
  }

  // ─────────────────────────────────────────────
  // Hero load animations (no scroll needed)
  // ─────────────────────────────────────────────
  function initHeroAnimations() {
    var heroEls = document.querySelectorAll('[data-hero-animate]');
    heroEls.forEach(function (el, i) {
      var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
      setTimeout(function () {
        el.classList.add('is-visible');
      }, delay);
    });
  }

  // ─────────────────────────────────────────────
  // Stagger children inside a parent
  // Usage: add data-stagger to parent, children get .reveal + stagger delay
  // ─────────────────────────────────────────────
  function initStagger() {
    var staggerParents = document.querySelectorAll('[data-stagger]');
    staggerParents.forEach(function (parent) {
      var children = parent.querySelectorAll('[data-stagger-child]');
      children.forEach(function (child, i) {
        child.style.transitionDelay = (i * 100) + 'ms';
      });
    });
  }

  // ─────────────────────────────────────────────
  // Active nav link highlighting
  // ─────────────────────────────────────────────
  function initActiveNav() {
    var path = window.location.pathname.replace(/\/$/, '') || '/';
    var links = document.querySelectorAll('[data-nav-link]');
    links.forEach(function (link) {
      var href = link.getAttribute('href').replace(/\/$/, '') || '/';
      if (href === path) {
        link.classList.add('text-nk-white');
        link.classList.add('after:absolute', 'after:bottom-0', 'after:left-0', 'after:right-0', 'after:h-0.5', 'after:bg-nk-accent');
      }
    });
  }

  // ─────────────────────────────────────────────
  // Smooth scroll for anchor links
  // ─────────────────────────────────────────────
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  }

  // ─────────────────────────────────────────────
  // Init
  // ─────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    initStagger();
    initHeroAnimations();
    initReveal();
    initSmoothScroll();
  });

})();
