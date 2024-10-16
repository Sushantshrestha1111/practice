import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Job from '@/views/Job.vue'
import JobDetails from '@/views/JobDetails.vue'
import Notfound from '@/views/Notfound.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path:'/jobs',
    name:'jobs',
    component:Job
  },
  {
    path:'/jobs/:id',
    name:'jobsid',
    component:JobDetails,
    props:true
  },
  {
    path:'/all-jobs',
    redirect:'/jobs'

  },
// 404 Not found catch all page
{
  path:'/:catchAll(.*)',
  name:'notfound',
  component:Notfound
}

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
