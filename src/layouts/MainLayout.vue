<script setup>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
</script>

<template>
  <div class="min-h-screen">
    <Navbar />
    <main class="mx-auto max-w-content px-6 py-10 lg:px-8 lg:py-14">
      <router-view />
    </main>
    <Footer />
  </div>
</template>
