(() => {
  const themeToggle = document.querySelector('.theme-toggle');
  const themeColor = document.querySelector('meta[name="theme-color"]');
  const systemTheme = window.matchMedia('(prefers-color-scheme: dark)');
  const applyTheme = (theme) => {
    const dark = theme === 'dark';
    document.documentElement.dataset.theme = theme;
    themeToggle?.setAttribute('aria-pressed', String(dark));
    themeToggle?.setAttribute('aria-label', `Switch to ${dark ? 'light' : 'dark'} mode`);
    themeColor?.setAttribute('content', dark ? '#111111' : '#ffffff');
  };
  applyTheme(document.documentElement.dataset.theme || (systemTheme.matches ? 'dark' : 'light'));
  themeToggle?.addEventListener('click', () => {
    const nextTheme = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
    applyTheme(nextTheme);
    try { localStorage.setItem('portfolio-theme', nextTheme); } catch {}
  });
  systemTheme.addEventListener('change', (event) => {
    try {
      if (!localStorage.getItem('portfolio-theme')) applyTheme(event.matches ? 'dark' : 'light');
    } catch {
      applyTheme(event.matches ? 'dark' : 'light');
    }
  });
  const menuButton = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');
  const navLinks = [...document.querySelectorAll('.site-nav a')];
  const sections = navLinks.map((link) => document.querySelector(link.getAttribute('href'))).filter(Boolean);
  const backToTop = document.querySelector('.back-to-top');
  const footer = document.querySelector('.site-footer');
  menuButton?.addEventListener('click', () => { const open = nav.classList.toggle('open'); menuButton.setAttribute('aria-expanded', String(open)); });
  navLinks.forEach((link) => link.addEventListener('click', () => { nav?.classList.remove('open'); menuButton?.setAttribute('aria-expanded', 'false'); }));
  document.addEventListener('click', (event) => {
    if (nav?.classList.contains('open') && !nav.contains(event.target) && !menuButton?.contains(event.target)) {
      nav.classList.remove('open');
      menuButton?.setAttribute('aria-expanded', 'false');
    }
  });
  const observer = new IntersectionObserver((entries) => entries.forEach((entry) => { if (entry.isIntersecting) entry.target.classList.add('visible'); }), { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach((item) => observer.observe(item));
  const navObserver = new IntersectionObserver((entries) => entries.forEach((entry) => { if (entry.isIntersecting) navLinks.forEach((link) => link.classList.toggle('active', link.getAttribute('href') === `#${entry.target.id}`)); }), { rootMargin: '-30% 0px -60% 0px', threshold: 0 });
  sections.forEach((section) => navObserver.observe(section));
  window.addEventListener('scroll', () => backToTop?.classList.toggle('visible', window.scrollY > 600), { passive: true });
  backToTop?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  if (footer && backToTop) {
    const footerObserver = new IntersectionObserver(([entry]) => {
      backToTop.classList.toggle('footer-visible', entry.isIntersecting);
    });
    footerObserver.observe(footer);
  }

  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.getRegistrations().then((registrations) => {
        for (const registration of registrations) {
          registration.unregister();
        }
      }).catch(() => {});
      if ('caches' in window) {
        caches.keys().then((keys) => keys.forEach((key) => caches.delete(key))).catch(() => {});
      }
    });
  }
})();
