<template>
  <div class="space-y-8">
    <section class="section-shell px-6 py-12 lg:px-10">
      <span class="pill-label">Contact</span>
      <div class="mt-6 max-w-3xl space-y-5">
        <h1 class="section-title">Let’s build something that fits your business properly.</h1>
        <p class="section-copy">
          Whether you need a website, a webshop, a custom app, or ongoing technical management,
          the next step is a clear scope and a realistic quote.
        </p>
      </div>
    </section>

    <section class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
      <div class="section-shell p-6 lg:p-8">
        <h2 class="text-2xl font-semibold text-white">Project inquiry</h2>
        <form class="mt-6 grid gap-5">
          <label class="grid gap-2 text-sm text-neutral-300">
            Name
            <input
              type="text"
              class="rounded-2xl border border-white/10 bg-neutral-950/80 px-4 py-3 text-white outline-none ring-0 transition focus:border-accent"
              placeholder="Your name"
            />
          </label>
          <label class="grid gap-2 text-sm text-neutral-300">
            Email
            <input
              type="email"
              class="rounded-2xl border border-white/10 bg-neutral-950/80 px-4 py-3 text-white outline-none ring-0 transition focus:border-accent"
              placeholder="you@company.com"
            />
          </label>
          <label class="grid gap-2 text-sm text-neutral-300">
            Project type
            <select
              class="rounded-2xl border border-white/10 bg-neutral-950/80 px-4 py-3 text-white outline-none transition focus:border-accent"
            >
              <option>Business website</option>
              <option>Webshop</option>
              <option>Web app</option>
              <option>Hosting / maintenance</option>
            </select>
          </label>
          <label class="grid gap-2 text-sm text-neutral-300">
            Budget or range
            <input
              type="text"
              class="rounded-2xl border border-white/10 bg-neutral-950/80 px-4 py-3 text-white outline-none transition focus:border-accent"
              placeholder="Example: €1,500 - €3,000"
            />
          </label>
          <label class="grid gap-2 text-sm text-neutral-300">
            Project details
            <textarea
              rows="5"
              class="rounded-2xl border border-white/10 bg-neutral-950/80 px-4 py-3 text-white outline-none transition focus:border-accent"
              placeholder="Tell me what you need, what the business does, and what problem the site should solve."
            />
          </label>
          <button type="button" class="primary-button w-full sm:w-fit">Send Inquiry</button>
        </form>
      </div>

      <aside class="section-shell p-6 lg:p-8">
        <h2 class="text-2xl font-semibold text-white">Direct contact</h2>
        <div class="mt-6 space-y-6 text-sm text-neutral-300">
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-neutral-500">Email</p>
            <p class="mt-2 text-base text-white">hello@webvora.com</p>
          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-neutral-500">WhatsApp</p>
            <p class="mt-2 text-base text-white">+31 6 12 34 56 78</p>
          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-neutral-500">Typical support</p>
            <p class="mt-2 leading-7 text-neutral-400">
              Scope advice, project estimates, hosting questions, maintenance plans, and technical
              support options.
            </p>
          </div>
        </div>
      </aside>
    </section>
  </div>
</template>
