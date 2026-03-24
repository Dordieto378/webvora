import { createRouter, createWebHistory } from 'vue-router'
import MainLayout from '../layouts/MainLayout.vue'
import Home from '../pages/Home.vue'
import Services from '../pages/Services.vue'
import Portfolio from '../pages/Portfolio.vue'
import Pricing from '../pages/Pricing.vue'
import About from '../pages/About.vue'
import Contact from '../pages/Contact.vue'

const routes = [
  {
    path: '/',
    component: MainLayout,
    children: [
      { path: '', name: 'home', component: Home },
      { path: 'services', name: 'services', component: Services },
      { path: 'portfolio', name: 'portfolio', component: Portfolio },
      { path: 'pricing', name: 'pricing', component: Pricing },
      { path: 'about', name: 'about', component: About },
      { path: 'contact', name: 'contact', component: Contact },
    ],
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0, behavior: 'smooth' }
  },
})

export default router
