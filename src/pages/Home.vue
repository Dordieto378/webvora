<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'

const landingReady = ref(false)
let revealObserver

const showElement = (element) => {
  if (!element) {
    return
  }

  const delay = Number.parseInt(element.dataset.revealDelay ?? '0', 10)
  const safeDelay = Number.isNaN(delay) ? 0 : delay

  window.setTimeout(() => {
    element.classList.add('is-visible')
  }, safeDelay)
}

onMounted(() => {
  if ('scrollRestoration' in window.history) {
    window.history.scrollRestoration = 'manual'
  }

  if (window.location.hash) {
    window.history.replaceState(null, '', `${window.location.pathname}${window.location.search}`)
  }

  window.scrollTo({ top: 0, left: 0, behavior: 'auto' })

  landingReady.value = true

  const revealItems = Array.from(document.querySelectorAll('[data-reveal]'))

  if (!revealItems.length) {
    return
  }

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    revealItems.forEach((element) => element.classList.add('is-visible'))
    return
  }

  const loadRevealItems = revealItems.filter((element) => element.dataset.revealOnLoad === 'true')
  const scrollRevealItems = revealItems.filter((element) => element.dataset.revealOnLoad !== 'true')

  requestAnimationFrame(() => {
    loadRevealItems.forEach((element) => showElement(element))
  })

  revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return
        }

        showElement(entry.target)
        revealObserver?.unobserve(entry.target)
      })
    },
    {
      threshold: 0.18,
      rootMargin: '0px 0px -12% 0px',
    },
  )

  scrollRevealItems.forEach((element) => revealObserver?.observe(element))
})

onBeforeUnmount(() => {
  revealObserver?.disconnect()
})
</script>

