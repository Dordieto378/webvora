<script setup>
import { computed, ref, watch } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const mobileMenuOpen = ref(false)

const links = [
  { name: 'Home', to: '/' },
  { name: 'Services', to: '/services' },
  { name: 'Portfolio', to: '/portfolio' },
  { name: 'Pricing', to: '/pricing' },
  { name: 'About', to: '/about' },
  { name: 'Contact', to: '/contact' },
]

const currentPath = computed(() => route.path)

watch(currentPath, () => {
  mobileMenuOpen.value = false
})
</script>

<template>
  <header class="sticky top-0 z-40 border-b border-white/10 bg-neutral-950/85 backdrop-blur-xl">
    <div class="mx-auto flex max-w-content items-center justify-between px-6 py-4 lg:px-8">
      <router-link to="/" class="flex items-center gap-3 text-white">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-accent/40 bg-accent/10 text-sm font-bold tracking-[0.3em] text-accent">
          W
        </span>
        <span class="text-lg font-semibold tracking-[0.22em] text-white">WEBVORA</span>
      </router-link>

      <nav class="hidden items-center gap-2 md:flex">
        <router-link
          v-for="link in links"
          :key="link.to"
          :to="link.to"
          custom
          v-slot="{ navigate, href, isExactActive }"
        >
          <a
            :href="href"
            class="rounded-full px-4 py-2 text-sm font-medium transition duration-200"
            :class="
              isExactActive
                ? 'bg-white text-neutral-950'
                : 'text-neutral-300 hover:bg-white/5 hover:text-white'
            "
            @click="navigate"
          >
            {{ link.name }}
          </a>
        </router-link>
      </nav>

      <div class="hidden md:block">
        <router-link to="/contact" class="primary-button">Request a Quote</router-link>
      </div>

      <button
        type="button"
        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-white md:hidden"
        :aria-expanded="mobileMenuOpen"
        aria-label="Toggle navigation menu"
        @click="mobileMenuOpen = !mobileMenuOpen"
      >
        <span class="relative block h-4 w-5">
          <span
            class="absolute left-0 top-0 h-0.5 w-5 bg-current transition duration-200"
            :class="mobileMenuOpen ? 'translate-y-[7px] rotate-45' : ''"
          />
          <span
            class="absolute left-0 top-[7px] h-0.5 w-5 bg-current transition duration-200"
            :class="mobileMenuOpen ? 'opacity-0' : ''"
          />
          <span
            class="absolute left-0 top-[14px] h-0.5 w-5 bg-current transition duration-200"
            :class="mobileMenuOpen ? '-translate-y-[7px] -rotate-45' : ''"
          />
        </span>
      </button>
    </div>

    <div v-if="mobileMenuOpen" class="border-t border-white/10 bg-neutral-950/95 md:hidden">
      <nav class="mx-auto flex max-w-content flex-col gap-2 px-6 py-5">
        <router-link
          v-for="link in links"
          :key="`mobile-${link.to}`"
          :to="link.to"
          class="rounded-2xl px-4 py-3 text-sm font-medium"
          :class="
            currentPath === link.to
              ? 'bg-white text-neutral-950'
              : 'text-neutral-300 hover:bg-white/5 hover:text-white'
          "
        >
          {{ link.name }}
        </router-link>
        <router-link to="/contact" class="primary-button mt-3">Request a Quote</router-link>
      </nav>
    </div>
  </header>
</template>
