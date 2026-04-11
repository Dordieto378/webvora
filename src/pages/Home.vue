<script setup>
import { onMounted } from 'vue'

onMounted(() => {
  if ('scrollRestoration' in window.history) {
    window.history.scrollRestoration = 'manual'
  }

  if (window.location.hash) {
    window.history.replaceState(null, '', `${window.location.pathname}${window.location.search}`)
  }

  window.scrollTo({ top: 0, left: 0, behavior: 'auto' })
})
</script>

<template>
  <div id="top" class="landing">
    <section class="hero">
      <div class="shell shell--full topbar">
        <div class="topbar__right">
          <span class="pill"><i />Closed now</span>
          <a href="tel:0851302368">085 130 23 68</a>
          <a href="mailto:hello@webvora.com">hello@webvora.com</a>
        </div>
      </div>

      <div class="shell shell--full nav">
        <button class="menu" type="button" aria-label="Open menu">
          <span />
          <span />
          <span />
        </button>
        <a href="#top" class="logo">
          <b class="logo__badge">W</b>
          <strong>Webvora</strong>
        </a>
        <a href="#contact" class="nav__cta">
          Contact us
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M5 5h14v10H8l-3 3V5Zm2 2v6.17L8.17 12H17V7H7Z" fill="currentColor" />
          </svg>
        </a>
      </div>

      <div class="shell shell--full hero__body">
        <p class="eyebrow">We build digital products for ambitious businesses</p>
        <h1>
          Online growth starts with
          <span>technical confidence</span>
        </h1>
        <p class="lead">
          Webvora is a web development studio focused on business websites, online stores, and
          custom web applications.
        </p>
        <a class="scroll" href="#workflow" aria-label="Scroll to next section">
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
      <div class="shell workflow__card">
        <div>
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
          <div>
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
          <div class="contact-band__intro">
            <h2>Curious what we can <span>build for you</span>?</h2>
            <a href="#contact" class="btn btn--contact">Get in touch</a>
          </div>

          <div class="mini-card">
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
          <h2>What we are <span>good at</span></h2>
          <div class="skills__grid">
            <article class="skill skill--hero">
              <h3>Business websites</h3>
              <p>Polished websites that support visibility, trust, and conversion.</p>
            </article>
            <article class="skill">
              <h3>E-commerce</h3>
              <p>We build online stores that balance conversion, structure, and ease of use.</p>
            </article>
            <article class="skill">
              <h3>Web applications</h3>
              <p>Secure, scalable apps built around the way your team actually works.</p>
            </article>
            <article class="skill">
              <h3>Continuous improvement</h3>
              <p>We keep refining live platforms with focused iterations and measurable goals.</p>
            </article>
            <article class="skill">
              <h3>Hosting and maintenance</h3>
              <p>Reliable hosting and support keep your platform stable, secure, and available.</p>
            </article>
          </div>
        </div>

        <div class="plans">
          <div class="plans__headline">
            <h2>How we <span>work together</span> on continuous growth</h2>
          </div>

          <div class="plans__copy">
            <p>
              We make a clear distinction between our SLA and our monthly development plan. The
              SLA focuses on stability, security, and fast support. Ongoing development is aimed at
              continuous improvement, innovation, and growth.
            </p>
          </div>

          <article class="plan plan--primary">
            <div class="plan__top">
              <p class="plan__price">from 500,- <span>SLA fee per month.</span></p>
            </div>
            <h3>Service level agreement (SLA)</h3>
            <p class="plan__lead">
              Our SLA gives you clear service guarantees. Because a website often plays a critical
              role in daily operations, we provide fast support and continuous monitoring.
            </p>
            <ul>
              <li>Same-day response for critical issues</li>
              <li>Direct action on security issues during office hours</li>
              <li>24/7 emergency service</li>
              <li>Support for questions and non-critical issues during office hours</li>
              <li>Continuous uptime monitoring</li>
              <li>Weekly updates and maintenance</li>
            </ul>
          </article>

          <article class="plan plan--secondary">
            <div class="plan__top">
              <p class="plan__price">from 4.000,- <span>Development per month.</span></p>
            </div>
            <h3>Monthly development</h3>
            <p class="plan__lead">
              Monthly development gives you faster execution, reserved capacity, and proactive
              thinking. As your development partner, we keep improving your platform in a
              structured way.
            </p>
            <ul>
              <li>Fast and structured execution of tasks</li>
              <li>Scrum-style standups for prioritization and new work</li>
              <li>Reserved monthly capacity</li>
              <li>Dedicated contact person and specialist team</li>
              <li>Monthly reporting and transparent time tracking</li>
              <li>Proactive thinking around new opportunities</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <footer id="contact" class="footer">
      <div class="shell footer__grid">
        <div class="footer__main">
          <a href="#top" class="logo logo--foot">
            <b class="logo__badge">W</b>
            <strong>Webvora</strong>
          </a>

          <div class="col">
            <h3>Our vision</h3>
            <p>Online growth starts with technical confidence</p>
          </div>

          <div class="col">
            <h3>Visit us</h3>
            <p>Agro Business Park 22</p>
            <p>6708 PW Wageningen</p>
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

        <aside class="footer__card">
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

      <div class="shell footer__bottom">
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

