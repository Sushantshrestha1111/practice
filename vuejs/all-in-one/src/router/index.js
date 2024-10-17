import { createRouter, createWebHistory } from 'vue-router'

import ExpenceTracker from '@/views/ExpenceTracker.vue'
import ToDo from '@/views/ToDo.vue'

const routes = [
  {
    path: '/',
    name: 'todo',
    component: ToDo
  },
  {
    path: '/expence',
    name: 'expence',
    component: ExpenceTracker
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
