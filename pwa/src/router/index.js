import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '../views/HomePage.vue'
import ResultPage from '../views/ResultPage.vue'
import EstimationsList from '../views/EstimationsList.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    // {
    //   path: '/results',
    //   name: 'results',
    //   component: ResultPage
    // },
    {
      path: '/results/:id',
      name: 'results',
      component: ResultPage
    },
    {
      path: '/estimations',
      name: 'estimations',
      component: EstimationsList
    }
  ]
})

export default router
