import { Component } from 'react'
import { createMemoryHistory, createRouter } from 'vue-router'


const routes = [
 // { path: '/', component: HomeView },
//{ path: '/about', component: AboutView },

{
    path:'/login',
    name:'login',
    component:()=>import('../pages/LoginPage.vue'),
},
{
    path:'/signup',
    name:'signup',
    component:()=>import('../pages/SignUpPage.vue'),
}


]

export const router = createRouter({
  history: createMemoryHistory(),
  routes,
})