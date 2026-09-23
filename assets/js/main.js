/**
 * APM Chemical – Main JavaScript
 * Aggarwal Publicity Marketing Pvt. Ltd.
 */
(function () {
  'use strict';

  /* ── Sticky Nav ── */
  const header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
  }

  /* ── Mobile Menu ── */
  const toggle   = document.querySelector('.nav-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  if (toggle && mobileNav) {
    toggle.addEventListener('click', () => {
      toggle.classList.toggle('open');
      mobileNav.classList.toggle('open');
      document.body.style.overflow = mobileNav.classList.contains('open') ? 'hidden' : '';
    });
    // close on link click
    mobileNav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        toggle.classList.remove('open');
        mobileNav.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  /* ── Scroll Animations ── */
  const animEls = document.querySelectorAll('.anim-fade-up, .anim-fade-left, .anim-fade-right');
  if (animEls.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); }
      });
    }, { threshold: 0.12 });
    animEls.forEach(el => observer.observe(el));
  }

  /* ── Lightbox ── */
  const lightbox   = document.getElementById('apm-lightbox');
  const lbImg      = document.getElementById('lb-img');
  const lbCaption  = document.getElementById('lb-caption');
  const lbCounter  = document.getElementById('lb-counter');
  const lbPrevBtn  = document.getElementById('lb-prev');
  const lbNextBtn  = document.getElementById('lb-next');
  const lbCloseBtn = document.getElementById('lb-close-btn');

  let lbSet = [];
  let lbIndex = 0;
  let lbLastFocused = null;

  function renderLightboxImage() {
    if (!lbSet.length) return;
    const item = lbSet[lbIndex];
    lbImg.src = item.src;
    lbImg.alt = item.caption || '';
    lbCaption.textContent = item.caption || '';
    const hasNav = lbSet.length > 1;
    if (lbPrevBtn) lbPrevBtn.style.display = hasNav ? 'flex' : 'none';
    if (lbNextBtn) lbNextBtn.style.display = hasNav ? 'flex' : 'none';
    if (lbCounter) lbCounter.textContent = hasNav ? (lbIndex + 1) + ' / ' + lbSet.length : '';
  }

  // images (optional): full navigable set as [{src, caption}, ...]; index: starting position within it
  window.openLightbox = function (src, caption, index, images) {
    if (!lightbox) return;
    lbSet = Array.isArray(images) && images.length ? images : [{ src, caption }];
    lbIndex = Number.isInteger(index) && index >= 0 && index < lbSet.length ? index : 0;
    renderLightboxImage();
    lbLastFocused = document.activeElement;
    lightbox.style.display = 'flex';
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (lbCloseBtn) lbCloseBtn.focus();
  };
  window.closeLightbox = function () {
    if (!lightbox) return;
    lightbox.classList.remove('open');
    lightbox.style.display = 'none';
    document.body.style.overflow = '';
    if (lbLastFocused && typeof lbLastFocused.focus === 'function') lbLastFocused.focus();
  };
  window.nextLightboxImage = function () {
    if (lbSet.length < 2) return;
    lbIndex = (lbIndex + 1) % lbSet.length;
    renderLightboxImage();
  };
  window.prevLightboxImage = function () {
    if (lbSet.length < 2) return;
    lbIndex = (lbIndex - 1 + lbSet.length) % lbSet.length;
    renderLightboxImage();
  };
  if (lightbox) {
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightbox();
    });
  }
  document.addEventListener('keydown', e => {
    if (!lightbox || !lightbox.classList.contains('open')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowRight') nextLightboxImage();
    if (e.key === 'ArrowLeft') prevLightboxImage();
  });

  /* ── Product Brand Carousel ── */
  function apmCarouselShow(root, index) {
    const slides = root.querySelectorAll('.product-carousel-slide');
    const dots = root.querySelectorAll('.product-carousel-dot');
    const caption = root.querySelector('.product-carousel-caption');
    index = (index + slides.length) % slides.length;
    slides.forEach((s, i) => s.classList.toggle('active', i === index));
    dots.forEach((d, i) => d.classList.toggle('active', i === index));
    if (caption) caption.textContent = slides[index].dataset.caption || '';
  }
  window.apmCarouselNav = function (btn, dir) {
    const root = btn.closest('.product-carousel');
    if (!root) return;
    const slides = root.querySelectorAll('.product-carousel-slide');
    const current = [...slides].findIndex(s => s.classList.contains('active'));
    apmCarouselShow(root, current + dir);
  };
  window.apmCarouselGoTo = function (dot, index) {
    const root = dot.closest('.product-carousel');
    if (!root) return;
    apmCarouselShow(root, index);
  };

  /* ── Contact Form ── */
  const contactForm = document.getElementById('apm-contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const msg = document.getElementById('form-success');
      if (msg) {
        msg.style.display = 'block';
        setTimeout(() => { msg.style.display = 'none'; }, 6000);
      }
      contactForm.reset();
    });
  }

  /* ── Particles (Hero) ── */
  const particleContainer = document.getElementById('hero-particles');
  if (particleContainer) {
    for (let i = 0; i < 20; i++) {
      const p = document.createElement('div');
      p.className = 'hero-particle';
      const size = 2 + Math.random() * 4;
      p.style.cssText = [
        `left:${Math.random()*100}%`,
        `top:${Math.random()*100}%`,
        `width:${size}px`,
        `height:${size}px`,
        `animation-delay:${(Math.random()*7).toFixed(1)}s`,
        `animation-duration:${(6+Math.random()*7).toFixed(1)}s`,
      ].join(';');
      particleContainer.appendChild(p);
    }
  }

  /* ── Smooth anchor scroll ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

})();

/* ── Contact Form AJAX (PHP) ── */
(function() {
  const form = document.getElementById('apm-contact-form');
  if (!form) return;
  // Override the basic submit with real AJAX
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    const btn = form.querySelector('button[type="submit"]');
    const msg = document.getElementById('form-success');
    const errMsg = document.getElementById('form-error');
    if (btn) { btn.disabled = true; btn.textContent = 'Sending…'; }
    const data = new FormData(form);
    data.append('apm_contact', '1');
    fetch(form.action || window.location.pathname, {
      method: 'POST',
      body: data
    }).then(r => r.json()).then(res => {
      if (btn) { btn.disabled = false; btn.textContent = '📩 Send Inquiry'; }
      if (res.success) {
        if (msg) { msg.textContent = res.message; msg.style.display = 'block'; }
        if (errMsg) errMsg.style.display = 'none';
        form.reset();
        setTimeout(() => { if (msg) msg.style.display = 'none'; }, 8000);
      } else {
        if (errMsg) { errMsg.textContent = res.message; errMsg.style.display = 'block'; }
      }
    }).catch(() => {
      if (btn) { btn.disabled = false; btn.textContent = '📩 Send Inquiry'; }
      if (msg) { msg.textContent = 'Message sent! We will get back to you soon.'; msg.style.display = 'block'; }
      form.reset();
    });
  }, true);
})();
