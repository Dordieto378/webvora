<script setup>
const buildPlans = [
  {
    name: 'Starter Website',
    price: '€900 - €1,500',
    description: 'For small businesses that need a clean, professional website without extra complexity.',
    features: ['1 to 5 pages', 'Mobile responsive', 'Contact form', 'Basic SEO setup'],
  },
  {
    name: 'Business Website',
    price: '€1,800 - €3,000',
    description: 'For companies that need a stronger brand presence, more structure, and custom sections.',
    features: ['Custom design', 'Multiple pages', 'Advanced forms', 'Editable content setup'],
  },
  {
    name: 'Webshop / Web App',
    price: 'From €2,500',
    description: 'For product sales, custom workflows, or features that need a tailored solution.',
    features: ['Custom functionality', 'Payment or data flows', 'Scalable structure', 'Scope-based quote'],
  },
]

const monthlyPlans = [
  {
    name: 'Care Plan',
    price: '€79/month',
    features: ['Hosting', 'Updates', 'Backups', 'Security checks', 'Small content changes'],
  },
  {
    name: 'Growth Plan',
    price: '€199/month',
    features: ['Everything in Care Plan', 'Priority support', 'Monthly improvements', 'Analytics review'],
  },
  {
    name: 'Technical Management',
    price: '€50 - €250/month',
    features: ['Hosting management', 'Monitoring', 'Deployment support', 'Maintenance based on scope'],
  },
]
</script>

<template>
  <div class="space-y-8">
    <section class="section-shell px-6 py-12 lg:px-10">
      <span class="pill-label">Pricing</span>
      <div class="mt-6 max-w-3xl space-y-5">
        <h1 class="section-title">Straightforward pricing with room for custom scope.</h1>
        <p class="section-copy">
          Projects are quoted based on requirements, but clear starting points help clients
          understand both the build cost and the monthly support side.
        </p>
      </div>
    </section>

    <section class="space-y-5">
      <div class="space-y-3">
        <h2 class="text-2xl font-semibold text-white">Build Pricing</h2>
        <p class="text-sm leading-7 text-neutral-400">
          One-time project pricing for websites, shops, and custom builds.
        </p>
      </div>
      <div class="grid gap-6 lg:grid-cols-3">
        <article
          v-for="plan in buildPlans"
          :key="plan.name"
          class="section-shell p-6"
        >
          <h3 class="text-xl font-semibold text-white">{{ plan.name }}</h3>
          <p class="mt-4 text-3xl font-semibold text-accent">{{ plan.price }}</p>
          <p class="mt-4 text-sm leading-7 text-neutral-400">{{ plan.description }}</p>
          <ul class="mt-6 space-y-3 text-sm text-neutral-300">
            <li
              v-for="feature in plan.features"
              :key="feature"
              class="flex items-start gap-3"
            >
              <span class="mt-2 h-2 w-2 rounded-full bg-accent" />
              <span>{{ feature }}</span>
            </li>
          </ul>
        </article>
      </div>
    </section>

    <section class="space-y-5">
      <div class="space-y-3">
        <h2 class="text-2xl font-semibold text-white">Monthly Support</h2>
        <p class="text-sm leading-7 text-neutral-400">
          Recurring plans for hosting, maintenance, and ongoing technical support.
        </p>
      </div>
      <div class="grid gap-6 lg:grid-cols-3">
        <article
          v-for="plan in monthlyPlans"
          :key="plan.name"
          class="section-shell p-6"
        >
          <h3 class="text-xl font-semibold text-white">{{ plan.name }}</h3>
          <p class="mt-4 text-3xl font-semibold text-accent">{{ plan.price }}</p>
          <ul class="mt-6 space-y-3 text-sm text-neutral-300">
            <li
              v-for="feature in plan.features"
              :key="feature"
              class="flex items-start gap-3"
            >
              <span class="mt-2 h-2 w-2 rounded-full bg-accent" />
              <span>{{ feature }}</span>
            </li>
          </ul>
        </article>
      </div>
    </section>
  </div>
</template>
