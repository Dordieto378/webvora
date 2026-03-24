<script setup>
const projects = [
  {
    title: 'Northline Studio',
    tag: 'Concept Project',
    description:
      'A premium portfolio and lead-generation site for a creative business that needs strong positioning.',
    stack: 'Vue, Tailwind, custom content structure',
  },
  {
    title: 'Fuel House Gym',
    tag: 'Demo Project',
    description:
      'A high-conversion service website with pricing, class schedules, and membership-focused CTA sections.',
    stack: 'Vite, Vue Router, Tailwind',
  },
  {
    title: 'Meridian Supply',
    tag: 'Personal Project',
    description:
      'A B2B webshop concept built to show product organization, quote requests, and purchase flow clarity.',
    stack: 'E-commerce architecture, product UX, responsive design',
  },
  {
    title: 'StudioOps Dashboard',
    tag: 'Demo Project',
    description:
      'A dashboard concept for managing bookings, invoices, and internal workflow in one place.',
    stack: 'SPA architecture, custom components, data-first layout',
  },
]
</script>

<template>
  <div class="space-y-8">
    <section class="section-shell px-6 py-12 lg:px-10">
      <span class="pill-label">Portfolio</span>
      <div class="mt-6 max-w-3xl space-y-5">
        <h1 class="section-title">Work that demonstrates business-focused execution.</h1>
        <p class="section-copy">
          Early portfolio pieces can be concept, demo, or personal projects. The important part
          is that they show credible solutions for real business use cases.
        </p>
      </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-2">
      <article
        v-for="project in projects"
        :key="project.title"
        class="section-shell p-6"
      >
        <div class="flex items-center justify-between gap-4">
          <h2 class="text-2xl font-semibold text-white">{{ project.title }}</h2>
          <span class="rounded-full border border-accent/30 px-3 py-1 text-xs font-semibold uppercase tracking-[0.18em] text-accent">
            {{ project.tag }}
          </span>
        </div>
        <p class="mt-5 text-sm leading-7 text-neutral-400">{{ project.description }}</p>
        <div class="mt-6 rounded-2xl border border-white/10 bg-neutral-950/70 px-4 py-3 text-sm text-neutral-300">
          {{ project.stack }}
        </div>
      </article>
    </section>
  </div>
</template>
