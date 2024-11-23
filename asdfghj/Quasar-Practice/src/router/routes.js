const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/HomePage.vue') },
      { path: 'about', component: () => import('pages/AbothPage.vue') },
    ]
  },
 
  // {
  //   path: '/', // Root path
  //   component: () => import('layouts/MainLayout.vue'), // Use MainLayout for this route
  //   children: [
  //     { path: 'about', component: () => import('pages/HomePage.vue') }, // Home Page
  //     { path: '', component: () => import('pages/AboutPage.vue') }, // About Page
  //   ],
  // },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
