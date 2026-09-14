<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="service-worker-url" content="{{ asset('sw.js') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Geovanni M. Vergara — Portfolio and developer showcase.">
  <link rel="canonical" href="{{ url('/') }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:title" content="Geovanni M. Vergara — Developer Portfolio">
  <meta property="og:description" content="Portfolio of web systems and technology projects by Geovanni M. Vergara.">
  <meta name="twitter:card" content="summary">
  <meta name="theme-color" content="#111111">
  <script>try{const t=localStorage.getItem('portfolio-theme');const d=t?t==='dark':matchMedia('(prefers-color-scheme: dark)').matches;document.documentElement.dataset.theme=d?'dark':'light'}catch(e){}</script>
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('enhancements.css') }}?v={{ time() }}">
  <title>Geovanni M. Vergara — Developer Portfolio</title>
  <script type="application/ld+json">{"@@context":"https://schema.org","@@type":"Person","name":"Geovanni M. Vergara","url":"{{ url('/') }}","jobTitle":"Web Developer"}</script>
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to content</a>
  <header class="site-header">
    <div class="shell nav-wrap">
      <a class="wordmark" href="#top" aria-label="Geovanni M. Vergara, home">Geovanni M. Vergara<span>.</span></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav">Menu</button>
      <nav id="site-nav" class="site-nav" aria-label="Main navigation">
        <a href="#about">About</a><a href="#work">Work</a><a href="#experience">Experience</a><a href="#contact">Contact</a>
      </nav>
      <button class="theme-toggle" type="button" aria-label="Switch to dark mode" aria-pressed="false">
        <svg class="theme-icon theme-icon-moon" aria-hidden="true" viewBox="0 0 24 24"><path d="M20.2 15.7A8.5 8.5 0 0 1 8.3 3.8 8.5 8.5 0 1 0 20.2 15.7Z"/></svg>
        <svg class="theme-icon theme-icon-sun" aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3.5"/><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.42-1.41M17.66 6.34l1.41-1.41"/></svg>
      </button>
      <a class="nav-cta" href="#contact">Get in touch <span aria-hidden="true">↗</span></a>
    </div>
  </header>
  <main id="main-content">
    <section id="top" class="hero shell reveal hero-no-image">
      <div class="hero-copy">
        <div class="hero-eyebrow-wrap">
          <span class="eyebrow">Portfolio &amp; Selected Systems</span>
          <span class="eyebrow-divider">/</span>
          <span class="eyebrow-year">2026 Edition</span>
        </div>
        <h1>Geovanni M.<br>Vergara<span>.</span></h1>
        <p class="hero-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        
        <div class="availability-pill">
          <span class="live-pulse-dot" aria-hidden="true"></span>
          <p class="availability-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus lacinia.</p>
        </div>

        <div class="hero-actions">
          <a class="button button-primary" href="#work">Explore Work <span aria-hidden="true">↓</span></a>
          <a class="button button-secondary" href="#contact">Start Conversation</a>
        </div>

        <div class="hero-stats-row">
          <div class="stat-box">
            <span class="stat-num">01</span>
            <span class="stat-text">Clean Architecture</span>
          </div>
          <span class="stat-slash" aria-hidden="true">/</span>
          <div class="stat-box">
            <span class="stat-num">02</span>
            <span class="stat-text">Modern Stack</span>
          </div>
          <span class="stat-slash" aria-hidden="true">/</span>
          <div class="stat-box">
            <span class="stat-num">03</span>
            <span class="stat-text">Fast Performance</span>
          </div>
        </div>

        <ul class="social-list" aria-label="Professional links">
          <li><a href="#" target="_blank" rel="noopener noreferrer">GitHub ↗</a></li>
          <li><a href="#" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a></li>
          <li><a href="#contact" rel="noopener noreferrer">Contact ↗</a></li>
        </ul>
      </div>
    </section>

    <section id="about" class="shell section reveal">
      <div class="section-label">01 / About</div>
      <div class="about-grid">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.</p>
          <p>Nunc ut sem vitae risus tristique posuere. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
      </div>
      <div class="capability-grid" aria-label="Capabilities">
        <article>
          <div class="cap-header">
            <span class="cap-num">01</span>
            <span class="cap-pill">Architecture</span>
          </div>
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
        </article>
        <article>
          <div class="cap-header">
            <span class="cap-num">02</span>
            <span class="cap-pill">Development</span>
          </div>
          <h3>Dolor Sit</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
        </article>
        <article>
          <div class="cap-header">
            <span class="cap-num">03</span>
            <span class="cap-pill">Engineering</span>
          </div>
          <h3>Amet Consectetur</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
        </article>
      </div>
      <div class="tech-stack" aria-label="Technology stack">
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>PHP</strong><span>Backend</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/composer/composer-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Composer</strong><span>Dependencies</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>JavaScript</strong><span>Frontend &amp; APIs</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>MySQL</strong><span>Database</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/codeigniter/codeigniter-plain.svg" width="40" height="40" loading="lazy" alt=""><div><strong>CodeIgniter 4</strong><span>Framework</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Laravel</strong><span>Framework</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Bootstrap</strong><span>UI toolkit</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Tailwind CSS</strong><span>UI styling</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/arduino/arduino-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Arduino</strong><span>Hardware</span></div></article>
        <article><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Git</strong><span>Version control</span></div></article>
        <article class="tech-recent"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nginx/nginx-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Nginx</strong><span>Web server</span></div><small>Recent</small></article>
        <article class="tech-recent"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/ubuntu/ubuntu-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Ubuntu</strong><span>Server OS</span></div><small>Recent</small></article>
        <article class="tech-recent"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azure/azure-original.svg" width="40" height="40" loading="lazy" alt=""><div><strong>Azure</strong><span>Cloud platform</span></div><small>Recent</small></article>
      </div>
    </section>

    <section id="work" class="shell section work-section reveal">
      <div class="section-heading">
        <div class="section-label">02 / Selected work</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</p>
      </div>
      <div class="selected-grid">
        <article class="project">
          <div class="project-meta">
            <span class="project-badge">01</span>
            <span class="project-category">Web System</span>
          </div>
          <h2>Lorem Ipsum Project</h2>
          <p class="project-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
          <dl class="case-study">
            <div class="case-item"><dt>Problem</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore.</dd></div>
            <div class="case-item"><dt>Approach</dt><dd>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd></div>
            <div class="case-item"><dt>Key features</dt><dd>Lorem · Ipsum · Dolor</dd></div>
          </dl>
          <div class="tag-row"><span>Lorem</span><span>Ipsum</span><span>Dolor</span></div>
          <div class="project-actions">
            <a class="project-link" href="#">Explore project <span aria-hidden="true">→</span></a>
            <span class="project-status">Production</span>
          </div>
        </article>

        <article class="project">
          <div class="project-meta">
            <span class="project-badge">02</span>
            <span class="project-category">Cloud Database</span>
          </div>
          <h2>Dolor Sit Application</h2>
          <p class="project-lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
          <dl class="case-study">
            <div class="case-item"><dt>Problem</dt><dd>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd></div>
            <div class="case-item"><dt>Approach</dt><dd>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</dd></div>
            <div class="case-item"><dt>Key features</dt><dd>Consectetur · Adipiscing · Elit</dd></div>
          </dl>
          <div class="tag-row"><span>Consectetur</span><span>Adipiscing</span><span>Elit</span></div>
          <div class="project-actions">
            <a class="project-link" href="#">Explore project <span aria-hidden="true">→</span></a>
            <span class="project-status">Completed</span>
          </div>
        </article>

        <article class="project">
          <div class="project-meta">
            <span class="project-badge">03</span>
            <span class="project-category">Interface &amp; API</span>
          </div>
          <h2>Amet Elit Platform</h2>
          <p class="project-lead">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur.</p>
          <dl class="case-study">
            <div class="case-item"><dt>Problem</dt><dd>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia non.</dd></div>
            <div class="case-item"><dt>Approach</dt><dd>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</dd></div>
            <div class="case-item"><dt>Key features</dt><dd>Sed · Cursus · Ante</dd></div>
          </dl>
          <div class="tag-row"><span>Sed</span><span>Cursus</span><span>Ante</span></div>
          <div class="project-actions">
            <a class="project-link" href="#">Explore project <span aria-hidden="true">→</span></a>
            <span class="project-status">Featured</span>
          </div>
        </article>
      </div>

      <div class="additional-work">
        <div class="section-heading">
          <div class="section-label">Additional work</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="work-index">
          <div class="work-group">
            <h3>Lorem systems</h3>
            <a href="#"><span>Lorem Ipsum One</span><small>Lorem · Ipsum</small><b>↗</b></a>
            <a href="#"><span>Lorem Ipsum Two</span><small>Dolor · Sit</small><b>↗</b></a>
            <a href="#"><span>Lorem Ipsum Three</span><small>Amet · Consectetur</small><b>↗</b></a>
            <a href="#"><span>Lorem Ipsum Four</span><small>Adipiscing · Elit</small><b>↗</b></a>
          </div>
          <div class="work-group">
            <h3>Dolor projects</h3>
            <a href="#"><span>Dolor Sit One</span><small>Lorem · Ipsum</small><b>↗</b></a>
            <div class="work-unavailable"><span>Dolor Sit Two</span><small>Dolor · Sit</small><b>Unavailable</b></div>
            <a href="#"><span>Dolor Sit Three</span><small>Amet · Consectetur</small><b>↗</b></a>
          </div>
        </div>
      </div>
    </section>

    <section id="experience" class="shell section reveal">
      <div class="section-label">03 / Experience</div>
      <div class="resume-grid single-column">
        <div>
          <h2>Experience</h2>
          <ol class="timeline">
            <li>
              <div class="timeline-head">
                <h3>Lorem Ipsum Role</h3>
                <span class="timeline-period">2024 — Present</span>
              </div>
              <div class="timeline-org">
                <span class="org-name">Lorem Ipsum Enterprise</span>
                <span class="org-type">Full Time</span>
              </div>
              <p class="timeline-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </li>
            <li>
              <div class="timeline-head">
                <h3>Dolor Sit Position</h3>
                <span class="timeline-period">2022 — 2024</span>
              </div>
              <div class="timeline-org">
                <span class="org-name">Dolor Sit Corporation</span>
                <span class="org-type">Contract</span>
              </div>
              <p class="timeline-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </li>
            <li>
              <div class="timeline-head">
                <h3>Consectetur Specialist</h3>
                <span class="timeline-period">2021 — 2022</span>
              </div>
              <div class="timeline-org">
                <span class="org-name">Consectetur Solutions</span>
                <span class="org-type">Project Lead</span>
              </div>
              <p class="timeline-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </li>
          </ol>
        </div>
      </div>
    </section>

    <section id="contact" class="contact-section reveal">
      <div class="shell contact-shell">
        <div class="contact-inner">
          <div>
            <div class="contact-badge">
              <span class="badge-dot"></span>
              <span>Available for collaborations</span>
            </div>
            <h2>Let’s build something extraordinary.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="contact-action-col">
            <a class="button button-light" href="mailto:geovanni@example.com">Send an Email <span aria-hidden="true">→</span></a>
            <span class="contact-subtext">Usually responds within 24 hours</span>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="site-footer">
    <div class="shell">
      <span>© 2026 Geovanni M. Vergara</span>
      <div class="footer-links">
        <a href="#about">About</a>
        <a href="#work">Work</a>
        <a href="#experience">Experience</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </footer>
  <button class="back-to-top" type="button" aria-label="Back to top">↑</button>
  <script src="{{ asset('script.js') }}?v={{ time() }}"></script>
</body>
</html>
