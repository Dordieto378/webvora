<script setup>
const services = [
  {
    title: 'Business Websites',
    description:
      'Professional websites for service businesses that need trust, clarity, and conversion-focused pages.',
  },
  {
    title: 'Webshops',
    description:
      'Online stores with product structure, payments, and mobile-first experiences that feel polished.',
  },
  {
    title: 'Web Apps',
    description:
      'Custom tools, dashboards, and portals built around the way a business actually operates.',
  },
  {
    title: 'Hosting & Support',
    description:
      'Deployment, updates, backups, and technical support so clients do not need to manage the stack alone.',
  },
]

const projects = [
  {
    name: 'Northline Studio',
    type: 'Concept Project',
    summary: 'Brand-led business website for a creative studio with case studies and lead capture.',
  },
  {
    name: 'Fuel House Gym',
    type: 'Demo Project',
    summary: 'Conversion-focused fitness site with pricing blocks, class information, and membership CTA.',
  },
  {
    name: 'Meridian Supply',
    type: 'Personal Project',
    summary: 'B2B webshop concept with product filtering, quote requests, and clean admin flows.',
  },
]

const pricing = [
  {
    name: 'Starter Website',
    build: 'Starting from €900',
    support: 'Optional care plan from €79/month',
  },
  {
    name: 'Business Website',
    build: 'Starting from €1,800',
    support: 'Maintenance from €129/month',
  },
  {
    name: 'Webshop or Web App',
    build: 'Starting from €2,500',
    support: 'Custom support and hosting plans',
  },
]
</script>

<template>
  <div class="space-y-8 lg:space-y-10">
    <section class="section-shell overflow-hidden px-6 py-12 lg:px-10 lg:py-16">
      <div class="grid gap-12 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
        <div class="space-y-8">
          <span class="pill-label">Websites, webshops, web apps</span>
          <div class="space-y-5">
            <h1 class="max-w-4xl text-4xl font-semibold tracking-tight text-white md:text-6xl">
              Custom websites for businesses that want more than a template.
            </h1>
            <p class="max-w-2xl text-lg leading-8 text-neutral-300 md:text-xl">
              I design, build, host, and maintain modern digital products for businesses that
              need a reliable web presence and a clear technical partner.
            </p>
          </div>
          <div class="flex flex-col gap-3 sm:flex-row">
            <router-link to="/services" class="primary-button">View Services</router-link>
            <router-link to="/contact" class="secondary-button">Request a Quote</router-link>
          </div>
        </div>

        <div class="section-shell relative border-white/10 bg-white/5 p-6">
          <div class="absolute inset-0 bg-grid bg-[size:28px_28px] opacity-20" />
          <div class="relative space-y-6">
            <div class="flex items-center justify-between border-b border-white/10 pb-4">
              <p class="text-sm font-medium uppercase tracking-[0.24em] text-neutral-400">
                What clients get
              </p>
              <span class="rounded-full border border-accent/40 px-3 py-1 text-xs text-accent">
                End-to-end
              </span>
            </div>
            <div class="grid gap-4">
              <div class="rounded-2xl border border-white/10 bg-neutral-950/70 p-4">
                <p class="text-sm text-neutral-400">Build</p>
                <p class="mt-1 text-lg font-semibold text-white">
                  Strategy, design, development, launch
                </p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-neutral-950/70 p-4">
                <p class="text-sm text-neutral-400">Technical</p>
                <p class="mt-1 text-lg font-semibold text-white">
                  Hosting, deployment, domains, SSL, backups
                </p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-neutral-950/70 p-4">
                <p class="text-sm text-neutral-400">Support</p>
                <p class="mt-1 text-lg font-semibold text-white">
                  Maintenance, updates, content edits, improvements
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-shell px-6 py-10 lg:px-10">
      <div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div class="space-y-3">
          <span class="pill-label">Services</span>
          <h2 class="section-title">Everything needed to launch and keep a site running.</h2>
        </div>
        <router-link to="/services" class="secondary-button">See all services</router-link>
      </div>

      <div class="card-grid">
        <article
          v-for="service in services"
          :key="service.title"
          class="rounded-3xl border border-white/10 bg-neutral-950/70 p-6"
        >
          <h3 class="text-xl font-semibold text-white">{{ service.title }}</h3>
          <p class="mt-4 text-sm leading-7 text-neutral-400">{{ service.description }}</p>
        </article>
      </div>
    </section>

    <section class="section-shell px-6 py-10 lg:px-10">
      <div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div class="space-y-3">
          <span class="pill-label">Portfolio</span>
          <h2 class="section-title">Selected work that shows the range of projects.</h2>
        </div>
        <router-link to="/portfolio" class="secondary-button">View portfolio</router-link>
      </div>

      <div class="card-grid">
        <article
          v-for="project in projects"
          :key="project.name"
          class="rounded-3xl border border-white/10 bg-white/5 p-6"
        >
          <p class="text-xs font-semibold uppercase tracking-[0.22em] text-accent">{{ project.type }}</p>
          <h3 class="mt-4 text-xl font-semibold text-white">{{ project.name }}</h3>
          <p class="mt-4 text-sm leading-7 text-neutral-400">{{ project.summary }}</p>
        </article>
      </div>
    </section>

    <section class="section-shell px-6 py-10 lg:px-10">
      <div class="mb-8 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div class="space-y-3">
          <span class="pill-label">Pricing</span>
          <h2 class="section-title">Clear starting points for builds and monthly support.</h2>
        </div>
        <router-link to="/pricing" class="secondary-button">Explore pricing</router-link>
      </div>

      <div class="grid gap-6 lg:grid-cols-3">
        <article
          v-for="item in pricing"
          :key="item.name"
          class="rounded-3xl border border-white/10 bg-neutral-950/70 p-6"
        >
          <h3 class="text-xl font-semibold text-white">{{ item.name }}</h3>
          <p class="mt-5 text-sm uppercase tracking-[0.18em] text-neutral-500">Build</p>
          <p class="mt-2 text-2xl font-semibold text-white">{{ item.build }}</p>
          <p class="mt-5 text-sm uppercase tracking-[0.18em] text-neutral-500">Support</p>
          <p class="mt-2 text-sm leading-7 text-neutral-400">{{ item.support }}</p>
        </article>
      </div>
    </section>

    <section class="section-shell px-6 py-10 lg:px-10">
      <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
        <div class="space-y-4">
          <span class="pill-label">Contact</span>
          <h2 class="section-title">Need a website, webshop, or support plan?</h2>
          <p class="section-copy max-w-2xl">
            Let’s define the right scope, the right stack, and a realistic budget for your
            business.
          </p>
        </div>
        <router-link to="/contact" class="primary-button">Start a Project</router-link>
      </div>
    </section>
  </div>
</template>