<template>
  <div id="top" :class="['landing', { 'landing--ready': landingReady }]">
    <section class="hero">
      <div class="shell shell--full topbar">
        <div class="topbar__right" data-reveal="down" data-reveal-on-load="true">
          <span class="pill" data-reveal="down" data-reveal-delay="40" data-reveal-on-load="true"><i />Closed now</span>
          <a href="tel:0851302368" data-reveal="down" data-reveal-delay="90" data-reveal-on-load="true">085 130 23 68</a>
          <a href="mailto:hello@webvora.com" data-reveal="down" data-reveal-delay="140" data-reveal-on-load="true">hello@webvora.com</a>
        </div>
      </div>

      <div class="shell shell--full nav">
        <button class="menu" type="button" aria-label="Open menu" data-reveal="left" data-reveal-delay="60" data-reveal-on-load="true">
          <b class="menu__mark" aria-hidden="true">W</b>
        </button>
        <a href="#top" class="logo" data-reveal="down" data-reveal-delay="120" data-reveal-on-load="true">
          <strong>Webvora</strong>
        </a>
        <a href="#contact" class="nav__cta" data-reveal="right" data-reveal-delay="180" data-reveal-on-load="true">
          Contact us
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M5 5h14v10H8l-3 3V5Zm2 2v6.17L8.17 12H17V7H7Z" fill="currentColor" />
          </svg>
        </a>
      </div>

      <div class="shell shell--full hero__body">
        <p class="eyebrow" data-reveal="up" data-reveal-delay="140" data-reveal-on-load="true">We build digital products for ambitious businesses</p>
        <h1 data-reveal="up" data-reveal-delay="220" data-reveal-on-load="true">
          Online growth starts with
          <span>technical confidence</span>
        </h1>
        <p class="lead" data-reveal="up" data-reveal-delay="320" data-reveal-on-load="true">
          Webvora is a web development studio focused on business websites, online stores, and
          custom web applications.
        </p>
        <a class="scroll" href="#workflow" aria-label="Scroll to next section" data-reveal="up" data-reveal-delay="420" data-reveal-on-load="true">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M11 5h2v9.17l3.59-3.58L18 12l-6 6-6-6 1.41-1.41L11 14.17V5Z"
              fill="currentColor"
            />
          </svg>
        </a>

      </div>
    </section>

    <section id="workflow" class="workflow">
      <div class="shell workflow__card" data-reveal="up">
        <div data-reveal="up" data-reveal-delay="80">
          <h2 class="dark">Our <span>approach</span></h2>
          <p>
            When you work with Webvora, you work with specialists who value clear communication,
            fast execution, and long-term collaboration. Not just a delivery partner, but a team
            that thinks ahead and stays involved.
          </p>
          <a href="#contact" class="btn btn--solid">Get in touch</a>
        </div>
      </div>
    </section>

    <section id="services" class="growth">
      <div class="shell stack">
        <div class="split">
          <div data-reveal="up">
            <h2>Focused on <span>development</span></h2>
            <p>
              Webvora builds websites, e-commerce platforms, and tailored web applications. When
              you need strategic or technical guidance around an existing product, we can support
              that as well.
            </p>
            <a href="#contact" class="btn">Get in touch</a>
          </div>
        </div>

        <div class="contact-band">
          <div class="contact-band__intro" data-reveal="left">
            <h2>Curious what we can <span>build for you</span>?</h2>
            <a href="#contact" class="btn btn--contact">Get in touch</a>
          </div>

          <div class="mini-card" data-reveal="right" data-reveal-delay="80">
            <div class="mini-card__contact">
              <p>Contact us directly</p>
              <a href="#contact">Schedule a call</a>
              <a href="mailto:hello@webvora.com">hello@webvora.com</a>
              <a href="tel:0851302368">085 130 23 68</a>
              <span class="pill pill--lg"><i />Closed now</span>
            </div>
            <div class="mini-card__message">
              <h3>Webvora</h3>
              <p>Have a question or want to get acquainted? Give us a call or send a message.</p>
            </div>
            <span class="brand-mark brand-mark--contact" aria-hidden="true">W</span>
          </div>
        </div>

        <div class="skills">
          <h2 data-reveal="up">What we are <span>good at</span></h2>
          <div class="skills__grid">
            <article class="skill skill--hero" data-reveal="left">
              <div class="skill__art" aria-hidden="true">
                <svg viewBox="0 0 420 260">
                  <defs>
                    <linearGradient id="screenGlow" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="#ffffff" stop-opacity="0.92" />
                      <stop offset="100%" stop-color="#d8f3e4" stop-opacity="0.88" />
                    </linearGradient>
                  </defs>
                  <rect x="58" y="26" width="304" height="186" rx="18" fill="#ffffff" fill-opacity="0.78" />
                  <rect x="74" y="42" width="272" height="154" rx="12" fill="url(#screenGlow)" />
                  <rect x="95" y="63" width="94" height="12" rx="6" fill="#1ca766" fill-opacity="0.85" />
                  <rect x="95" y="91" width="168" height="10" rx="5" fill="#7ccfa1" fill-opacity="0.9" />
                  <rect x="95" y="111" width="226" height="10" rx="5" fill="#7ccfa1" fill-opacity="0.72" />
                  <rect x="95" y="140" width="78" height="34" rx="10" fill="#1ca766" fill-opacity="0.18" />
                  <rect x="184" y="140" width="78" height="34" rx="10" fill="#1ca766" fill-opacity="0.18" />
                  <rect x="273" y="140" width="48" height="34" rx="10" fill="#1ca766" fill-opacity="0.18" />
                  <path d="M196 212h28v18h34v10H162v-10h34v-18Z" fill="#ffffff" fill-opacity="0.82" />
                  <ellipse cx="210" cy="244" rx="84" ry="10" fill="#1ca766" fill-opacity="0.12" />
                </svg>
              </div>
              <h3>Business websites</h3>
              <p>Polished websites that support visibility, trust, and conversion.</p>
            </article>
            <article class="skill" data-reveal="up" data-reveal-delay="60">
              <h3>E-commerce</h3>
              <p>We build online stores that balance conversion, structure, and ease of use.</p>
            </article>
            <article class="skill" data-reveal="up" data-reveal-delay="120">
              <h3>Web applications</h3>
              <p>Secure, scalable apps built around the way your team actually works.</p>
            </article>
            <article class="skill" data-reveal="up" data-reveal-delay="180">
              <h3>Continuous improvement</h3>
              <p>We keep refining live platforms with focused iterations and measurable goals.</p>
            </article>
            <article class="skill" data-reveal="up" data-reveal-delay="240">
              <h3>Hosting and maintenance</h3>
              <p>Reliable hosting and support keep your platform stable, secure, and available.</p>
            </article>
          </div>
        </div>

        <div class="plans">
          <div class="plans__headline" data-reveal="left">
            <h2>Pricing and <span>project requirements</span></h2>
          </div>

          <div class="plans__copy" data-reveal="right" data-reveal-delay="80">
            <p>
              Clear starting prices for websites, web apps, and monthly support. Final pricing may
              increase when scope, complexity, integrations, or custom functionality go beyond the
              standard setup.
            </p>
          </div>

          <article class="plan plan--primary" data-reveal="up">
            <div class="plan__top">
              <p class="plan__price">from $300 <span>Website projects</span></p>
            </div>
            <h3>Websites</h3>
            <p class="plan__lead">
              Best suited for brochure sites, landing pages, and small business websites with a
              clear structure and client-provided design direction.
            </p>
            <ul>
              <li>1 to 3 pages: $300</li>
              <li>4 to 8 pages: $650</li>
              <li>8 to 12 pages: $1,000</li>
            </ul>
            <p class="plan__note">
              Client must provide a design file or clear visual references before the project can
              begin.
            </p>
          </article>

          <article class="plan plan--secondary" data-reveal="up" data-reveal-delay="100">
            <div class="plan__top">
              <p class="plan__price">from $1,500 <span>Custom app projects</span></p>
            </div>
            <h3>Web Apps</h3>
            <p class="plan__lead">
              A solid starting scope for simple internal tools, lightweight client portals, or
              business workflows that require custom data management.
            </p>
            <ul>
              <li>1 to 3 pages</li>
              <li>Login / register function</li>
              <li>Create, edit, delete, and view data</li>
              <li>Basic database setup</li>
              <li>Simple dashboard interface</li>
              <li>Deployment included</li>
              <li>Advanced features are quoted separately</li>
            </ul>
            <p class="plan__note">
              Client must provide a design file or clear visual references before the project can
              begin.
            </p>
          </article>

          <article class="plan plan--tertiary" data-reveal="up" data-reveal-delay="180">
            <div class="plan__top">
              <p class="plan__price">from $30/month <span>Maintenance and hosting</span></p>
            </div>
            <h3>Monthly Maintenance + Hosting</h3>
            <p class="plan__lead">
              Ongoing support for websites and lightweight applications. Pricing can increase if
              storage, traffic, or platform usage grows over time.
            </p>
            <ul>
              <li>Secure hosting environment</li>
              <li>Routine updates and maintenance</li>
              <li>Basic uptime oversight</li>
              <li>Monthly pricing scales with usage</li>
            </ul>
          </article>

        </div>
      </div>
    </section>

    <footer id="contact" class="footer">
      <div class="shell footer__grid">
        <div class="footer__main" data-reveal="left">
          <a href="#top" class="logo logo--foot">
            <b class="logo__badge">W</b>
            <strong>Webvora</strong>
          </a>

          <div class="col">
            <h3>Our vision</h3>
            <p>Online growth starts with technical confidence</p>
          </div>

          <div class="col">
            <h3>Opening hours</h3>
            <p>Mon - Fri 09:00 to 17:00</p>
          </div>

          <div class="col">
            <h3>Expertise</h3>
            <a href="#services">Websites</a>
            <a href="#services">Online stores</a>
            <a href="#services">Web apps</a>
            <a href="#services">Consulting</a>
            <a href="#services">Maintenance</a>
            <a href="#services">Hosting</a>
          </div>
        </div>

        <aside class="footer__card" data-reveal="right" data-reveal-delay="100">
          <div>
            <h3>Contact Webvora</h3>
            <a href="#contact">Schedule a call</a>
            <a href="mailto:hello@webvora.com">hello@webvora.com</a>
            <a href="tel:0851302368">085 130 23 68</a>
            <span class="pill pill--lg"><i />Closed now</span>
          </div>
          <span class="brand-mark brand-mark--footer" aria-hidden="true">W</span>
        </aside>
      </div>

      <div class="shell footer__bottom" data-reveal="up">
        <div class="socials">
          <a href="https://www.facebook.com" aria-label="Facebook">f</a>
          <a href="https://www.linkedin.com" aria-label="LinkedIn">in</a>
        </div>
        <div class="legal">
          <a href="#contact">Privacy</a>
          <a href="#contact">Terms and conditions</a>
        </div>
      </div>
    </footer>
  </div>
</template>
