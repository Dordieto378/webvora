<script setup>
const services = [
  {
    title: 'Business Websites',
    description:
      'Professional websites for companies that need a trustworthy online presence and clear service messaging.',
    items: ['Company websites', 'Landing pages', 'Service websites', 'Contact and booking forms'],
  },
  {
    title: 'Webshops',
    description:
      'E-commerce builds for businesses that want a clean storefront and an easy buying experience.',
    items: ['Product pages', 'Payment integrations', 'Order management setup', 'Mobile-first storefronts'],
  },
  {
    title: 'Web Apps',
    description:
      'Custom tools when a business needs something more specific than a standard website or shop.',
    items: ['Dashboards', 'Admin panels', 'Internal tools', 'Booking systems and portals'],
  },
  {
    title: 'Hosting & Server Management',
    description:
      'Technical infrastructure handled properly so clients do not need to worry about deployment or upkeep.',
    items: ['Domain setup', 'Hosting setup', 'SSL and security', 'Backups and monitoring'],
  },
  {
    title: 'Monthly Support & Maintenance',
    description:
      'Ongoing support for edits, fixes, updates, and improvements after launch.',
    items: ['Content edits', 'Bug fixes', 'Updates', 'Technical support and improvements'],
  },
]
</script>

<template>
  <div class="space-y-8">
    <section class="section-shell px-6 py-12 lg:px-10">
      <span class="pill-label">Services</span>
      <div class="mt-6 max-w-3xl space-y-5">
        <h1 class="section-title">Practical web services for businesses that need real support.</h1>
        <p class="section-copy">
          The goal is not to hand over a site and disappear. Projects are built with launch,
          maintenance, and long-term usability in mind.
        </p>
      </div>
    </section>

    <section class="card-grid">
      <article
        v-for="service in services"
        :key="service.title"
        class="section-shell p-6"
      >
        <h2 class="text-2xl font-semibold text-white">{{ service.title }}</h2>
        <p class="mt-4 text-sm leading-7 text-neutral-400">{{ service.description }}</p>
        <ul class="mt-6 space-y-3 text-sm text-neutral-300">
          <li
            v-for="item in service.items"
            :key="item"
            class="flex items-start gap-3"
          >
            <span class="mt-2 h-2 w-2 rounded-full bg-accent" />
            <span>{{ item }}</span>
          </li>
        </ul>
      </article>
    </section>
  </div>
</template>
