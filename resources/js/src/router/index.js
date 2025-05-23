import { createMemoryHistory, createRouter, createWebHashHistory, createWebHistory } from 'vue-router'


const routes = [
 // { path: '/', component: HomeView },
//{ path: '/about', component: AboutView },

{
    path:'/login',
    name:'login',
    component:()=>import('../pages/auth/LoginPage.vue'),
},
{
    path:'/signup',
    name:'signup',
    component:()=>import('../pages/auth/SignUpPage.vue'),
},
{
    path:'/dashboard',
    name:'dashboard',
    component:()=>import('../pages/admin/AdminPage.vue'),
},


]

export const router = createRouter({
  //history: createMemoryHistory(),
  history:createWebHistory('/app'),
  routes,
})