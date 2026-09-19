document.addEventListener('DOMContentLoaded', function () {
var siteHeader = document.querySelector('.site-header');
if (siteHeader) {
  var onScroll = function () {
    siteHeader.classList.toggle('is-scrolled', window.scrollY > 12);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}
var navToggle = document.querySelector('.nav-toggle');
var mainNav   = document.querySelector('.main-nav');
if (navToggle && mainNav) {
  var closeNav = function () {
    mainNav.classList.remove('is-open');
    navToggle.classList.remove('is-active');
    navToggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('nav-open');
  };
  var openNav = function () {
    mainNav.classList.add('is-open');
    navToggle.classList.add('is-active');
    navToggle.setAttribute('aria-expanded', 'true');
    document.body.classList.add('nav-open');
  };
  navToggle.addEventListener('click', function (e) {
    e.stopPropagation();
    if (mainNav.classList.contains('is-open')) closeNav();
    else openNav();
  });
  mainNav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });
  document.addEventListener('click', function (e) {
    if (!mainNav.classList.contains('is-open')) return;
    if (mainNav.contains(e.target) || navToggle.contains(e.target)) return;
    closeNav();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mainNav.classList.contains('is-open')) closeNav();
  });
  var mq = window.matchMedia('(min-width: 1025px)');
  var handleResize = function () {
    if (mq.matches) closeNav();
  };
  if (mq.addEventListener) mq.addEventListener('change', handleResize);
  else mq.addListener(handleResize);
}

var themeToggle = document.querySelector('.theme-toggle');
var savedTheme = localStorage.getItem('rr-theme');
if (savedTheme) document.body.setAttribute('data-theme', savedTheme);

if (themeToggle) {
  themeToggle.addEventListener('click', function () {
    var current = document.body.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
    document.body.setAttribute('data-theme', current);
    localStorage.setItem('rr-theme', current);
  });
}

var showMoreBtn = document.querySelector('.show-more');
if (showMoreBtn) {
  showMoreBtn.addEventListener('click', function () {
    var wrap = showMoreBtn.closest('.about__copy');
    var expanded = wrap.classList.toggle('is-expanded');
    showMoreBtn.textContent = expanded ? 'Show Less..' : 'Show More..';
  });
}

var tabButtons = document.querySelectorAll('.portfolio__tabs button');
var portfolioItems = document.querySelectorAll('.portfolio__grid [data-category]');
tabButtons.forEach(function (btn) {
  btn.addEventListener('click', function () {
    tabButtons.forEach(function (b) { b.classList.remove('is-active'); });
    btn.classList.add('is-active');
    var category = btn.getAttribute('data-target');
    portfolioItems.forEach(function (item) {
      item.style.display = (category === 'all' || item.dataset.category === category) ? '' : 'none';
    });
  });
});

var contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Thanks! This form is frontend-only right now.');
    contactForm.reset();
  });
}

(function () {
  var hero   = document.querySelector('.hero');
  var viewer = document.getElementById('heroGlobe');
  if (!hero || !viewer) return;
  if (!window.matchMedia('(hover:hover) and (pointer:fine)').matches) return;
  var targetTheta = 0;
  var targetPhi   = 75;
  var currentTheta = 0;
  var currentPhi   = 75;
  var raf = null;
  function tick() {
    currentTheta += (targetTheta - currentTheta) * 0.12;
    currentPhi   += (targetPhi   - currentPhi)   * 0.12;
    viewer.cameraOrbit = currentTheta.toFixed(2) + 'deg ' + currentPhi.toFixed(2) + 'deg auto';
    if (Math.abs(targetTheta - currentTheta) > 0.05 || Math.abs(targetPhi - currentPhi) > 0.05) {
      raf = requestAnimationFrame(tick);
    } else { raf = null; }
  }
  hero.addEventListener('mousemove', function (e) {
    var r  = hero.getBoundingClientRect();
    var nx = (e.clientX - r.left) / r.width  - 0.5;
    var ny = (e.clientY - r.top ) / r.height - 0.5;
    targetTheta = -nx * 360;
    targetPhi   = 75 - ny * 30;
    if (!raf) raf = requestAnimationFrame(tick);
  });
  hero.addEventListener('mouseleave', function () {
    targetTheta = 0;
    targetPhi   = 75;
    if (!raf) raf = requestAnimationFrame(tick);
  });
})();

var sections = document.querySelectorAll('main [id]');
var navLinks = document.querySelectorAll('.main-nav a');
if ('IntersectionObserver' in window && sections.length) {
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        navLinks.forEach(function (link) {
          link.classList.toggle('is-active', link.getAttribute('href') === '#' + entry.target.id);
        });
      }
    });
  }, { rootMargin: '-45% 0px -50% 0px' });
  sections.forEach(function (section) { observer.observe(section); });
}

/* ---- Scroll reveal (about, services, why2, portfolio, testimonial, contact) ---- */
(function () {
  var groups = [
    ['.about__intro',                'reveal'],
    ['.about__copy',                 'reveal-left'],
    ['.about__art',                  'reveal-right'],
    ['.stats > div',                 'reveal', true],
    ['.services__heading',           'reveal-left'],
    ['.service-card',                'reveal', true],
    ['.why2__intro',                 'reveal'],
    ['.capability-card',             'reveal', true],
    ['.portfolio__title',            'reveal'],
    ['.portfolio__tabs',             'reveal-left'],
    ['.portfolio__grid [data-category]', 'reveal', true],
    ['.testimonial-card',            'reveal', true],
    ['.contact__art',                'reveal-left'],
    ['.contact__panel',              'reveal-right']
  ];

  var targets = [];
  groups.forEach(function (g) {
    var nodes = document.querySelectorAll(g[0]);
    nodes.forEach(function (el, i) {
      el.classList.add(g[1]);
      if (g[2]) el.style.setProperty('--reveal-delay', Math.min(i * 90, 360) + 'ms');
      targets.push(el);
    });
  });

  if (!targets.length) return;

  if (!('IntersectionObserver' in window) ||
      window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    targets.forEach(function (el) { el.classList.add('is-visible'); });
    return;
  }

  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      var el = entry.target;
      el.classList.add('is-visible');
      revealObserver.unobserve(el); // fire once, no further scroll work
      el.addEventListener('transitionend', function done(e) {
        if (e.propertyName === 'translate') { el.removeEventListener('transitionend', done); }
      });
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

  targets.forEach(function (el) { revealObserver.observe(el); });

  // Safety net: if something goes wrong (rare), don't leave content hidden.
  setTimeout(function () {
    targets.forEach(function (el) { el.classList.add('is-visible'); });
  }, 2500);
})();
});
