/* HaloBlock Midnight Edition: visual interactions only; pages and downloads work without JS. */
(() => {
  'use strict';
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)');
  const calm = () => reduced.matches;

  // Accessible scroll reveals. Sections remain visible without JavaScript.
  const reveals = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && !calm()) {
    document.documentElement.classList.add('js-enhanced');
    const io = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      }
    }), {threshold: 0.07, rootMargin: '0px 0px 70px 0px'});
    reveals.forEach(node => io.observe(node));
  } else {
    reveals.forEach(node => node.classList.add('is-visible'));
  }

  // Header state and a tiny scroll progress indicator.
  const header = document.querySelector('.site-header');
  const progress = document.createElement('div');
  progress.className = 'scroll-progress';
  progress.setAttribute('aria-hidden', 'true');
  document.body.appendChild(progress);
  let scrollQueued = false;
  const updateScroll = () => {
    const max = document.documentElement.scrollHeight - window.innerHeight;
    progress.style.transform = 'scaleX(' + (max > 0 ? Math.max(0, Math.min(1, window.scrollY / max)) : 0) + ')';
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 12);
    scrollQueued = false;
  };
  window.addEventListener('scroll', () => {
    if (!scrollQueued) {
      scrollQueued = true;
      window.requestAnimationFrame(updateScroll);
    }
  }, {passive: true});
  updateScroll();

  // Gentle illustration parallax (avoids page layout changes and runs only on pointer devices).
  const hero = document.querySelector('#heroStage');
  if (hero && !calm() && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    hero.addEventListener('pointermove', event => {
      const rect = hero.getBoundingClientRect();
      const x = ((event.clientX - rect.left) / rect.width - .5) * 20;
      const y = ((event.clientY - rect.top) / rect.height - .5) * 20;
      hero.style.setProperty('--mouse-x', x.toFixed(2) + 'px');
      hero.style.setProperty('--mouse-y', y.toFixed(2) + 'px');
    }, {passive: true});
    hero.addEventListener('pointerleave', () => {
      hero.style.setProperty('--mouse-x', '0px');
      hero.style.setProperty('--mouse-y', '0px');
    });
  }

  // Illustration-only filtering comparison, never represented as actual ad-blocking statistics.
  const scene = document.querySelector('#comparisonScene');
  const before = document.querySelector('#modeBefore');
  const after = document.querySelector('#modeAfter');
  const switchDemo = (clean) => {
    if (!scene || !before || !after) return;
    scene.classList.toggle('is-clean', clean);
    before.classList.toggle('active', !clean);
    after.classList.toggle('active', clean);
    before.setAttribute('aria-pressed', String(!clean));
    after.setAttribute('aria-pressed', String(clean));
    const label = scene.querySelector('.demo-blocker-label');
    if (label) label.textContent = clean ? 'ACTIVE' : 'PAUSED';
  };
  before?.addEventListener('click', () => switchDemo(false));
  after?.addEventListener('click', () => switchDemo(true));

  // Per-card hover spotlight uses CSS radial gradients; respects reduced motion.
  if (!calm() && window.matchMedia('(hover:hover) and (pointer:fine)').matches) {
    document.querySelectorAll('.spotlight-card').forEach(card => {
      card.addEventListener('pointermove', e => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--spot-x', (e.clientX - rect.left) + 'px');
        card.style.setProperty('--spot-y', (e.clientY - rect.top) + 'px');
      }, {passive:true});
    });
  }

  // Collapse mobile nav after choosing a destination.
  const nav = document.querySelector('#mainNav');
  if (nav) nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    const collapse = window.bootstrap?.Collapse?.getInstance(nav);
    if (collapse) collapse.hide();
  }));
})();
